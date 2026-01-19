<?php

namespace App\Http\Controllers;

use App\Models\Penimbangan;
use App\Models\Balita;
use Illuminate\Http\Request;

class PenimbanganController extends Controller
{
    public function index()
    {
        $rows = Penimbangan::with('balita')->get();
        return view('penimbangan.index', compact('rows'));
    }

    public function create()
    {
        $balitas = Balita::all();
        return view('penimbangan.create', compact('balitas'));
    }

    public function store(Request $request)
    {
        Penimbangan::create([
            'balita_id'   => $request->balita_id,
            'tanggal'     => $request->tanggal,
            'berat'       => $request->berat,
            'tinggi'      => $request->tinggi,
            'status_gizi' => $request->status_gizi,
            'keterangan'  => $request->keterangan,
        ]);

        return redirect('/penimbangan');
    }

    // 🔽 INI YANG KURANG
    public function edit($id)
    {
        $row = Penimbangan::findOrFail($id);
        $balitas = Balita::all();
        return view('penimbangan.edit', compact('row', 'balitas'));
    }

    public function update(Request $request, $id)
    {
        $row = Penimbangan::findOrFail($id);
        $row->update([
            'balita_id'   => $request->balita_id,
            'tanggal'     => $request->tanggal,
            'berat'       => $request->berat,
            'tinggi'      => $request->tinggi,
            'status_gizi' => $request->status_gizi,
            'keterangan'  => $request->keterangan,
        ]);

        return redirect('/penimbangan');
    }

    public function destroy($id)
    {
        $row = Penimbangan::findOrFail($id);
        $row->delete();

        return redirect('/penimbangan');
    }
}
