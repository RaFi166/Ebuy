<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Product;
use Image;
use Carbon\Carbon;

class ProductController extends Controller
{
    function add_product(){
       $all_categories= Category::all();
        return view('admin.product.add_product_form', compact('all_categories'));
    }

    function product_save(Request $request){
        $request-> validate([
            'product_name'=> 'required',
            'category_id'=> 'required',
            
            'product_code'=> 'required',
            'product_quantity'=> 'required',
            'short_description'=> 'required',
            'long_description'=> 'required',
            'price'=> 'required',
            'image_one'=> 'required',
            'image_two'=> 'required',
            'image_three'=> 'required',
        ]);

       $image_one= $request->file('image_one');
	   $name_gen = hexdec(uniqid()).'.'. $image_one->getClientOriginalExtension();
	   Image::make($image_one)->resize(270,270)->save('frontend/images/product/'. $name_gen);
       $img_url1= 'frontend/images/product/'.$name_gen;
       
       $image_two= $request->file('image_two');
	   $name_gen = hexdec(uniqid()).'.'. $image_one->getClientOriginalExtension();
	   Image::make($image_two)->resize(270,270)->save('frontend/images/product/'. $name_gen);
       $img_url2= 'frontend/images/product/'.$name_gen;
       
       $image_three= $request->file('image_three');
	   $name_gen = hexdec(uniqid()).'.'. $image_one->getClientOriginalExtension();
	   Image::make($image_three)->resize(270,270)->save('frontend/images/product/'. $name_gen);
       $img_url3= 'frontend/images/product/'.$name_gen;
       
       Product::insert([
           'product_name'=> $request->product_name,
           'category_id'=> $request->category_id,
           //'product_slug'=> strlower(str_replace(' ','-'.$request->product_name)),
           'product_code'=> $request->product_code,
           'product_quantity'=> $request->product_quantity,
           'short_description'=> $request->short_description,
           'long_description'=> $request->long_description,
           'price'=> $request->price,
           'image_one'=> $img_url1,
           'image_two'=> $img_url2,
           'image_three'=> $img_url3,
           'created_at'=> Carbon::now(),
       ]);
       return back()->with('success','Products inserted successfully');
    }


    //end
}

