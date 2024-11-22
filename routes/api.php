<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductCotroller;

use App\Http\Controllers\CategoryProductData;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', [CategoryProductData::class, 'MainPageInfo']);

Route::get('/products', [CategoryProductData::class, 'ProductsPage']);

Route::get('/products/{category_id}', [CategoryController::class, 'ProductsOfCategory']);

Route::get('/{product_id}', [ProductCotroller::class, 'ShowSingleProductInfo']);

// Route::get('/test', [ProductCotroller::class, 'show']);