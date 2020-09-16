<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{

	// Login
    public function getLogin(){
    	return view('admin.login');
    }
    public function postLogin(Request $request){
    	$email = $request->email;
    	$password = $request->password;
    	$data = ['email'=>$email, 'password'=>$password];
    	if ($request->remember) {
    		$remember = true;
    	} else {
    		$remember = false;
    	}
    	if (Auth::attempt($data, $remember)) {
    		return redirect()->intended('admin/home');
    	} else {
    		return back()->withInput()->with('error', 'Incorrectly email or password!');
    		// return redirect()->intended('login/');
    	}

    }
    // Log out
    public function getLogout(){
    	Auth::logout();
    	return redirect()->intended('login');
    }

    // Admin home
    public function getHome(){
    	return view('admin.index');
    }

}
