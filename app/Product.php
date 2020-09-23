<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'category_id', 'product_name', 'product_slug',
        'product_code', 'product_quantity', 'short_description',
        'image_one',
        'long_description', 'price', 
        'image_two', 'image_three', 'status',
    ];

    public function relationBetweenCategory(){
        return $this-> hasOne(Category::class,'id','category_id');
    }
}
