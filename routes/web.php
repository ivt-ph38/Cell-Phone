<?php

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
//chuc nang search
Route::post('/autocomplete/fetch', 'User\SearchController@fetch')->name('autocomplete.fetch');
//chuc nang search

// trang chu 
Route::get('/', "User\CategoryController@index")->name("user.home"); 
 
// Cac trang user
Route::group(['prefix'=>'user','as'=>'user.'],function () {
	// Trang cac san pham trong category 
	Route::get('/category/product/{id}/{arrange}', "User\CategoryController@show")->name("category");
	// Trang chi tiet san pham
	Route::get('/product/{id}', "User\ProductController@show")->name("product");
	//Search 
	Route::post('/search', "User\SearchController@getProductId")->name("search");



	//add san pham vao cart
	Route::get('/cart/add/{id}',"User\ProductController@getAddToCart")->name("addToCart");
	//trang giỏ hàng
	Route::get('/cart/show', "User\ProductController@getCart")->name("cart");
	//update qty gio hang
	Route::get('/cart/update/{id}/{action}', "User\ProductController@updateCart")->name("cartUpdate");
	//delete sp gio hang
	Route::get('/cart/delete/{id}', "User\ProductController@deleteProduct")->name("deleteProduct");
	//Check dang nhap de vao thanh toan
	Route::get('/cart/checklogin', "User\OrderController@checkLogin")->name("checkLoginToCart");
	//luu don hang vao database
	Route::get('/cart/store', "User\OrderController@store")->name("cartStore");
	//huy don hang
	Route::get('/order/update/{id}/{status}', "User\OrderController@update")->name("orderUpdate");
	
	//kiem tra dang nhâp user
	// Route::get('/checklogin', "User\UserController@checkLogin")->name("checkLogin");
	Route::post('/login/{role}', "Auth\LoginController@login")->name("login");
	Route::get('/logout', "Auth\LoginController@logout")->name("logout");
	Route::post('/register/{role}', "User\UserController@register")->name("register");
	Route::get('/account', "User\UserController@show")->name("Account");
   Route::get('/singup/{role}',  function ($role) {  return view('user.singUp',compact('role'));})->name("ViewSingUp");
	// Trang thanh toan
	Route::get('/checkout', function () {return view('user.checkout');})->name("checkout");
});


//test

Route::get('/test',"User\ProductController@filterPrice");

