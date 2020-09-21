<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class AdminController extends Controller
{
      public function dashboard(){
        return view ('admin.admin_dashboard');
    }

     

    //end
}
