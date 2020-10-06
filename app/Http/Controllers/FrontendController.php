<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;

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

    public function products_by_category($category_id){
        //echo $category_id;
        $all_products = Product::where('category_id',$category_id)->get();
        return view ('frontend.products_by_category.products_by_category',compact('all_products'));
    }

    // public function profile($user_id){
    //     $user=User::find($user_id);
    //     return view ('frontend.profile.profile',compact('user'));
    // }

    //end
}
