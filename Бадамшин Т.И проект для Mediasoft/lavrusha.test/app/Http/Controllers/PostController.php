<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;


class PostController extends Controller
{
    
    public function manager()
    {
        if(Auth::user()->admin ?? false)
        {
         $posts=DB::table('posts')->get();
           return view('postsmanager',compact('posts'));}
           else return abort(404);
        
     }
     
     
     public function  usersposts($id)
     {
         $post=DB::table('posts')->find($id);
         return view('userspost',compact('post'));
     }
     
     
     public function userspostsdelete(\App\Post $post)
     {
     
     $post->delete();
         return redirect('/postsmanager');
     }
    
     
     public function readposts(){
     $posts=DB::table('posts')->get();
           return view('userseeallposts',compact('posts'));
           
     }
   
           
         
     public function readthispost(\App\Post $post){

            return view('userspost',compact('post'));
         }
 
}
