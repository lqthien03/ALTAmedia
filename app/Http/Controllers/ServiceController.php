<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Hash;


class ServiceController extends Controller
{
    public function show(){
        $services= Service::all();
        
        return view('dichvu.service',compact('services'));
    }
    public function add(){
        $add_services= Service::all();
        return view('dichvu.update_service',compact('add_service'));
    }
    public function Detail_Service($id)
    {
        $services_id = Service::find($id);
        return view('dichvu.detail_service', compact('service_id'));
    }
}
