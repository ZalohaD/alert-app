<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function login_validate(Request $request){
        
        $validated = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                'email' => 'Credentials don\'t match'
            ]);
        };

        request()->session()->regenerate();

        return redirect('/');
    }

    public function logout() {

        Auth::logout();

        return redirect('/');
    }
}
