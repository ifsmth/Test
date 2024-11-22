<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductCotroller;
use App\Http\Controllers\ProductImageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(CategoryController $categoryController, ProductCotroller $productCotroller, ProductImageController $productImageController){
    $result1 = $categoryController->show();
    $result2 = $productCotroller->show();
    $result3 = $productImageController->show();

    return response()->json([
        'categories' => $result1,
        'products' => $result2,
        'products_images' => $result3,
    ]);
});

// Route::get('/test', [ProductCotroller::class,'MainPageInfo']);


// Route::get('/categories/create', [CategoryController::class,'create']);

// Route::get('/categories/show', [CategoryController::class,'show']);

// // Route::get('/categories/update', [\App\Http\Controllers\CategoryController::class,'update']);

// // Route::get('/categories/delete', [\App\Http\Controllers\CategoryController::class,'delete']);

// // ----------------------------------------------

// Route::get('/products/create', [ProductCotroller::class,'create']);

// Route::get('/products/show', [ProductCotroller::class,'show']);

// // -----------------------------------------------

// Route::get('/products/image/create', [ProductImageController::class,'create']);

// Route::get('/products/image/show', [ProductImageController::class,'show']);

