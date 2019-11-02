<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Report;

class ReportsController extends Controller
{
    public function index()
    {
        $report = Report::paginate(10);
        return $report;
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

