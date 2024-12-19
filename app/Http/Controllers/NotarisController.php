<?php

namespace App\Http\Controllers;

use App\Models\Notaris;
use Illuminate\Http\Request;

class NotarisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Notaris::paginate(10);
        return view('dashboard.notaris.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.notaris.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'address' => 'required|min:3'
        ]);

        Notaris::create([
            'name' => $request->name,
            'address' => $request->address
        ]);

        return redirect()->route('notaris.index')->with('success', 'Notaris berhasil di buat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notaris $notaris)
    {
        return view('dashboard.notaris.show', compact('notaris'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notaris $notaris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notaris $notaris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notaris $notaris)
    {
        //
    }
}
