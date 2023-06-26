<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(){
        $services = DB::select("SELECT COUNT(services_id) as total, SUM(status='Hoạt động') as active FROM services;");
    }
}
