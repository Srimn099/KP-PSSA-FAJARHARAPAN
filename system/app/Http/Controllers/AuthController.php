<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index(){
        return view('login');
    }
    function aksiLogin(Request $request){


        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]);

        $cekLogin = Auth::guard('admin')->attempt($validate);

        if($cekLogin){
            return redirect()->intended('dashboard')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Login gagal');

    }

    function logout(){
        Auth::guard('admin')->logout();
        return redirect()->intended('/')->with('success', 'Logout berhasil');
    }
}
