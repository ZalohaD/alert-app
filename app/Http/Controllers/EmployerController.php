<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployerController extends Controller
{
    public function home(){
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

    public function job_edit($id) {
        $job = Job::findOrFail($id);
        $categories = Category::all();
        return view('profile.employer.job_edit', compact('job', 'categories'));
    }

    public function profile_store(Request $request){
        $data = $request->all();

        $user = User::find(auth()->user()->id);

        request()->validate([
            'first_name' => ['required', 'min:3', 'max:30'],
            'last_name' => ['required', 'min:3', 'max:30'],
            'company' => ['required']
        ]);

        $user->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'company_id' => $data['company']
        ]);

        return redirect()->route('employer.home');
    }

    public function store_job(Request $request){
        $data = $request->all();
        $user = User::find(auth()->user()->id);

        request()->validate([
            'job-title' => ['required', 'min:5', 'max:100'],
            'description' => ['required', 'min:20', 'max:256'],
            'city' => ['required', 'max:100'],
            'salary' => ['required', 'integer'],
            'experience' => ['required', 'integer'],
        ]);

        if (!$request->id) {
            Job::create([
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
        } else {
            Job::find($request->id)->update([
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
        }

        return redirect()->route('employer.jobs');
    }

    public function settings(){
        return view('profile.employer.settings');
    }

    public function store_settings(Request $request){
        $user = User::find(auth()->user()->id);

        if (! Hash::check($request->password, $user->password)) {
            return redirect()->route('employer.settings')->withErrors(['error' => 'Wrong password!']);
        }

        if ($request->new_password != $request->password_confirmation) {
            return redirect()->route('employer.settings')->withErrors(['error' => 'Password don\'t match!']);
        }

        $user->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->route('employer.settings');
    }
}
