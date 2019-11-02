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
    
    public function create()
    {
        return view('report.create');
    }

    public function store(ReportRequest $request)
    {
        $report = Report::create($request->all());

        return redirect(action('ReportController@index'));
    }
}

