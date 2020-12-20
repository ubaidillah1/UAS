<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Auth;
// use Illuminate\Support\Facades\Auth;

use Auth;

class AuthController extends Controller
{
    public function login(){
        return view('layouts.newlogin');
    }
    public function register(){
        return view('layouts.newregister');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function postlogin(Request $request){
        //Kondisi Login
        if(Auth::attempt($request->only('email','password'))){
            //Jika Login Sukses
            return redirect('/dashboard');
        }else{
            //Jika Gagal
            return redirect('/newlogin');
        }
    }
    public function logout(){
        Auth::logout();
        //Redirect Halaman
        return redirect('/newlogin');
    }
    public function reject() {
        //menampilkan halaman reject
        return view('layouts.reject');
    }
    public function rejectrole() {
        //menampilkan halaman reject
        return view('layouts.rejectrole');
    }
}
