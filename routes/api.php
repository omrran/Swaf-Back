<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('/products',ProductController::class);
Route::apiResource('/suppliers',SupplierController::class);
Route::apiResource('/orders',OrderController::class);
Route::apiResource('/orders-items',OrderItemController::class);
Route::apiResource('/customers',CustomerController::class);
Route::get('/orders/get-order-items/{id}',[OrderController::class,'getOrderItems']);