<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobs(){
        $jobs = Job::paginate(10);
        return view("jobs", ["jobs"=> $jobs]);
    }

    public function job_show($id){
        $job = Job::find($id);
        return view("job_show", ["job"=> $job]);
    }
}
