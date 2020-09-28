<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontendController extends Controller
{
    public function index(){
       $all_products= Product::all();
        return view ('frontend.home_page', compact('all_products'));
    }
    public function product_details($product_id){
        $single_product= Product::findOrFail($product_id);
        return view('frontend.product_details', compact('single_product'));
    }
}
