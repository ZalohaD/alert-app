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

    public function job_show(Job $job){
        $job = Job::find($job->id);
        return view("job_show", compact('job'));
    }
}
