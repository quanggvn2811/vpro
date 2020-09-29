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

//Server side
Route::group(['namespace'=>'Admin'], function(){
	Route::group(['prefix'=>'login', 'middleware'=>'CheckLogedIn'], function(){
		Route::get('/', 'AdminController@getLogin');
		Route::post('/', 'AdminController@postLogin');
	});

	Route::get('logout', 'AdminController@getLogout');

	Route::group(['prefix'=>'admin', 'middleware'=>'CheckLogedOut'],function(){
		Route::get('home', 'AdminController@getHome');

		//Categories
		Route::group(['prefix'=>'categories'], function(){
			Route::get('/', 'CategoryController@getCate');
			Route::post('/', 'CategoryController@postCate');

			Route::get('edit/{id}', 'CategoryController@getEditCate');
			Route::post('edit/{id}', 'CategoryController@postEditCate');


			Route::get('delete/{id}', 'CategoryController@deleteCate');
		});
		// Products
		Route::group(['prefix'=>'products'], function(){
			Route::get('/', 'ProductController@getProduct');

			Route::get('add', 'ProductController@getAddProduct');
			Route::post('add', 'ProductController@postAddProduct');

			Route::get('edit/{id}', 'ProductController@getEditProduct');
			Route::post('edit/{id}', 'ProductController@postEditProduct');

			Route::get('delete/{id}', 'ProductController@deleteProduct');
			
		});
	});
});

// Client side
Route::group(['namespace'=>'Shop'], function(){

	Route::get('/', 'HomeController@getHome');
	Route::get('details/{id}/{slug}', 'HomeController@getDetails');
	Route::post('details/{id}/{slug}', 'HomeController@postComment');
	Route::get('products-line/{id}/{slug}', 'HomeController@getProductLine');
	Route::get('search-list', 'HomeController@searchList');

});