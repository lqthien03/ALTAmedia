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
        $services_item = Service::all();
        // dd($services_item);
        return view('dichvu.create_service'  ,compact('services_item'));
    }
    public function StoreService(Request $request){
        // dd($request);
        $request->validate([
            'name_device' => 'required',
            'ma_device' => 'required',
            // 'address_ip' => 'required',
            'mota' => 'required',
            // 'id_option' => 'required',
            // 'id_user' => 'required',
            // 'id_password' => 'required',
        ]);
        $service=Service::create($request->all());
        dd($service);
        return redirect()->route('dichvu.service');

    }
    public function EditService($id)
    {
        $services_id = Service::find($id);
        return view('dichvu.edit_service', compact('services_id'));
    }

    public function update($id){
        $update_devices= Service::all();

        return view('dichvu.update_service',compact('update_services'));
    }
    public function Detail_Service($id)
    {
        // $services_id = Service::find($id);
        $services_id= Service::with(['status_activate','status_complete','progression'])->find($id);

        // dd($services_id);

        return view('dichvu.detail_service', compact('services_id'));
    }
}
