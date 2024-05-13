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

    public function company_show(Company $company) {
        return view('company_show', compact('company'));
    }

    public function company_jobs(Company $company) {
        $jobs = $company->jobs()->paginate(10);
        return view('company_jobs', compact('company', 'jobs'));
    }
}
