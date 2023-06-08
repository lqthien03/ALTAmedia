<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\User;
use App\Models\Status_connect;
use App\Models\Status_activate;
use App\Models\Op;
use Illuminate\Support\Facades\Hash;

class DeviceController extends Controller
{
    public function ShowDevice(){
        $devices= Device::with('status')->get();
        return view('device.device',compact('devices'));
    }
    public function AddDevice(){
        $devices_item = Device::all();
        return view('device.create_device'  ,compact('devices_item'));
    }
    public function StoreDevice(Request $request){
        $request->validate([
            'name_device' => 'required',
            'ma_device' => 'required',
            'address_ip' => 'required',
            'id_option' => 'required',
            'id_user' => 'required',
            'id_password' => 'required',
        ]);
        Device::create($request->post());
        return redirect()->route('device.device');

    }


    public function update($id){
        $update_devices= Device::all();

        return view('device.update_device',compact('update_sevices'));
    }
    public function Detail_Device($id)
    {
        $devices_id = Device::find($id);
        return view('device.detail_device', compact('devices_id'));
    }

}
