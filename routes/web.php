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
Route::get('/autocomplete', 'User\SearchController@index');
Route::post('/autocomplete/fetch', 'User\SearchController@fetch')->name('autocomplete.fetch');
//chuc nang search
// Route::get('/setcookie', 'User\CookieController@setCookie');
// Route::get('/getcookie', 'User\CookieController@getCookie');
 Route::get('/session', 'User\SessionController@index');

// trang chu 
Route::get('/', "User\CategoryController@index")->name("user.home"); 
// Cac trang user
Route::group(['prefix'=>'user','as'=>'user.'],function () {
	// Trang category
	Route::get('/category/{id}', "User\CategoryController@show")->name("category");
	// Trang chi tiet san pham
	Route::get('/product/{id}', "User\ProductController@show")->name("product");
	///trang giỏ hàng
	Route::put('/cart', "User\OrderController@show")->name("cart");
	// Trang thanh toan
	Route::get('/checkout', function () {return view('user.checkout');})->name("checkout");
});