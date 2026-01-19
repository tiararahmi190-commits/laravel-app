<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\Keluarga;
use Illuminate\Http\Request;

class BalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Balita::with('keluarga')->get();
        return view('balita.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $keluargas = Keluarga::all();
        return view('balita.create', compact('keluargas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Balita::create([
            'keluarga_id' => $request->keluarga_id,
            'nama_balita' => $request->nama_balita,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect('/balita');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Balita::findOrFail($id);
        $keluargas = Keluarga::all();
        return view('balita.edit', compact('row', 'keluargas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Balita::findOrFail($id);
        $row->update([
            'keluarga_id' => $request->keluarga_id,
            'nama_balita' => $request->nama_balita,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect('/balita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Balita::findOrFail($id);
        $row->delete();

        return redirect('/balita');
    }
}