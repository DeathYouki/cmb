<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExternalProductController extends Controller
{
    public function getExternalProduct(){
    	return view('layouts.externalproduct');
    }

    public function postExternalProduct(){
    	//
    }
}
