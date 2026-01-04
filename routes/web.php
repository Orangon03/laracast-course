<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;



Route::get('/', function () {
    return view('home');

    // $jobs = Job::all();
    // dd($jobs[0]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    return view('job', ['job' => Job::find($id)]);
});


Route::get('/contact', function () {
    return view('contact');
});
