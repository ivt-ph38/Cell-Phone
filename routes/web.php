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

Route::get('/view/admin', function () {
    return view('admin.master.master');
});
Route::get('/', function () {
    return view('user.index');
})->name("home");
Route::get('/store', function () {
    return view('user.store');
})->name("user.store");
Route::get('/product', function () {
    return view('user.product');
})->name("user.product");
Route::get('/checkout', function () {
    return view('user.checkout');
})->name("user.checkout");