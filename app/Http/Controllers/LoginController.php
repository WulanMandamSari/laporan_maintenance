<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        // dd($request->all());
        if ($request['email'] == null && $request['email'] == null) {

            return redirect('login')->with('error', 'Email tidak boleh kosong!!');

        } elseif ($request['password'] == null && $request['password'] == null) {

            return redirect('login')->with('error', 'Password tidak boleh kosong!!');

        } else if (Auth::attempt($request->only('email','password'))){
            return redirect('beranda');
        
        }else{
        return redirect('login')->with('error','Email atau password anda salah!!');
    }
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
