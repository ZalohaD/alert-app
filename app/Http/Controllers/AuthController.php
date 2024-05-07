<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
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
                'email' => 'Invalid email'
            ]);
        };

        request()->session()->regenerate();

        return redirect('/employee/home');
    }

    public function register(){
        return view("auth.register");
    }

    public function register_store(Request $request){
        
        request()->validate([
            'first_name' =>['required'],
            'last_name' =>['required'],
            'email' =>['required', 'email', 'max:254'],
            'password' =>['required'],
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'user_type' => $request->user_type,
        ]);

        Auth::login($user);

        return redirect('/employee/home');
    }
}
