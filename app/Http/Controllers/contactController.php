<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class contactController extends Controller
{
    function index(){
        return view('frontend.contact.contact');
    }

     function message_store(Request $request){
        contact::insert([
            'name'=> $request->name,
            'email'=> $request->email,
            'message'=> $request->message,
        ]);
        return back();

    }

    //end
}
