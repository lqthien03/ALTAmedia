<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\Op;
use App\Models\Option;
use App\Models\Setting;
use App\Models\Status_activate;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function ShowSetting_role(){
        $showsetting = Role::all();
        return view('setting.manager_role' ,compact('showsetting'));
    }

    public function EditSetting_role(Role $role){
        return view('setting.edit_manager_role',compact('role'));
    }
    public function UpdateSetting_role(Role $role, UpdateRoleRequest $request,){
        $validated= $request->validated();
        // dd($validated);
        $role->update($request->all());
        dd($role);
        return back();
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
        $role=Role::create($request->all());
        return redirect()->route('setting.manager_role');
    }

    public function ShowSetting_account(){
        $showsetting = Setting::with(['user','status_activate','role','device','supply'])->get();
        // dd($showsetting);
        return view('setting.manager_account' ,compact('showsetting'));
    }

    public function AddAccount(){
        $status= Status_activate::all();
        $role = Role::all();
        // dd($user);
        return view('setting.add_manager_account',compact('status','role'));
    }
    public function StoreAccount(Request $request){
        $request->validate([
            'name'=>'required',
            'sdt'=>'required',
            'email'=>'required',
            'role_id'=>'required',
            'name_dangnhap'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required',
        ]);
        $user=User::create($request->all());
        return redirect()->route('setting.manager_account');
    }
    public function ShowSetting_diary(){
        $showsetting = Setting::with(['user','device','supply'])->get();
        return view('setting.diary_users' ,compact('showsetting'));
    }



}
