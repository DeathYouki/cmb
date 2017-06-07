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
	//Login Route
	Route::get('/', 'Admin\LoginController@getLogin');
	Route::post('/', 'Admin\LoginController@postLogin');
	//Commandes Routes
	Route::group(['prefix' => 'commandes'], function() {
		//Berra Routes
		Route::group(['prefix' => 'berra'], function() {
			Route::resource('/en-suspens', 'Admin\Commandes\Berra\EnSuspensController');
			Route::resource('/payés', 'Admin\Commandes\Berra\PayesController');
			Route::resource('/achetés', 'Admin\Commandes\Berra\AchetesController');
			Route::resource('/rejetés', 'Admin\Commandes\Berra\RejetesController');
		});
		//Hna Routes
		Route::group(['prefix' => 'hna'], function() {
			Route::resource('/commandés', 'Admin\Commandes\Hna\CommandesController');
			Route::resource('/livrés', 'Admin\Commandes\Hna\LivresController');
			Route::resource('/rejetés', 'Admin\Commandes\Hna\RejetesController');		
		});
	});
	//Haouta Routes
	Route::group(['prefix' => 'haouta'], function() {
		Route::resource('/vitrine', 'Admin\Haouta\VitrineController');
		Route::resource('/en-attentes', 'Admin\Haouta\EnAttentesController');
		Route::resource('/ajout-lien', 'Admin\Haouta\AjoutLienController');
	});
	//CMH Routes
	Route::group(['prefix' => 'cmh'], function() {
		Route::resource('/vitrine', 'Admin\Cmh\VitrineController');
		Route::resource('/stock', 'Admin\Cmh\StockController');
		Route::resource('/ajout-produit', 'Admin\Cmh\AjoutProduitController');
	});
	//Users Routes
	Route::group(['prefix' => 'utilisateurs'], function() {
		Route::resource('/comptes', 'Admin\Utilisateurs\ComptesController');
		Route::resource('/plaintes', 'Admin\Utilisateurs\PlaintesController');
	});
});


Route::get('/externalproduct', function() {
	return view('layouts.externalproduct');
});

Route::get('/adminexternalproduct', function(){
	return view('layouts.adminexternalproduct');
});