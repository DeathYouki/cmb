<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    public function __construct() {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('layouts.Admin.auth.login');
    }

    public function login(Request $request)
    {
        //Validate the form data
        $this->validate($request, [
            'email' => 'required|required',
            'password' => 'required|String|min:6'
        ]);

        //Attempt to log the admin in
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            //If successful then redirect to admin dashboard
            return redirect()->intended(route('administration.index'));
        }
        //If unsuccessful then redirect back to login
        return redirect()->back()->withInput($request->only('email', 'remember')); 
    }
}
