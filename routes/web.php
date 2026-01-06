<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;



// Route::get('/', function () {
//     return view('home');

//     // $jobs = Job::all();
//     // dd($jobs[0]);
// });

Route::view('/', 'home');

// Route::get("/jobs", [JobController::class, 'index']);
// Route::get("/jobs/create", [JobController::class, 'create']);
// Route::get("/jobs/{job}", [JobController::class, 'show']);
// Route::post("/jobs", [JobController::class, 'store']);
// Route::get("/jobs/{id}/edit", [JobController::class, 'edit']);
// Route::patch("/jobs/{id}", [JobController::class, 'update']);
// Route::delete("/jobs/{id}", [JobController::class, 'destroy']);

Route::controller(JobController::class)->group(function () {
    Route::get("/jobs", ['index']);
    Route::get("/jobs/create", ['create']);
    Route::get("/jobs/{job}", ['show']);
    Route::post("/jobs", ['store']);
    Route::get("/jobs/{id}/edit", ['edit']);
    Route::patch("/jobs/{id}", ['update']);
    Route::delete("/jobs/{id}", ['destroy']);
});

// Route::get('/jobs', function () {
//     // $jobs = Job::with('employer')->paginate(3);
//     // $jobs = Job::with('employer')->simplePaginate(3);
//     $jobs = Job::with('employer')->latest()->cursorPaginate(3);
//     // $jobs = Job::all();
//     return view('jobs.index', [
//         'jobs' => $jobs
//     ]);
// });

// Route::get('jobs/create', function () {
//     return view('jobs.create');
// });

// Route::post('jobs', function () {
//     request()->validate([
//         'title'=>['required','min:3'],
//         'salary'=>['required'],
//     ]);

//     Job::create([
//         'title' => request('title'),
//         'salary' => request('salary'),
//         'employer_id' => 69,
//     ]);
//     return redirect('/jobs');
// });

// Route::get('/jobs/{job}', function (Job $job) {

//     // return view('jobs.show', ['job' => Job::find($id)]);
//     return view('jobs.show', ['job' => $job]);
// });

// Route::patch('/jobs/{id}', function ($id) {
//     request()->validate([
//         'title'=>['required','min:3'],
//         'salary'=>['required'],
//     ]);
//     $job = Job::findOrFail($id);

//     $job->update([
//         'title'=>request('title'),
//         'salary'=>request('salary')]);


//     return redirect('/jobs/'. $id);
// });

// Route::delete('/jobs/{id}', function ($id) {

//     Job::findOrFail($id)->delete();
//     return redirect('/jobs');
// });

// Route::get('/jobs/{id}/edit', function ($id) {

//     return view('jobs.edit', ['job' => Job::find($id)]);
// });


Route::get('/contact', function () {
    return view('contact');
});
