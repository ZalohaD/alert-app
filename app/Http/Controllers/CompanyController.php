<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function companies() {
        $companies = Company::paginate(12);
        return view('companies', compact('companies'));
    }

    public function company_show($id) {
        $company = Company::find($id);
        return view('company_show', compact('company'));
    }
}
