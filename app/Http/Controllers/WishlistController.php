<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Wishlist;

class WishlistController extends Controller
{
    
        public function __construct()
        {
            $this->middleware('auth');
        }

        function index($product_id){
            Wishlist::insert([
                'user_id'=> Auth::id(),
                'product_id'=> $product_id,
            ]);
            return back()->with('wishlist','Wishlist added successfully');

        }
    //end
}
