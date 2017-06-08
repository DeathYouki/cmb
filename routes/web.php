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
			Route::resource('/rejetés', 'Admin\Commandes\Berra\RejetesController', 
				['names' => [
						'index' => 'rejetésberra.index',
						'create' => 'rejetésberra.create',
						'store' => 'rejetésberra.store',
						'show' => 'rejetésberra.show',
						'edit' => 'rejetésberra.edit',
						'update' => 'rejetésberra.update',
						'destroy' => 'rejetésberra.destroy'
					]
				]);
		});
		//Hna Routes
		Route::group(['prefix' => 'hna'], function() {
			Route::resource('/commandés', 'Admin\Commandes\Hna\CommandesController');
			Route::resource('/livrés', 'Admin\Commandes\Hna\LivresController');
			Route::resource('/rejetés', 'Admin\Commandes\Hna\RejetesController', 
				['names' => [
						'index' => 'rejetéshna.index',
						'create' => 'rejetéshna.create',
						'store' => 'rejetéshna.store',
						'show' => 'rejetéshna.show',
						'edit' => 'rejetéshna.edit',
						'update' => 'rejetéshna.update',
						'destroy' => 'rejetéshna.destroy'
					]
				]);		
		});
	});
	//Haouta Routes
	Route::group(['prefix' => 'haouta'], function() {
		Route::resource('/vitrine', 'Admin\Haouta\VitrineController', 
			['names' => [
					'index' => 'vitrinehaouta.index',
					'create' => 'vitrinehaouta.create',
					'store' => 'vitrinehaouta.store',
					'show' => 'vitrinehaouta.show',
					'edit' => 'vitrinehaouta.edit',
					'update' => 'vitrinehaouta.update',
					'destroy' => 'vitrinehaouta.destroy'
				]
			]);
		Route::resource('/en-attentes', 'Admin\Haouta\EnAttentesController');
		Route::resource('/ajout-lien', 'Admin\Haouta\AjoutLienController');
	});
	//CMH Routes
	Route::group(['prefix' => 'cmh'], function() {
		Route::resource('/vitrine', 'Admin\Cmh\VitrineController', 
			['names' => [
					'index' => 'vitrinecmh.index',
					'create' => 'vitrinecmh.create',
					'store' => 'vitrinecmh.store',
					'show' => 'vitrinecmh.show',
					'edit' => 'vitrinecmh.edit',
					'update' => 'vitrinecmh.update',
					'destroy' => 'vitrinecmh.destroy'
				]
			]);
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