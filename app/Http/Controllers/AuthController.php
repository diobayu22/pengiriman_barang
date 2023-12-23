<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{



    public function login()
    {
        return view('auths.index');
    }

    public function postlogin(Request $request)
    {
        if (Auth::validate($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }

        return redirect('/login');
        // dd($request->all());
        // return view('auths.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
