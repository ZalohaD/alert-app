<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
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

        return redirect('/');
    }
}
