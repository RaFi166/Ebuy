<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

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

     

    //end
}
