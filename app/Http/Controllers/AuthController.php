<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showFormLogin() {
        return view('auth.login');
    }

    function login(Request $request) {
        $data = $request->only('email','password');
        if (Auth::attempt($data)){
            return redirect()->route('book.index');
        } else {
            session()->flash('error-login','Account not exist!');
            return back();
        }
    }
    function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}
