<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;
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
    public function store(RegistrationForm $request){

        $request->persist();

        //$request->session();
        session('message','this is details message');
        session()->flash('message', 'thanks so much for signup');

        //return to view
        return redirect()->home();
    }
}
