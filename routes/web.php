<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//frontend...............
Route::get('/','FrontendController@index')->name('home_page');

//admin...............
Route::get('admin/dashboard','AdminController@dashboard')->name('dashboard');


//category...............
Route::get('admin/add_category','CategoryController@add_category')-> name('add_category');
Route::post('admin/add_category/save','CategoryController@category_save')-> name('category_save');
Route::get('admin/all_category','CategoryController@all_category')-> name('all_category');
Route::get('admin/edit_category/{cat_id}','CategoryController@edit_category')-> name('edit_category');
Route::post('admin/category_update','CategoryController@category_update')-> name('category_update');
Route::get('admin/delete_category/{cat_delete_id}','CategoryController@delete_category')-> name('delete_category');
Route::get('admin/all_category/inactive/{cat_id}','CategoryController@inactive_category');
Route::get('admin/all_category/active/{cat_id}','CategoryController@active_category');

//products.........................
Route::get('admin/add_product','ProductController@add_product')-> name('add_product');
Route::post('admin/add_product/save','ProductController@product_save')-> name('product_save');
Route::get('admin/all_product','ProductController@all_products')-> name('all_products');
Route::get('admin/edit_product/{product_id}','ProductController@edit_product')-> name('edit_product');
Route::post('admin/edit_product/save','ProductController@update_product')-> name('update_product');


//coupon..........................

Route::get('admin/add_coupon','CouponController@add_coupon')-> name('add_coupon');
Route::post('admin/add_coupon/save','CouponController@coupon_save')-> name('coupon_save');
Route::get('admin/all_coupon','CouponController@all_coupon')-> name('all_coupon');
Route::get('admin/edit_coupon/{coupon_id}','CouponController@edit_coupon')-> name('edit_coupon');
Route::post('admin/edit_coupon/save','CouponController@update_coupon')-> name('update_coupon');
Route::get('admin/delete_coupon/{coupon_id}','CouponController@delete_coupon')-> name('delete_coupon');