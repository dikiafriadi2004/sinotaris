<?php

namespace App\Http\Controllers;

use App\Models\Ppat;
use App\Models\Report;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;

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

        DB::transaction(function () use ($request, $ppat) {
            $validated = $request->validated();

            if ($request->hasFile('doc_report')) {
                if (isset($request->doc_report) && file_exists(public_path(getenv('CUSTOM_DOC_LOCATION')) . "/" . $request->doc_report)) {
                    unlink(public_path(getenv('CUSTOM_DOC_LOCATION')) . "/" . $request->doc_report);
                }

                $doc_report = $request->file('doc_report');
                $doc_report_name = time() . "_" . $doc_report->getClientOriginalName();
                $destination_path = public_path(getenv('CUSTOM_DOC_LOCATION'));
                $doc_report->move($destination_path, $doc_report_name);
                $validated['doc_report'] = isset($doc_report_name) ? $doc_report_name : null;
            }

            if ($request->hasFile('doc_finding')) {
                if (isset($request->doc_report) && file_exists(public_path(getenv('CUSTOM_DOC_LOCATION')) . "/" . $request->doc_report)) {
                    unlink(public_path(getenv('CUSTOM_DOC_LOCATION')) . "/" . $request->doc_report);
                }
                
                $doc_finding = $request->file('doc_finding');
                $doc_finding_name = time() . "_" . $doc_finding->getClientOriginalName();
                $destination_path = public_path(getenv('CUSTOM_DOC_LOCATION'));
                $doc_finding->move($destination_path, $doc_finding_name);
                $validated['doc_finding'] = isset($doc_finding_name) ? $doc_finding_name : null;
            }

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
    public function edit(Ppat $ppat, Report $report)
    {
        return view('dashboard.report.edit', compact('report', 'ppat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReportRequest $request, Report $report)
    {
        DB::transaction(function () use ($request, $report) {
            $validated = $request->validated();

            if ($request->hasFile('doc_report')) {
                if (isset($report->doc_report) && file_exists(public_path(getenv('CUSTOM_DOC_LOCATION')) . "/" . $report->doc_report)) {
                    unlink(public_path(getenv('CUSTOM_DOC_LOCATION')) . "/" . $report->doc_report);
                }

                $doc_report = $request->file('doc_report');
                $doc_report_name = time() . "_" . $doc_report->getClientOriginalName();
                $destination_path = public_path(getenv('CUSTOM_DOC_LOCATION'));
                $doc_report->move($destination_path, $doc_report_name);
                $validated['doc_report'] = isset($doc_report_name) ? $doc_report_name : null;
            }

            if ($request->hasFile('doc_finding')) {
                if (isset($report->doc_finding) && file_exists(public_path(getenv('CUSTOM_DOC_LOCATION')) . "/" . $report->doc_finding)) {
                    unlink(public_path(getenv('CUSTOM_DOC_LOCATION')) . "/" . $report->doc_finding);
                }

                $doc_finding = $request->file('doc_finding');
                $doc_finding_name = time() . "_" . $doc_finding->getClientOriginalName();
                $destination_path = public_path(getenv('CUSTOM_DOC_LOCATION'));
                $doc_finding->move($destination_path, $doc_finding_name);
                $validated['doc_finding'] = isset($doc_finding_name) ? $doc_finding_name : null;
            }

            $report->update($validated);
        });

        // return redirect()->back()->with('success', 'Data anggota berhasil diubah');
        return redirect()->route('ppat.show', $report->ppat_id)->with('success', 'Data laporan notaris berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ppat $ppat, Report $report)
    {
        DB::transaction(function () use ($report, $ppat) {
            if (isset($report->doc_report) && file_exists(public_path(getenv('CUSTOM_DOC_LOCATION')) . "/" . $report->doc_report)) {
                unlink(public_path(getenv('CUSTOM_DOC_LOCATION')) . "/" . $report->doc_report);
            }

            if (isset($report->doc_finding) && file_exists(public_path(getenv('CUSTOM_DOC_LOCATION')) . "/" . $report->doc_finding)) {
                unlink(public_path(getenv('CUSTOM_DOC_LOCATION')) . "/" . $report->doc_finding);
            }
            $report->delete();
        });

        return redirect()->route('ppat.show', $ppat->id);
    }
}
