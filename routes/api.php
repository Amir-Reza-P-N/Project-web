<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\OrderApiController;
use App\Http\Controllers\Api\CartApiController;
use App\Http\Controllers\Api\PaymentApiController;
use App\Http\Controllers\Api\AddressApiController;
use App\Http\Controllers\Api\ReviewApiController;
use App\Http\Controllers\Api\DiscountApiController;
use App\Http\Controllers\Api\ShipmentApiController;
use App\Http\Controllers\Api\CommentApiController;

Route::apiResource('users', UserApiController::class);
Route::apiResource('products', ProductApiController::class);
Route::apiResource('categories', CategoryApiController::class);
Route::apiResource('orders', OrderApiController::class);
Route::apiResource('carts', CartApiController::class);
Route::apiResource('payments', PaymentApiController::class);
Route::apiResource('addresses', AddressApiController::class);
Route::apiResource('reviews', ReviewApiController::class);
Route::apiResource('discounts', DiscountApiController::class);
Route::apiResource('shipments', ShipmentApiController::class);
Route::apiResource('comments', CommentApiController::class);
