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


use Illuminate\Http\Request;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {

    return view('start');
});

Route::get('/postsmanager', 'PostController@manager')->middleware("isAdmin");
Route::get('/postsmanager/{id}', 'PostController@usersposts');
Route::delete('/postsmanager/{post}', 'PostController@userspostsdelete')->middleware("isAdmin");
Route::get('/readposts', 'PostController@readposts');
Route::get('/usersmanager', 'UserController@userlist')->middleware("isAdmin");
Route::get('/usersmanager/{user}', 'UserController@userinfo')->middleware("isAdmin");
Route::get('/readposts/{post}', 'PostController@readthispost');

Route::delete('/usersmanager/{user}', 'UserController@deleteUser')->middleware("isAdmin");

Route::get("/postredactor", 'PostController@redactPost')->name('postredactor')->middleware("isAuth");

Route::post('/postredactor', 'PostController@postRequest')->middleware("isAuth");
