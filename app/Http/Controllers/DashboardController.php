<?php

namespace App\Http\Controllers;

use App\Models\Progression;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $devices = DB::select("SELECT COUNT(id_status_activate) as total, SUM(id_status_activate='1') as active FROM devices;");

        $services = DB::select("SELECT COUNT(id_status_activate) as total, SUM(id_status_activate='1') as active FROM services;");

        $progressions = DB::select("SELECT COUNT(id_status_state) as total, SUM(id_status_state='1') as waiting, SUM(id_status_state='2') as used,SUM(id_status_state='3') as canceled FROM progressions");


        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $totalDays = Carbon::createFromDate($year, $month)->daysInMonth;
        $days = range(1, $totalDays);

        $statistics = [];

        foreach ($days as $day) {
            $count = Progression::whereDay('time_cap', $day)
                ->whereMonth('time_cap', $month)
                ->whereYear('time_cap', $year)
                ->count();

            $statistics[] =  $count;
        }
        return view('/dashboard', compact('devices', 'services', 'progressions','days','statistics'));
    }
}
