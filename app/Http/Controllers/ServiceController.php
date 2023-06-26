<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRuleRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Status_complete;
use App\Models\Status_activate;
use App\Models\Progression;
use App\Models\Op;
use App\Models\RuleProgression;
use Illuminate\Support\Facades\Hash;


class ServiceController extends Controller
{
    public function ShowService(){
        $services= Service::with(['status_activate','status_complete','progression'])->get();
        if($key = request()->key){
            $services = Service::where('name_service','like', '%'.$key.'%')->get();
        }
        return view('dichvu.service',compact('services'));
    }
    public function AddService(){
        $services_item = Service::all();
        // dd($services_item);
        return view('dichvu.create_service' ,compact('services_item'));
    }
    public function StoreService(Request $request ){
        // dd($request->all());
        $request->validate([
            'name_service' => 'required',
            'ma_service' => 'required',
            'mota' => 'required',
            'is_auto_increase'=> 'integer',
            'start_count'=>'integer',
            'end_count'=>'integer',
            'prefix'=>'integer',
            'surfix'=>'integer',
            'is_prefix'=>'integer',
            'is_surfix'=>'integer',
            'is_reset'=>'integer',


        ]);

        $service=Service::create($request->only('name_service','ma_service','mota'));

        $rule= new RuleProgression;
        $rule->id_service= $service->id;
        $rule->fill($request->except('name_service','ma_service','mota'));
        $rule->save();
        return redirect()->route('dichvu.service');
    }
    public function EditService(Service $service)
    {
        return view('dichvu.edit_service', compact('service'));
    }
    public function UpdateService(Service $service, UpdateServiceRequest $request ){
        // dd(request());
        $validated= $request->validated();
        $service->update($request->only('name_service','ma_service','mota'));
        // RuleProgression::update($request->except('name_service','ma_service','mota'));
        $rule=$service->rule_progression;
        $rule->fill($request->except('name_service','ma_service','mota'));
        $rule->save();
        return back();
    }
    public function Detail_Service($id)
    {

        $services_id= Service::with(['status_activate','status_complete','progression'])->find($id);
            // dd($services_id->progression);

        return view('dichvu.detail_service', compact('services_id'));
    }
}
