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




// trang chu 
Route::get('/', function () { return view('user.index');})->name("user.home");
// Cac trang user
Route::group(['prefix'=>'user','as'=>'user.'],function () {
	// Trang category
	Route::get('/store', function () { return view('user.store');})->name("store");
	// Trang chi tiet san pham
	Route::get('/product', function () {return view('user.product');})->name("product");
	// Trang thanh toan
	Route::get('/checkout', function () {return view('user.checkout');})->name("checkout");
});