<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SignupController extends Controller
{
     public function create(){
        return view('auth.signup');
    }
    public function store(){
        //validate inputs
        $validated = request()->validate([
            'name'=> ['required'],
            'email'=>['required', 'email'],
            'password'=>['required', Password::min(8), 'confirmed']
        ]);

        $email = $validated['email'];

        $exist = User::where('email', $email)->exists();
        if ($exist){
            throw ValidationException::withMessages(['email'=> 'User Already Exists']);
        }

        //create user
        User::create($validated);
        
        //redirect
        return redirect('/login');
    }


}
