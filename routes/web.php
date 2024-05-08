<?php

use App\Http\Controllers as Controllers;
use App\Http\Controllers\Auth as Auth;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::controller(Controllers\JobController::class)->group(function() {

    Route::get('/jobs','jobs')->name('jobs');

    Route::get('/jobs/{id}','job_show')->name('job_show');

});

Route::controller(Controllers\CategoryController::class)->group(function() {

    Route::get('/categories','categories')->name('categories');

    Route::get('/categories/{id}','category_show')->name('category_show');

});

Route::controller(Controllers\CompanyController::class)->group(function() {

    Route::get('/companies', 'companies')->name('companies');

    Route::get('/companies/{id}', 'company_show')->name('company_show');

});

Route::controller(Auth\LoginController::class)->name('auth.')->group(function() {

    Route::get('/login', 'login')->name('login');
    
    Route::post('/login', 'login_validate')->name('login_validate');

    Route::post('/logout', 'logout')->name('logout');

});

Route::controller(Auth\RegisterController::class)->name('auth.')->group(function() {

    Route::get('/register','register')->name('register');
    
    Route::post('/register','register_store')->name('register_store');

});

Route::prefix('/employer')->name('employer.')->controller(Controllers\EmployerController::class)->middleware(['auth.custom', 'employer'])->group(function() {

    Route::get('/home','home')->name('home');

    Route::get('/jobs','jobs_list')->name('jobs_list');

    Route::get('/create','create_job')->name('create_job');

    Route::post('/index','store_job')->name('store_job');

});

Route::prefix('/employee')->name('employee.')->controller(Controllers\UserController::class)->middleware(['auth.custom', 'employee'])->group(function() {

    Route::get('/home','home')->name('home');

    Route::get('/edit','create_portfolio')->name('create_portfolio');

    Route::post('/index','store_portfolio')->name('store_portfolio');

});

Route::get('/', function () {
    $jobs = Job::take(5)->get();
    $categories = Category::all();
    return view('home', compact('jobs', 'categories'));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/testimonial', function () {
    return view('testimonials');
})->name('testimonial');

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/post-job', function () {

})->name('job.post');
