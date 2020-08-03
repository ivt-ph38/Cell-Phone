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
});

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/a', function () {
//     return view('store');
// });





// ----------User-----------// 
Route::resource('user', 'UserController');


Route::group(['namespace'=>'Admin'],function(){
	// ----------Home-----------// 
	Route::get('/', 'CategoryController@showCategory');
	// ----------Category-----------// 
	Route::resource('category', 'CategoryController');
	// ----------Product-----------// 
	Route::resource('product', 'ProductController');
	// ----------Role-----------// 
	Route::resource('role', 'RoleController');

});

