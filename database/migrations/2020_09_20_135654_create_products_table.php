<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
   
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('product_name');
            
            $table->integer('product_code');
            $table->integer('product_quantity');
            $table->text('short_description');
            $table->text('long_description');
            $table->integer('price');
            $table->string('image_one');
            $table->string('image_two');
            $table->string('image_three');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
        
    }

    
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
