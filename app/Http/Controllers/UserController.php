<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
//use App\Models\Products;
use Illuminate\support\facades\Auth;
use Illuminate\support\facades\Hash;

//echo Hash::make('123456');
//exit;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login');
    } 

    public function dologin(Request $Request):RedirectResponse
    {
         //echo bcrypt('123456');
        // exit;
        $credentials = $Request->validate([
            'email' =>['required','email'],
              'password' =>['required']
        ]);
        
        if(Auth::attempt($credentials)){
            $Request->session()->regenerate();
            return redirect()->intended('/');
        }
        
        return back()->withErrors([
            'email'=>'the provided credentials do not match our records.',
        ])->onlyInput('email');
    } 

    public function logout(Request $Request):RedirectResponse
    {
        Auth::logout();
        $Request->session()->invalidate();
        $Request->session()->regenerateToken();
        return redirect('/');
    }

}