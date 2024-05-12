<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use App\Models\ProgrammingLanguage;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobs(Request $request){
        $data = $request->all();

        $langs = ProgrammingLanguage::get();

        $query = Job::query();

        if(isset($data['worktime'])) {
            $query->where('worktime', $data['worktime']);
        }
        if(isset($data['english'])) {
            $query->where('english', $data['english']);
        }
        if(isset($data['proglang'])) {
            $query->whereHas('languages', function ($query) use ($data) {
                $query->where('name', $data['proglang']);
            });
        }

        $jobs = $query->paginate(10);

        return view("jobs", compact('jobs', 'langs'));
    }

    public function job_show($id){
        $job = Job::find($id);
        return view("job_show", ["job"=> $job]);
    }

    public function job_edit($id){
        $job = Job::findOrFail($id);
        return view('job_edit', compact('job'));
    }

    public function job_delete($id){
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect()->route('employer.home')->with('success', 'Success');
    }

    public function job_test(){
        return view('job-list');
    }
}
