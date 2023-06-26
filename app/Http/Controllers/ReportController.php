<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status_state;
use App\Models\Service;
use App\Models\Progression;
use App\Models\Report;
use App\Models\Supply;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function ShowReport(){
        $reports= Report::with(['progression','service','status_state','supply'])->get();
        // dd($reports);
        return view('report.report',compact('reports'));
    }
    public function ExportPDF(){

        $reports = Report::select('progression.id','service.name_service','progression.time_cap','status_state.name_state','supply.name_supply');
        // dd($reports);
        $pdf = Pdf::loadView('report.export',['reports'=>$reports]);
        return $pdf->download('report.pdf');
    }
}
