<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->cursorPaginate(3);
        // $jobs = Job::all();
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }
    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 69,
        ]);
        return redirect('/jobs');
    }

    // public function edit($id)
    public function edit(Job $job)
    {
        // $job = Job::find($id);
        // dd($job->employer->user);
     
        if (Auth::guest()){
            return redirect('/login');
        }

        // if($job->employer->user->isNot(Auth::user())){
        //     abort(401);
        // }
        Gate::authorize('edit',$job);

        return view('jobs.edit', ['job' =>  $job]);
    }
    
    public function update($id)
    {

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);
        $job = Job::findOrFail($id);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);


        return redirect('/jobs/' . $id);
    }
    public function destroy($id)
    {
        Job::findOrFail($id)->delete();
        return redirect('/jobs');
    }
}
