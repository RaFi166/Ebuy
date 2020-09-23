<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use Carbon\Carbon;

class CouponController extends Controller
{
   function add_coupon(){
       return view('admin.coupon.add_coupon');
   }

   function coupon_save(Request $request){
       Coupon::insert([
           'coupon_name'=>$request->coupon_name,
           'created_at'=>Carbon::now(),

       ]);
       return back()->with('success','Coupon added successfully');
   }

    function all_coupon(){
        $all_coupons=Coupon::all();
        return view('admin.coupon.all_coupon', compact('all_coupons'));
    }

    function edit_coupon($coupon_id){
       $single_coupon= Coupon::find($coupon_id);
        return view('admin.coupon.edit_coupon', compact('single_coupon'));
    }

    function update_coupon(Request $request){
        Coupon::find($request->coupon_id)->update([
           'coupon_name'=>$request->coupon_name,
           'updated_at'=>Carbon::now(),
        ]);
        return back()->with('success','coupon update successfully');

    }

     function delete_coupon($coupon_id){
          Coupon::find($coupon_id)->delete();
          return back()->with('delete','coupon has deleted');
     }

   //end
}
