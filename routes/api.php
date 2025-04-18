<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FavouritesController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
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
    'orders' => OrderController::class,
]);
