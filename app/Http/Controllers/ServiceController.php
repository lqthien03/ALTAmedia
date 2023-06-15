<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Status_complete;
use App\Models\Status_activate;
use App\Models\Progression;
use App\Models\Op;
use Illuminate\Support\Facades\Hash;


class ServiceController extends Controller
{
    public function ShowService(){
        $services= Service::with(['status_activate','status_complete','progression'])->get();
        return view('dichvu.service',compact('services'));
    }
    public function AddService(){
        $Services_item = Service::all();
        return view('dichvu.create_service'  ,compact('services_item'));
    }
    public function StoreService(Request $request){
        $request->validate([
            'name_device' => 'required',
            'ma_device' => 'required',
            'address_ip' => 'required',
            'id_option' => 'required',
            'id_user' => 'required',
            'id_password' => 'required',
        ]);
        Service::create($request->post());
        return redirect()->route('dichvu.service');

    }


    public function update($id){
        $update_devices= Service::all();

        return view('dichvu.update_service',compact('update_services'));
    }
    public function Detail_Service($id)
    {
        $services_id = Service::find($id);
        return view('dichvu.detail_service', compact('services_id'));
    }
}
