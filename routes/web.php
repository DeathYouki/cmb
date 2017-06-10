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

//Home
Route::get('/', function() {
	return "HOME";
});

Route::group(['prefix' => 'admin'], function() {
	// Admin Authentication Routes
	$this->get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
	$this->post('login', 'Admin\Auth\LoginController@login')->name('admin.login.submit');

	//Admin workspace
	Route::resource('/administration', 'Admin\AdministrationController');

	//Unexisting links error
	Route::get('/{error404}', function() {
		return redirect()->route('error404');
	})->where('error404', '[A-Za-z0-9]*');
});

//Extension Routes
Route::get('/externalproduct', function() {
	return view('layouts.externalproduct');
});
Route::get('/adminexternalproduct', function(){
	return view('layouts.adminexternalproduct');
});


// User Auth routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Error Routes
Route::get('/error404', function() {
	return view('layouts.Admin.error404');
})->name('error404');