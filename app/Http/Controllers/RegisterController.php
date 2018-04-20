<?php

namespace App\Http\Controllers;

use App\Mail\UserVerificationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest',['only'=>['players','teams']]);
    }

    public function create(){

        return view('register.create');
    }

    public function store(){

        $this->validate(request(),[

            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed|min:5',
            'password_confirmation'=>''
        ]);

        $user = new User;

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        $user->save();

        auth()->login($user);

        Mail::to($user)->send(new UserVerificationMail($user));

        return redirect(route('login'));

    }

    public function verify($user_id){

        $user = User::find($user_id);

        $user->is_verified = true;

        $user->save();

        session()->flash('success_message', 'Your email is verified successfully.');

        return redirect(route('login'));
    }
}
