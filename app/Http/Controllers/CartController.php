<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    function add_to_cart(Request $request, $product_id){

        $check= Cart::where('product_id', $product_id)->where('user_ip',request()->ip())->first();
       if($check){
        Cart::where('product_id',$product_id)->increment('qty');
        return back();
       }
       else{
        Cart::insert([
            'product_id'=>$product_id,
            'qty'=> 1,
            'price'=> $request->price,
            'user_ip'=>request()->ip(),
        ]);
        return back();

    }
} 

        function cart_page(){
            $carts= Cart::where('user_ip',request()->ip())->get();
            $sub_total=Cart::all()->where('user_ip',request()->ip())->sum(function($t){
                return $t->price * $t->qty;
            });
            return view('frontend.cart.cart_page', compact('carts','sub_total'));
        
    }

//end
}
