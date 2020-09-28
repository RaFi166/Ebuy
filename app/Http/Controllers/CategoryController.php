<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Role');
    }
    
    public function add_category(){
        return view ('admin.category.add_category_form');
    }
   
        public function category_save(Request $request){
       
        $request->validate([
               'category_name'=> 'required',
           ]);
       
    Category::insert([
        'category_name'=> $request->category_name,
        'created_at'=> Carbon::now()
           
    ]);
   
    return back()->with('success','Category Added');
   
       }

       function all_category(){
           $all_categories= Category::all();
           return view('admin.category.all_category', compact('all_categories'));
       }

       function edit_category($cat_id){
           $single_category= Category::findOrFail($cat_id);
           return view ('admin.category.edit_category',compact('single_category'));
       }

       function category_update(Request $request){
        Category::findOrFail($request->category_id)->update([
            'category_name'=> $request->category_name,
            'updated_at'=> Carbon::now()
        ]);
        return back()->with('update', 'category updated');
       }

       function delete_category($cat_delete_id){
        Category::find($cat_delete_id)->delete();
        return back()->with('delete','category deleted');
       }

       function inactive_category($cat_id){
        Category::find($cat_id)->update(['status'=>0]);
        return back();
       }

       function active_category($cat_id){
        Category::find($cat_id)->update(['status'=>1]);
        return back();
       }

       //end
}
