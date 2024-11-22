<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    // public function index(){
    //     return "this is index method";
    // }

    public function show(){
        $categories = Category::all()->makeHidden(['created_at', 'updated_at']);
        return $categories;
    }

    public function MainPageInfo(){
        $categories = Category::take(8)->get()->makeHidden(['created_at', 'updated_at']);
        return $categories;
    }

    public function ProductsOfCategory($category_id){
        $category = Category::find($category_id);
        $products = $category->products()->paginate(9)->makeHidden(['created_at', 'updated_at']);
        return response()->json([
            'categories' => CategoryController::show(),
            'products' => $products,
            // 'products_images' => $products->images()->get(),
        ]);
    }




    // public function update(){
    //     return "this is index method";
    // }

    // public function delete(){
    //     return "this is index method";
    // }

    // public function create(){
    //     $category = [
    //         "name_of_category"=> "Жива риба",
    //         "category_image"=> "LiveFishCategoryImage.png",
    //         "category_description"=> "This is live fish for sale",
    //     ];

    //     Category::create($category);

    //     return "Category was created!";
    // }
    
}
