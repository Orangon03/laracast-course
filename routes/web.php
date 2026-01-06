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
    // $jobs = Job::with('employer')->paginate(3);
    // $jobs = Job::with('employer')->simplePaginate(3);
    $jobs = Job::with('employer')->latest()->cursorPaginate(3);
    // $jobs = Job::all();
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('jobs/create', function () {
    return view('jobs.create');
});

Route::post('jobs', function () {
    request()->validate([
        'title'=>['required','min:3'],
        'salary'=>['required'],
    ]);
    
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 69,
    ]);
    return redirect('/jobs');
});

Route::get('/jobs/{id}', function ($id) {

    return view('jobs.show', ['job' => Job::find($id)]);
});

Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        'title'=>['required','min:3'],
        'salary'=>['required'],
    ]);
    $job = Job::findOrFail($id);

    $job->update([
        'title'=>request('title'),
        'salary'=>request('salary')]);

    
    return redirect('/jobs/'. $id);
});

Route::delete('/jobs/{id}', function ($id) {

    Job::findOrFail($id)->delete();
    return redirect('/jobs');
});

Route::get('/jobs/{id}/edit', function ($id) {

    return view('jobs.edit', ['job' => Job::find($id)]);
});


Route::get('/contact', function () {
    return view('contact');
});
