<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
class admincontroller extends Controller
{
    function login(){
        return view('auth.login');
    }
    
    function auth_login(Request $request){

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember =!empty($request->remember )? true: false;

        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            // Login successful
            return redirect('/dashboard');  // Redirect to a dashboard or a different page
        } else {
            // If login fails
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }
}
