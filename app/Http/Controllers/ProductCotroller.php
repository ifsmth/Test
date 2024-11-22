<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductCotroller extends Controller
{
    public function create(){
        $product = [
                "name_of_product" => "Скумбрія",
                "category" => "Жива риба",
                "price_per_unit" => "29.99",
                "amount" => "170",
                "description_of_prod" => "Жива Скумбрія: Не риба - а мрія",
                "discount" => "0",
        ];

        Product::create($product);

        return "Product was created!";
    }

    public function show(){
        $products = Product::with('firstImage')->paginate(9);
        return $products->map(function ($product) {
            return [
                'id' => $product->id,
                'name_of_product' => $product->name_of_product,
                'price_per_unit' => $product->price_per_unit,
                'description_of_prod' => $product->description_of_prod,
                'main_image' => $product->firstImage->link_to_photo ?? null,
            ];
        });
    }

    // public function getCountForPagination(){
    //     return Product::getCountForPagination();
    // }

    public function MainPageInfo()
    {
        $products = Product::with('firstImage') // Завантажуємо перше зображення
            ->take(8) // Беремо перші 8 продуктів
            ->get();

        // Формуємо відповідь
        return $products->map(function ($product) {
            return [
                'id' => $product->id,
                'name_of_product' => $product->name_of_product,
                'price_per_unit' => $product->price_per_unit,
                'description_of_prod' => $product->description_of_prod,
                'main_image' => $product->firstImage->link_to_photo ?? null,
            ];
        });
    }

    public function ShowSingleProductInfo($product_id){
        return response()->json([
            'product_info' => Product::find($product_id)->makeHidden(['created_at', 'updated_at']),
            'product_images' => Product::find($product_id)->images()->get()->makeHidden(['product_id','created_at', 'updated_at']),
        ]);
    }
}
