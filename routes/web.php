<?php

use App\Http\Controllers as Controllers;
use Illuminate\Support\Facades\Route;

Route::controller(Controllers\JobController::class)->group(function() {

    Route::get('/jobs','jobs')->name('jobs');

    Route::get('/jobs/{id}','job_show')->name('job_show');

    Route::get('/categories','categories')->name('categories');

    Route::get('/categories/{id}','category_show')->name('category_show');

});

Route::prefix('/auth')->name('auth.')->controller(Controllers\AuthController::class)->group(function() {
    
    Route::get('/register','register')->name('register');
    
    Route::post('/','register_store')->name('register_store');

    Route::get('/login', 'login')->name('login');
    
    Route::post('/', 'login_validate')->name('login_validate');

});

Route::prefix('/employer')->name('employer.')->controller(Controllers\EmployerController::class)->group(function() { // add middleware (lock route)

    Route::get('/index','index')->name('index');

    Route::get('/jobs','jobs_list')->name('jobs_list');

    Route::get('/create','create_job')->name('create_job');

    Route::post('/index','store_job')->name('store_job');

});

Route::prefix('/user')->name('user.')->controller(Controllers\UserController::class)->group(function() { // add middleware (lock route)

    Route::get('/index','index')->name('index');

    Route::get('/edit','create_portfolio')->name('create_portfolio');

    Route::post('/index','store_portfolio')->name('store_portfolio');

});

Route::get('/', function () {
    return view('home');
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
