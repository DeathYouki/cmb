<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function getLogin() {
    	return view('layouts.Admin.Login');
    }

    public function postLogin() {
    	return redirect()->route('en-suspens.index');
    }
}
