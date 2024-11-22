<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    public function create(){
        $productImage = [
                "product_id" => "1",
                "link_to_photo" => "ProductImage321.png",
        ];

        ProductImage::create($productImage);

        return "Product Image was created!";
    }

    public function show(){
        $categories = ProductImage::all();
        return $categories;
        // return "this is show method in ProductImageController";
    }
}
