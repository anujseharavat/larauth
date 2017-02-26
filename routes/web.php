<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now  create something great!
|
*/

Route::get('/', 'PostsController@index')->name('home');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts', 'PostsController@index');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
/*posts

GET /posts
GET /posts/create
POST /posts
GET /posts/{id}/edit
GET /posts/{id}
PATCH /posts/{id}
DELETE /posts/{id}*/


Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');


//Auth::routes();
//
//Route::get('/home', 'HomeController@index');
