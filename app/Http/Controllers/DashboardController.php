<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $devices = DB::select("SELECT COUNT(id_status_activate) as total, SUM(id_status_activate='1') as active FROM devices;");

        $services = DB::select("SELECT COUNT(id_status_activate) as total, SUM(id_status_activate='1') as active FROM services;");

        $progressions = DB::select("SELECT COUNT(id_status_state) as total, SUM(id_status_state='1') as waiting, SUM(id_status_state='2') as used,SUM(id_status_state='3') as canceled FROM progressions");


        
        return view('/dashboard', compact('devices', 'services', 'progressions'));
    }
}
