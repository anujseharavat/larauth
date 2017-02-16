<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/tasks/{id}', function ($id) {
    //$task = DB::table('tasks')->find($id);
    $task = App\Task::find($id);
    //dd($tasks);
    return view('tasks.show', compact('task'));
});

Route::get('/', function () {
    //$tasks = DB::table('tasks')->get();
    $tasks = App\Task::all();
    return view('tasks.index', compact('tasks'));
    //return $tasks;
    //    $tasks = [
//        'This is task 1',
//        'This is task 2',
//        'This is taske 3'
//    ];
//    return view('welcome', compact('tasks'));
//    $name = 'Anuj';
//    $age = 33;
//    return view('welcome',compact('name','age'));
    //return view('welcome',['name'=>$name, 'age'=>$age, ]);
    //return view('welcome')->with('name', 'anuj')->with('age', 34);
//    return view('welcome',[
//        'name' => 'World',
//        'age' => 3
//    ]);
});

Route::get('about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
