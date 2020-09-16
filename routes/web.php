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

// Route::get('/', function () {
//     return view('main.layouts.app');
// });

// Category Routes
Route::group([ 'middleware'=>'admin' ], function(){

	Route::resource('admin/main','CategoryController');

	// SubCategory Routes
	Route::resource('admin/sub','SubCategoryController');

	// Product Routes
	Route::resource('admin/pro','ProductController');

	// Product Image Routes
	Route::resource('admin/proimage','ProImageController');
	Route::post('admin/proimage/delete/{id}','ProImageController@destroy');

	Route::get('/changepassword','AdminRegisterController@changepassword');
	Route::post('/updatepassword','AdminRegisterController@updatepassword');
});
	// Admin Register Routes
	Route::get('/adminregister','AdminRegisterController@adminregister');
	Route::post('/adminstore','AdminRegisterController@adminstore');


	//Admin Login Routes
	Route::get('/adminlogin','AdminRegisterController@adminlogin')->name('adminlogin');
	Route::post('/adminlog','AdminRegisterController@adminlog');

	Route::get('/forgetpassword','AdminRegisterController@forgetpassword');
	Route::post('/recoverpassword','AdminRegisterController@recoverpassword');

	Route::get('/recoverpassword/{token}','AdminRegisterController@recoverpasswords');
	Route::PUT('/repassword/{token}','AdminRegisterController@repassword');

	// Admin Logout

	Route::get('/logout', function(){
		Auth::guard('admin')->logout();
		return redirect('/adminlogin');
	});

//Main Routes
Route::get('/','MainController@index');
Route::get('/detail/{id}','MainController@detail');
Route::get('/category/{id}','MainController@category');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Cart Controller

Route::get('/add/cart/{id}','CartController@addItem');
Route::get('/cart','CartController@index');
Route::get('/cart/remove/{id}','CartController@remove');
Route::get('/cart/update/','CartController@update');

// Review Controller
Route::GET('/review','ReviewController@index');
Route::GET('/show','ReviewController@show');


// Route::get('/cart/remove/{id}','CartController@remove');

// Route::get('/cart', function(){
// Cart::add(array(
//     'id' => 456, // inique row ID
//     'name' => 'Sample Item',
//     'price' => 67.99,
//     'quantity' => 4,
//     'attributes' => array()
// ));

// });

Route::get('/test',function(){
return \Cart::getContent();

});


// Api COntrolleer For Product

Route::get('/api/product','ProductApiController@index');
Route::get('/api/product/{id}','ProductApiController@show');

