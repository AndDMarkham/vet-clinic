<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Report;
use App\Pet;

class ReportsController extends Controller
{
    public function index()
    {
        $report = Report::paginate(10);
        return $report;
    }

    public function show($pet_id)
    {
        $report = Report::with('pet')
        ->where('pet_id', $pet_id)
        ->get();
        return view('report.show', compact('report'));
       
    }
    
    public function create($report)
    {
        return view('report.create');
    }

    public function store($report, ReportRequest $request)
    {
        $report = new Report();
        $report->date= $request->input('date');
        $report->date= $request->input('text');
        $report->save();
        return redirect(action('ReportsController@index'));
    }
}