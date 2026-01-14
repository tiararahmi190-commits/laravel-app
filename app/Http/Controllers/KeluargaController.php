<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Keluarga::all();
        return view('keluarga.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('keluarga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Keluarga::create([
        'nama_kepala' => $request->nama_kepala,
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp,
        ]);

        return redirect('/keluarga');
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
        $row = keluarga::findOrFail($id);
        return view('keluarga.edit', compact('row'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Keluarga::findOrFail($id); // 
         $row->update([
            'nama_kepala' => $request->nama_kepala,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
         ]);

         return redirect('/keluarga');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Keluarga::findOrFail($id);
        $row->delete();

        return redirect('/keluarga');
    }
}
