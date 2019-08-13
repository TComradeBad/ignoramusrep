<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Auth;
use DB;
use Validator;


class PostController extends Controller
{

    public function manager()
    {
        $posts = DB::table('posts')->get();
        return view('postsmanager', compact('posts'));

    }


    public function usersposts($id)
    {
        $post = DB::table('posts')->find($id);
        return view('userspost', compact('post'));
    }


    public function userspostsdelete(\App\Post $post)
    {
        $post->delete();
        return redirect('/postsmanager');
    }


    public function readposts()
    {
        $posts = DB::table('posts')->get();
        return view('userseeallposts', compact('posts'));
    }


    public function readthispost(\App\Post $post)
    {
        return view('userspost', compact('post'));
    }

    public function redactPost()
    {
        return view('postredact');
    }

    public function postRequest(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required|max:255',
            ]);
        $post = new Post();
        $post->label = $request->name;
        $post->text = $request->text;
        $post->user = Auth::user()->email ?? "Anonim";

        $post->save();
        return redirect('/readposts');
    }

}
