<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home')
//Login
Route::get("login_customer","CustomerController@login_customer")->name("login_customer");
Route::post("post_login_customer","CustomerController@post_login_customer")->name("post_login_customer");

// customer
Route::get("register_customer","CustomerController@register_customer")->name("register_customer");
Route::post("post_register_customer","CustomerController@post_register_customer")->name("post_register_customer");
Route::get("add_img","CustomerController@add_img")->name("add_img");
Route::post("post_add_img","CustomerController@post_add_img")->name("post_add_img");

// the loai san pham
Route::get("get_product_type","TypeProductController@index")->name("typeproduct.index");
Route::get("view_post","TypeProductController@view_post")->name("typeproduct.store");
Route::post("post_typeproduct","TypeProductController@post_typeproduct")->name("typeproduct.post_typeproduct");
Route::get("update/{id}","TypeProductController@update")->name("typeproduct.update");
Route::post("post_update/{id}","TypeProductController@post_update")->name("typeproduct.post_update");
Route::get("deletd/{id}","TypeProductController@delete")->name("typeproduct.delete");


// size 
	
Route::get("get_size","SizeController@get_size")->name("get_size");
Route::get("view_insert_size","SizeController@view_insert_size")->name("view_insert_size");
Route::post("post_size","SizeController@post_size")->name("post_size");
Route::get("update_size/{id}","SizeController@update_size")->name("update_size");
Route::post("post_update_size/{id}","SizeController@post_update_size")->name("post_update_size");
Route::get("delete_size/{id}","SizeController@delete_size")->name("delete_size");



// san pham
Route::get("view_product","ProductController@index")->name("view_product");
Route::get("view_insert_product","ProductController@view_insert_product")->name("view_insert_product");
Route::post("post_insert_product","ProductController@post_insert_product")->name("post_insert_product");
Route::get("update_product/{id}","ProductController@update_product")->name("update_product");
Route::post("post_update_product/{id}","ProductController@post_update_product")->name("post_update_product");
Route::get("delete_product/{id}","ProductController@delete_product")->name("delete_product");



