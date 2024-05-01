<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/job-list', function () {
    return view('job-list');
})->name('job.list');

Route::get('/job-detail', function () {
    return view('job-detail');
})->name('job.detail');

Route::get('/category', function () {
    return view('category');
})->name('category');

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
