<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
        //$this->middleware('guest');
    }

    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {
        /*$user = \App\User::find(2);
        dump($user->name);
        dump($user->password);
        var_dump( Hash::check($user->password, '$2y$10$iCigIfplzFn/mu2nSEyDF.MCagfO.g2V0QvROTyrP2i6.33GMeH/G') );

        dd( Hash::check($user->password, Hash::make(request('password'))) );*/

        if (!auth()->attempt(['email' => request('email'), 'password' => request('password')])){
            return back()->withErrors([
                'message' => 'Please check your credentials and try again'
            ]);
        }
        /*$user = new \App\User(['anuj', request('email'), request('password')]);
        auth()->login($user);

        if (!auth()->check()){
            return back()->withErrors([
                'message' => 'Please check your credentials and try again'
            ]);
        }*/
        /*if (!auth()->attempt([
            'name' => 'anuj@gmail.com',
            'password' => request('password'),
            ])){
            //return back();
            return back()->withErrors([
                'message' => 'Please check your credentials and try again'
            ]);
        }*/

        return redirect()->home();
    }
    public function destroy()
    {
        //dd('destroy');
        auth()->logout();
        return redirect()->home();
    }
}
