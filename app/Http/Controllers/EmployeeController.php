<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function home(){
        return view('profile.employee.home');
    }

    public function profile_store(Request $request){
        $data = $request->all();

        $user = User::find(auth()->user()->id);

        request()->validate([
            'first_name' => ['required', 'min:3', 'max:30'],
            'last_name' => ['required', 'min:3', 'max:30'],
            'email' => ['required', 'email', 'max:50', 'unique:users,email']
        ], [
            'email.unique' => 'Email already taken',
        ]);

        $user->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email']
        ]);

        return redirect()->route('employee.home');
    }

    public function create_portfolio(){
        return view('profile.employee.portfolio');
    }

    public function store_portfolio(Request $request){
        $data = $request->all();

        $user = User::find(auth()->user()->id);

        // add validation

        if ($user->portfolio()->exists()) {
            $user->portfolio()->update([
                'about' => $data['about'],
                'skills' => $data['skills'],
                'experience' => $data['experience'],
                'education' => $data['education']
            ]);
        } else {
            $user->portfolio()->create([
                'user_id' => $user->id,
                'about' => $data['about'],
                'skills' => $data['skills'],
                'experience' => $data['experience'],
                'education' => $data['education']
            ]);
        }

        return redirect()->route('employee.create_portfolio');
    }

    public function settings(){
        return view('profile.employee.settings');
    }

    public function store_settings(Request $request){
        $user = User::find(auth()->user()->id);

        if (! Hash::check($request->password, $user->password)) {
            return redirect()->route('employee.settings')->withErrors(['error' => 'Wrong password!']);
        }

        if ($request->new_password != $request->password_confirmation) {
            return redirect()->route('employee.settings')->withErrors(['error' => 'Password don\'t match!']);
        }

        $user->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->route('employee.settings');
    }
}
