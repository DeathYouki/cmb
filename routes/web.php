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
Route::get('/', function() {
	return "!!";
});

Route::group(['prefix' => 'admin'], function() {
	Route::get('/', 'Admin\LoginController@getLogin');
	Route::group(['prefix' => 'commandes'], function() {
		Route::group(['prefix' => 'berra'], function() {
			Route::resource('/en-suspens', 'Admin\Commandes\Berra\EnSuspensController');
			Route::resource('/payés', 'Admin\Commandes\Berra\PayesController');
			Route::resource('/achetés', 'Admin\Commandes\Berra\AchetesController');
			Route::resource('/rejetés', 'Admin\Commandes\Berra\RejetesController');
		});
		Route::group(['prefix' => 'hna'], function() {
			Route::resource('/commandés', 'Admin\Commandes\Hna\CommandesController');
			Route::resource('/livrés', 'Admin\Commandes\Hna\LivresController');
			Route::resource('/rejetés', 'Admin\Commandes\Hna\RejetesController');		
		});
	});
});


Route::get('/externalproduct', function() {
	return view('layouts.externalproduct');
});

Route::get('/adminexternalproduct', function(){
	return view('layouts.adminexternalproduct');
});