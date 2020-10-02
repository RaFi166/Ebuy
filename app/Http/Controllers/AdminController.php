<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Contact;

class AdminController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('Role');
  }

      public function dashboard(){
        return view ('admin.admin_dashboard');
    }

    function all_message(){
        $all_messages= Contact::all();
        return view('admin.all_message.all_messages', compact('all_messages'));
    }
    function delete_message($delete_message){
           Contact:: findOrFail($delete_message)-> delete();
           return back()->with('message_remove','message has been deleted');
    }

     

    //end
}
