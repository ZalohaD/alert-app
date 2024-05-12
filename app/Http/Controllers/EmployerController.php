<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    public function home(Request $request){
        $companies = Company::all();
        return view('profile.employer.home', compact('companies'));
    }

    public function jobs(){
        $userId = Auth::id();
        $jobs = Job::where('user_id', $userId)->get();
        return view('profile.employer.jobs', compact('jobs'));
    }

    public function create_job(){
        $categories = Category::all();
        return view('profile.employer.create_job', compact('categories'));
    }

    public function delete_job($id){
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect()->route('employer.jobs')->with('success', 'Success');
    }

    public function profile_store(Request $request){
        $data = $request->all();

        $user = User::find(auth()->user()->id);

        // add validation

        $user->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'company_id' => $data['company']
        ]);

        return redirect()->route('employer.home');
    }

    public function store_job(Request $request){
        $data = $request->all();
        $user = User::find(auth()->user()->id);

        // add validation

        $job = Job::create([
            'title' => $data['job-title'],
            'description' => $data['description'],
            'city' => $data['city'],
            'worktime' => $data['worktime'],
            'salary' => $data['salary'],
            'experience' => $data['experience'],
            'english' => $data['english'],
            'category_id' => Category::where('name', $data['category'])->first()->id,
            'user_id' => $user->id,
            'company_id' => $user->company_id
        ]);

        return redirect()->route('employer.jobs');
    }
}
