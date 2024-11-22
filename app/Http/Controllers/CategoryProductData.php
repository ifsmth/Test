<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductCotroller;
use Illuminate\Http\Request;

class CategoryProductData extends Controller
{
    public function MainPageInfo(CategoryController $categoryController, ProductCotroller $productCotroller){
        $result1 = $categoryController->MainPageInfo();
        $result2 = $productCotroller->MainPageInfo();
    
        return response()->json([
            'categories' => $result1,
            'products' => $result2,
        ]);
    }


    public function ProductsPage(CategoryController $categoryController, ProductCotroller $productCotroller){
        $result1 = $categoryController->show();
        $result2 = $productCotroller->show();
    
        return response()->json([
            'categories' => $result1,
            'products' => $result2,
        ]);
    }

    // public function ProductPageWithCategory($category_id){
    //     $categoryController = new CategoryController;

    //     return response()->json([ProductCotroller::class, ]);
    // }
}
