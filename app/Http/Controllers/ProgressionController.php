<?php

namespace App\Http\Controllers;

use App\Models\Progression;
use Illuminate\Http\Request;

class ProgressionController extends Controller
{
    public function ShowProgression(){
        $progressions= Progression::all();
        return view('progression.progression',compact('progressions'));
    }
}
