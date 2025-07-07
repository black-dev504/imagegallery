<?php

namespace App\Http\Controllers;

use Auth;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class SessionController extends Controller
{

    public function create(){
        return view('auth.login');
    }
    public function store(){

        //validate inputs
        $validated = request()->validate([
            'email'=>['required', 'email'],
            'password'=>['required']
        ]);

       $user = User::where('email', $validated['email'])->first();

        if (! $user) {
        throw ValidationException::withMessages([
            'email' => 'This user does not exist in our records.',
        ]);
    }
        //confim details
            if (! Auth::attempt($validated)){

                throw ValidationException::withMessages([
                    'password'=>'Incorrect password. Try again!!'
                ]);
            }

        //regenerate session
        request()->session()->regenerate();

        //redirect
        return redirect('gallery');
    }

     public function destroy(){
        Auth::logout();
        return redirect('/login');

    }



}
