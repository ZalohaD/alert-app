<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function home(){
        return view('profile.employer.main');
    }

    public function jobs_list(){
        // List all jobs from Employer
    }

    public function create_job(){
        // create new job
    }

    public function store_job(Request $request){
        // post (redirect)
    }
}
