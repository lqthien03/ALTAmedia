<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRoleRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\Op;
use App\Models\Option;
use App\Models\Setting;
use App\Models\Status_activate;
use App\Models\Status_state;
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

    public function UpdateSetting_role(Role $role, UpdateRoleRequest $request){
        $validated= $request->validated();
        $role->update($request->all());
        return back();
    }
    public function AddSetting_role(){
        $role=Role::all();
        return view('setting.add_manager_role',compact('role'));
    }
    public function StoreSetting_role(Request $request){
        $request->validate([
            'name_role' => 'required',
            'mota' => 'required',
        ]);
        $role=Role::create($request->all());
        return redirect()->route('setting.manager_role');
    }

    public function ShowSetting_account(){
        $showsetting = User::with(['role','status_activate'])->get();
        return view('setting.manager_account' ,compact('showsetting'));
    }

    public function AddSetting_account(){
        $status= Status_activate::all();
        $role = Role::all();
        // dd($user);
        return view('setting.add_manager_account',compact('status','role'));
    }
    public function StoreSetting_account(Request $request){
        $checkUsername= User::select('name_dangnhap')->where('name_dangnhap',$request->name_dangnhap)->get();
        $checkEmail = User::select('email')->where('email', $request->email)->get();

        $request->validate([
            'name' => 'required',
            'sdt' => 'required',
            'email' => 'required',
            'role_id' => 'required',
            'name_dangnhap' => 'required',
            'password' => 'required',
            'id_option_device'=> 'required',
        ]);

        User::create($request->all());
        return redirect()->route('setting.manager_account');
    }

    public function EditSetting_account(User $user){
        $role= Role::all();
        $status = Status_activate::all();

        return view('setting.edit_manager_account', compact('user','role','status'));
    }

    public function UpdateSetting_account(User $user, UpdateUserRequest $request){

        $validated= $request->validated();
        $user->update($request->all());
        return back();
    }
    public function ShowSetting_diary(){
        $showsetting = Setting::with(['user','device','supply'])->get();
        return view('setting.diary_users' ,compact('showsetting'));
    }



}
