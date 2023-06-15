<?php

namespace App\Http\Controllers;
use App\Models\Supply;
use App\Models\Progression;
use Illuminate\Http\Request;

class ProgressionController extends Controller
{
    public function ShowProgression(){
        $progressions= Progression::with(['user','supply','option'])->get();
        return view('progression.progression',compact('progressions'));
    }
    public function AddProgression(){
        $progressions_item =Progression::all();
        return view('progression.add_progression'  ,compact('progressions_item'));
    }
    public function update($id){
        $update_devices=Progression ::all();

        return view('device.update_device',compact('update_sevices'));
    }
    public function Detail_Progression($id)
    {
        $progression_id = Progression::find($id);
        return view('progression.detail_progression', compact('progression_id'));
    }
}
