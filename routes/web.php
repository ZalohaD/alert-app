<?php

use App\Http\Controllers as Controllers;
use App\Http\Controllers\Auth as Auth;
use App\Models\Category;
use App\Models\Job;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;

Route::controller(Controllers\JobController::class)->group(function() {

    Route::get('/jobs','jobs')->name('jobs');
    
    Route::get('/jobs/{job:title}','job_show')->name('job_show');

});

Route::controller(Controllers\CategoryController::class)->group(function() {

    Route::get('/categories','categories')->name('categories');

    Route::get('/categories/{category:name}','category_show')->name('category_show');

});

Route::controller(Controllers\CompanyController::class)->group(function() {

    Route::get('/companies', 'companies')->name('companies');

    Route::get('/companies/{company:name}', 'company_show')->name('company_show');

    Route::get('/companies/{company:name}/jobs', 'company_jobs')->name('company_jobs');

});

Route::controller(Auth\LoginController::class)->name('auth.')->middleware('guest')->group(function() {

    Route::get('/login', 'login')->name('login');
    
    Route::post('/login', 'login_validate')->name('login_validate');

});

Route::post('/logout', [Auth\LoginController::class, 'logout'])->middleware('auth.custom')->name('auth.logout');

Route::controller(Auth\RegisterController::class)->name('auth.')->middleware('guest')->group(function() {

    Route::get('/register','register')->name('register');
    
    Route::post('/register','register_store')->name('register_store');

});

Route::prefix('/employer')->name('employer.')->controller(Controllers\EmployerController::class)->middleware(['auth.custom', 'employer'])->group(function() {

    Route::get('/home','home')->name('home');

    Route::post('/profile_store', 'profile_store')->name('profile_store');

    Route::get('/jobs', 'jobs')->name('jobs');

    Route::get('/create','create_job')->name('create_job');

    Route::post('/store_job','store_job')->name('store_job');

    Route::get('/settings','settings')->name('settings');

    Route::post('/settings','store_settings')->name('store_settings');

    Route::get('/jobs/{id}/edit','job_edit')->name('job_edit');

    Route::delete('/jobs/{id}', 'delete_job')->name('delete_job');

});

Route::prefix('/employee')->name('employee.')->controller(Controllers\EmployeeController::class)->middleware(['auth.custom', 'employee'])->group(function() {

    Route::get('/home','home')->name('home');

    Route::post('/home', 'profile_store')->name('profile_store');

    Route::get('/portfolio','create_portfolio')->name('create_portfolio');

    Route::post('/portfolio','store_portfolio')->name('store_portfolio');

    Route::get('/settings','settings')->name('settings');

    Route::post('/settings','store_settings')->name('store_settings');

});

Route::get('/', function () {
    $jobs = Job::take(5)->get();
    $categories = Category::with('jobs')->get();
    $testimonials = Testimonial::with('user')->get();
    return view('home', compact('jobs', 'categories', 'testimonials'));
})->name('home');

Route::get('/about', function () {
    $testimonials = Testimonial::with('user')->get();
    return view('about', compact('testimonials'));
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');