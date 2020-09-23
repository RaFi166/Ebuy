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
}
