<?php

namespace App\Http\Controllers;

use App\Models\Ppat;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreReportRequest;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Ppat $ppat)
    {
        return view('dashboard.report.create', compact('ppat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReportRequest $request, Ppat $ppat)
    {
        DB::transaction(function () use ($request, $ppat){
            $validated = $request->validated();

            $validated['ppat_id'] = $ppat->id;

            $report = Report::create($validated);
        });

        return redirect()->route('ppat.show', $ppat->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        // 
    }
}
