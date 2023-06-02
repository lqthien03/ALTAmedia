<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Illuminate\Support\Facades\Hash;

class DeviceController extends Controller
{
    public function show(){
        $devices= Device::all();
        
        return view('device.device',compact('devices'));
    }
    public function add(){
        $add_devices= Device::all();
        return view('device.update_device',compact('add_devices'));
    }
    public function Detail_Device($id)
    {
        $devices_id = Device::find($id);
        return view('device.detail_device', compact('devices_id'));
    }
    
}
