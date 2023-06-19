<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\User;
use App\Models\Status_connect;
use App\Models\Status_activate;
use App\Models\Op;
use App\Models\Option;
use Illuminate\Support\Facades\Hash;


class DeviceController extends Controller
{
    public function ShowDevice(){
        $devices= Device::with(['user','status_activate','status_connect','option'])->get();
        // dd($devices);
        return view('device.device',compact('devices'));
    }
    public function AddDevice(){
        $options = Option::all();
        return view('device.create_device'  ,compact('options'));
    }

    public function StoreDevice(Request $request){
        
        // dd($request->all());
        $request->validate([
            'name_device' => 'required',
            'ma_device' => 'required',
            'address_ip' => 'required',
            'id_option' => 'required',
            'name_dangnhap' => 'required',
            'password' => 'required',
            'device_sd'=> 'required',
        ]);


        $user = User::where('name_dangnhap', $request->name_dangnhap)->firstOrFail();
        // dd($user);
        $isUser = $user ? Hash::check( $request->password,$user->password) : false;

        if($isUser){
            $request->merge(['id_user'=>$user->id]) ;
            // dd($request->all());
            $device=Device::create($request->except(['name_dangnhap','password']));
            // dd($device);
            return redirect()->route('device.device');

        }
        return back()->with('msg', 'fail');





    }

    public function EditDevice(Device $device)
    {
        $options = Option::all();
        return view('device.edit_device', compact('device','options'));
    }

    public function UpdateDevice($id){
        $update_devices= Device::all();
        return view('device.update_device',compact('_sevices'));
    }

    public function Detail_Device($id)
    {
        $devices_id = Device::find($id);
        return view('device.detail_device', compact('devices_id'));
    }

}
