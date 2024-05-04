<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobs(){
        $jobs = Job::all();
        return view("jobs", ["jobs"=> $jobs]);
    }

    public function job_show($id){
        // show job details by id
    }

    public function categories(){
        $categories = Category::all();
        return view("categories", ["categories"=> $categories]);
    }

    public function category_show($id){
        // show jobs by category
    }
}
