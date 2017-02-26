<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\Hash;
use App\Mail\Welcome;
class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }
    public function store(){
        //dd('in user store');
        // validate form
        $this->validate(request(),[
           'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        //save user
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password'))
        ]);

        //dump('user created');
        //Sign them in
        //\Auth::login();
        auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

        //return to view
        return redirect()->home();
    }
}
