<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ShowUser(){
        $users= User::all();
        return view('profile.profile',compact('users'));
    }

    public function Detail_User($id)
    {
        $users_id = User::find($id);
        return view('profile.profile', compact('users_id'));
    }
}
