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


// Route::get('/home/admin', function () {
//     return view('admin.master.master');
// });
// Route::get('/', function () {
//     return view('user.index');
// });

// Route::get('/', function () {
//     return view('admin.product.list');
// });
// Route::get('/a', function () {
//     return view('store');
// });

Route::group(['namespace'=>'Admin','prefix'=>'admin' ],function(){
	// Route::get('/login-home', function () {
 //    return view('admin.login.login');
	// });
	// Route::get('home', function () {
 //    return view('admin.master.master');
	// });

	// ----------Category-----------// 
	Route::resource('category', 'CategoryController');
	// ----------Product-----------// 
	Route::resource('product', 'ProductController');

	// ----------User-----------// 
	Route::resource('user', 'UserController');
		
	// ----------Role-----------// 
	Route::resource('role', 'RoleController');
	// ----------Order-----------// 
	Route::resource('order', 'OrderController');
	// ----------OrderDeatil-----------// 
	Route::resource('orderdetail', 'OrderDetailController');
	// ----------Send order to mail-----------// 
	Route::get('mail/{id}', 'OrderController@sendMail')->name('sendmail');
	// ----------search -----------// 
	Route::get('searchProduct', 'ProductController@search')->name('search_product');
	Route::get('searchCategory', 'CategoryController@search')->name('search_category');
	Route::get('searchUser', 'UserController@search')->name('search_user');
	Route::get('searchOrder', 'OrderController@search')->name('search_order');

});

Auth::routes();
Route::get('/admin-login', 'Auth\LoginController@form_login');
Route::post('/admin-login', 'Auth\LoginController@login')->name('adminlogin');
Route::get('/home', 'HomeController@index')->name('home');
