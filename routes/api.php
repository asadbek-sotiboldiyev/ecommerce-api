<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FavouritesController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DeliveryMethodController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StatusOrderController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\UserPaymentCardsController;
use Illuminate\Support\Facades\Route;


Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('user', [AuthController::class, 'user']);
Route::post('register', [AuthController::class, 'register']);

Route::apiResources([
    'categories' => CategoryController::class,
    'products' => ProductController::class,
    'favourites' => FavouritesController::class,
    'categories.products' => CategoryProductController::class,
    'statuses' => StatusController::class,
    'statuses.orders' => StatusOrderController::class,
    'orders' => OrderController::class,
    'delivery-methods' => DeliveryMethodController::class,
    'payment-types' => PaymentTypeController::class,
    'user-addresses' => UserAddressController::class,
    'user-payment-cards' => UserPaymentCardsController::class,
    'reviews' => ReviewController::class,
    'products.reviews' => ProductReviewController::class,
]);
