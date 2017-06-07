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


Route::get('/externalproduct', function() {
	return view('layouts.externalproduct');
});

Route::get('/adminexternalproduct', function(){
	return view('layouts.adminexternalproduct');
});