<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Supply;
use App\Models\Progression;
use App\Models\User;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class ProgressionController extends Controller
{
    public function ShowProgression(){

        $firtProgressions= Progression::with(['user','supply','option'])->get();
        $progressions = $firtProgressions->filter(function ($progression) {
            return $progression->user->role_id === 1;
        });

        // dd($progressions);
        return view('progression.progression',compact('progressions'));
    }


    public function AddProgression(Progression $progression_item){
        $options = Option::all();
        return view('progression.add_progression'  ,compact('progression_item','options'));
    }
    public function StoreProgression(Request $request){
        
        $request->validate([
            'name_device' => 'required',
            'ma_device' => 'required',
            'address_ip' => 'required',
            'id_option' => 'required',
            'name_dangnhap' => 'required',
            'password' => 'required',
            'device_sd'=> 'required',
        ]);
        $update_devices=Progression ::all();
        return back();
    }
    public function Detail_Progression($id)
    {
        $progression_id = Progression::find($id);
        return view('progression.detail_progression', compact('progression_id'));
    }
}
