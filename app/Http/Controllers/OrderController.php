<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Models\Order;
use App\Models\Product;
use App\Models\Stock;
use App\Models\UserAddress;

class OrderController extends Controller
{
    public function __construct() {
        $this->middleware('auth:sanctum');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return auth()->user()->orders;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        // dd($request);
        $sum = 0;
        $products = [];
        $address = UserAddress::find($request->address_id);

        foreach ($request['products'] as $request_product) {
            $product = Product::with('stocks')->findOrFail($request_product['product_id']);
            $product->quantity = $request_product['quantity'];
            $stock_id = $request_product['stock_id'];

            // FAIL
            if(!$product->stocks()->find($stock_id)){
                return response()->json([
                    'status' => 'fail',
                    'message' => 'stock not found',
                ]);
            }
            if($product->stocks()->find($stock_id)->quantity < $request_product['quantity']){
                return response()->json([
                    'status' => 'fail',
                    'message' => 'product not enogh',
                ]);
            }
            // ORDER CREATE
            $product_wih_stock = $product->withStocks($stock_id);
            $resource = new ProductResource($product_wih_stock);
            
            $sum += $product->price * $request_product['quantity'];
            $products[] = $resource->resolve();
        }

        $order = auth()->user()->orders()->create([
            'comment' => $request->comment,
            'delivery_method_id' => $request->delivery_method_id,
            'payment_type_id' => $request->payment_type_id,
            'sum' => $sum,
            'address' => $address,
            'products' => $products
        ]);
        if($order){
            foreach ($products as $product) {
                $stock = Stock::find($product['invertory'][0]['id']);
                $stock->quantity -= $product['order_quantity'];
                $stock->save();
            }
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Order created'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return new OrderResource($order);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
