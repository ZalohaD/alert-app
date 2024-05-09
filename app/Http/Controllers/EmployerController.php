<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    public function home(Request $request){
        $userId = Auth::id();
        $jobs = Job::where('user_id', $userId)->get();
        return view('profile.employer.main', compact('jobs'));
    }

    public function profile_store(Request $request){
        $data = $request->all();

        $user = User::find(auth()->user()->id);

        // add validation

        $user->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
        ]);

        return redirect()->route('employer.home');
    }

    public function store_job(Request $request){
        // post (redirect)
    }
}
