<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(){
        //tode

        $validatedAttributes = request()->validate([
            'first_name' =>['required'],
            'last_name' =>['required'],
            'email' =>['required', 'email', 'max:254'],
            'password' =>['required', Password::min(6)],
        ]);

        $user = User::create($validatedAttributes);

        Auth::login($user);

        return redirect('/jobs');
    }
}
