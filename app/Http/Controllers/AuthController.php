<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect('posts');
        }else{
            return redirect('login')->with('error_message', 'Username or Password is Wrong');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }
}
