<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $guarded = false;

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function firstImage()
    {
        return $this->hasOne(ProductImage::class, 'product_id', 'id')->oldest('link_to_photo');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'category', 'name_of_category');
    }
}
