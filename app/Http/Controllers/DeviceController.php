<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateDeviceRequest;
use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\User;
use App\Models\Status_connect;
use App\Models\Status_activate;
use App\Models\Op;
use App\Models\Option;
use App\Models\Option_device;
use App\Models\Service;
use Illuminate\Support\Facades\Hash;


class DeviceController extends Controller
{
    public function ShowDevice(){
        $devices= Device::with('user','status_activate','status_connect','service','option_device')->get();
        // dd($devices);
        if($key = request()->key){
            $devices = Device::where('name_device','like', '%'.$key.'%')->get();
        }

        return view('device.device',compact('devices'));
    }
    public function AddDevice(){
        $option_service = Service::all();
        $option_device = Option_device::all();
        return view('device.create_device'  ,compact('option_service','option_device'));
    }

    public function StoreDevice(Request $request){

        // dd($request->all());
        $request->validate([
            'name_device' => 'required',
            'ma_device' => 'required',
            'address_ip' => 'required',
            'name_dangnhap' => 'required',
            'password' => 'required',
            'id_option_device'=>'required',
            'id_service'=>'required',

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
        // dd($device);
        $option_service = Service::all();
        $option_device = Option_device::all();
        return view('device.edit_device', compact('device','option_service','option_device'));
    }

    public function UpdateDevice(Device $device, UpdateDeviceRequest $request ){

        $validated=$request->validated();
        $user = User::where('name_dangnhap', $request->name_dangnhap)->firstOrFail();

        $isUser = $user ? Hash::check( $request->password,$user->password) : false;
        // dd( $isUser);
        if($isUser){
            $request->merge(['id_user'=>$user->id]) ;

            $device->update($request->except(['name_dangnhap','password']));
            // dd($device);
        }

        return back();


    }

    public function Detail_Device($id)
    {
        $devices_id = Device::find($id);

        // dd($devices_id);
        return view('device.detail_device', compact('devices_id'));
    }

}
