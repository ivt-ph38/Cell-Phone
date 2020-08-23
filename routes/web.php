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


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
	Route::group(['namespace'=>'Admin'],function(){

		Route::prefix('admin')->group(function () {

			Route::group([
			'middleware' => 'check_role:hãng sản phẩm'
				],function () {
					// ----------Category-----------// 
					Route::resource('category', 'CategoryController');
					Route::get('searchCategory', 'CategoryController@search')->name('search_category');
			});
			Route::group([
			'middleware' => 'check_role:sản phẩm'
				],function () {
					// ----------Product-----------// 
					Route::resource('product', 'ProductController');
					Route::get('searchProduct', 'ProductController@search')->name('search_product');
			});
			Route::group([
			'middleware' => 'check_role:đơn hàng'
				],function () {
					// ----------Order-----------// 
					Route::resource('order', 'OrderController');
					Route::get('searchOrder', 'OrderController@search')->name('search_order');
					// ----------Send order to mail-----------// 
					Route::get('mail/{id}', 'OrderController@sendMail')->name('sendmail');
			});
			Route::group([
			'middleware' => 'check_role:khách hàng'
				],function () {
					//---- module Users ----//
					Route::resource('user', 'UserController');
					Route::get('searchUser', 'UserController@search')->name('search_user');
			});
			
    		Route::group([
			'middleware' => 'check_role:role'
				],function () {
					//---- module Role  ----//
					Route::resource('role', 'RoleController');
			});
			Route::group([
			'middleware' => 'check_role:phân quyền người dùng'
				],function () {
					//---- module User Authorization  ----//
					Route::resource('userAuth', 'UserAuthorizationController');
			});
		});
	});
});
