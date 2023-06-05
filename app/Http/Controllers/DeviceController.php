<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Illuminate\Support\Facades\Hash;

class DeviceController extends Controller
{
    public function ShowDevice(){
        $devices= Device::all();
        return view('device.device',compact('devices'));
    }
    public function CreateDevice(){
        return view('device.create_device');
    }
    public function StoreDevice(Request $request){
        $request->validate([
            '' => 'required',
            'name' => 'required',
        ]);
        Device::create($request->all());
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
