<?php

use Illuminate\Support\Facades\Route;
use Auth;
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


//Server side
Route::group(['namespase'=>'Admin'], function(){
	Route::group(['prefix'=>'login', 'middleware'=>'CheckLogedIn'], function(){
		Route::get('/', 'AdminController@getLogin');
		Route::post('/', 'AdminController@postLogin');
	});

	Route::get('logout', 'AdminController@getLogout');

	Route::group(['prefix'=>'admin', 'middleware'=>'CheckLogedOut'],function(){
		Route::get('home', 'AdminController@getHome');
	});
});