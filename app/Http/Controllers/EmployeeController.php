<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function home(){
        return view('profile.employee.main');
    }

    public function create_portfolio(){
        // Make portfolio
    }

    public function store_portfolio(Request $request){
        // post
    }
}
