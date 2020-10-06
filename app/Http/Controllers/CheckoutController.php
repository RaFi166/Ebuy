<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    function index(){
        return view('frontend.checkout.checkout_page');
    }
}
