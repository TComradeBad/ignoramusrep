<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userlist()
    { if(Auth::user()->admin ?? false)
    {$users=DB::table('users')->get();
    return view('usersmanager',compact('users'));
    }
    else return abort(404);
        
    }
    
    public function userinfo(\App\User $user)
    {
        if(Auth::user()->admin ?? false)
    {
    return view('userinfo',compact('user'));
    }
    else return abort(404);
        
    } 
        
}

