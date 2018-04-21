<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller

{
    public function __construct()
    {
        $this->middleware('guest',['except'=>'destroy']);
        $this->middleware('checkVerified', ['only' => ['store']]);

    }

    public function create(){

        return view('login.create');
    }

    public function store(){

        if(!auth()->attempt(
            request(['email','password'])
        )){
            return back()->withErrors([
                'message'=>'Bad credentials. Please try again'
            ]);
        }

        return redirect('teams');
    }

    public function destroy(){

        $this->middleware('guest')->except('logout');
        auth()->logout();

        return redirect('teams');
    }

}
