<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Resources\ReviewCollection;
use App\Http\Resources\ReviewResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function __construct() {
        $this->middleware('auth:sanctum');
    }

    public function index(Product $product) {
        return response()->json([
            'overall_rating' => $product->reviews()->avg('rating'),
            'review_count' => $product->reviews()->count(),
            'reviews' => $product->reviews()->paginate(2),
        ]);
    }

    public function store(Product $product, StoreReviewRequest $request) {
        $product->reviews()->create([
            'user_id' => auth()->user()->id,
            'rating' => $request['rating'],
            'body' => $request['body']
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Review created'
        ]);
    }
}
