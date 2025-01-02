<?php

namespace App\Http\Controllers;

use App\Models\Ppat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePpatRequest;
use App\Http\Requests\UpdatePpatRequest;

class PpatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ppats = Ppat::orderByDesc('id')->paginate(10);
        return view('dashboard.ppat.index', compact('ppats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.ppat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePpatRequest $request)
    {
        DB::transaction(function () use ($request){
            $validated = $request->validated();

            $validated['slug'] = Str::slug($validated['name']);

            $ppat = Ppat::create($validated);
        });

        return redirect()->route('ppat.index')->with('success', 'Data notaris berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ppat $ppat)
    {
        return view('dashboard.ppat.show', compact('ppat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ppat $ppat)
    {
        return view('dashboard.ppat.edit', compact('ppat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePpatRequest $request, Ppat $ppat)
    {
        DB::transaction(function() use ($request, $ppat) {
            $validated = $request->validated();
            $validated['slug'] = Str::slug($validated['name']);

            $ppat->update($validated);
        });

        return redirect()->route('ppat.index')->with('success', 'Data Notaris berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ppat $ppat)
    {
        //
    }
}
