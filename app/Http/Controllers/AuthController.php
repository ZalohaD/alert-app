<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function login_validate(Request $request){
        // post, redirect
    }

    public function register(){
        return view("auth.register");
    }

    public function register_store(Request $request){
        // post, redirect
    }
}
