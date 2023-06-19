<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\Op;
use App\Models\Setting;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function ShowSetting_role(){
        $showsetting = Role::all();
        return view('setting.manager_role' ,compact('showsetting'));
    }

    public function ShowSetting_account(){
        $showsetting = Setting::with(['user','status_activate','role','device','supply'])->get();
        return view('setting.manager_account' ,compact('showsetting'));
    }

    public function ShowSetting_diary(){
        $showsetting = Setting::with(['user','device','supply'])->get();
        return view('setting.diary_users' ,compact('showsetting'));
    }
    public function AddRole(){
        $role=Role::all();
        // dd($role);
        return view('setting.add_manager_role',compact('role'));
    }
    public function StoreRole(Request $request){

        $request->validate([
            'name_role' => 'required',
            'mota' => 'required',

        ]);
        // dd($request);
        $role=Role::create($request->all());
        // dd($role);
        return redirect()->route('setting.manager_role');
    }



}
