<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ShowUser(){
        $user= User::with('role')->get();
        // dd($user);
        return view('profile.profile',compact('user'));
    }

    public function Detail_User($id)
    {
        $user = User::find($id);
        return view('profile.profile', compact('user'));
    }   
}
