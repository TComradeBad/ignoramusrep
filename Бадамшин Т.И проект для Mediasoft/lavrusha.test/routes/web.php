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

Route::get('/',function(){
    
    return view('start');
});

Route::get('/postsmanager','PostController@manager');
Route::get('/postsmanager/{id}','PostController@usersposts');
Route::delete('/postsmanager/{post}','PostController@userspostsdelete');
Route::get('/readposts','PostController@readposts');
Route::get('/usersmanager','UserController@userlist');
Route::get('/usersmanager/{user}','UserController@userinfo');
Route::get('/readposts/{post}','PostController@readthispost');

Route::delete('/usersmanager/{user}',function(\App\User $user)
{
    $user->delete();
   return redirect('/usersmanager');
   
});

Route::get("/postredactor",function(){
    if(Illuminate\Support\Facades\Auth::user()){
    return view('postredact');}
    else return abort(404);
})->name('postredactor');


Route::post('/postredactor',function(Request $req){
    $validator=Validator::make($req->all(),
            [
                'name' =>'required|max:255',
            ]);
   $post=new App\Post;
   $post->label=$req->name;
   $post->text=$req->text;
   $post->user= Illuminate\Support\Facades\Auth::user()->email ?? "Anonim";
   
   $post->save();
   return redirect('/readposts');
    
    
    
    
});