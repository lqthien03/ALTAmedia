<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateServiceRequest;
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
            'name_service' => 'required',
            'ma_service' => 'required',
            'mota' => 'required',
        ]);

        Service::create($request->all());
        // dd($service);
        return redirect()->route('dichvu.service');
    }
    public function EditService(Service $service)
    {
        // dd($service);
        return view('dichvu.edit_service', compact('service'));
    }

    public function UpdateService(Service $service, UpdateServiceRequest $request){
        // dd(request());
        $validated= $request->validated();
        $service->update($request->all());

        return back();
    }
    public function Detail_Service($id)
    {
        // $services_id = Service::find($id);
        $services_id= Service::with(['status_activate','status_complete','progression'])->find($id);

        // dd($services_id);

        return view('dichvu.detail_service', compact('services_id'));
    }
}
