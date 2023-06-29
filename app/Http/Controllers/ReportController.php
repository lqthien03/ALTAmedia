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
    public function ShowReport()
    {
        $reports = Report::with(['progression', 'service', 'status_state', 'supply'])->get();
        // dd($reports);
        return view('report.report', compact('reports'));
    }
    public function ExportPDF()
    {
        $reports = Report::get();
        dd($reports);
        $pdf = Pdf::loadView('report.export', ['reports' => $reports]);
        // dd($pdf->);
        return $pdf->download('report.pdf');
    }
}
