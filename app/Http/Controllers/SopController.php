<?php

namespace App\Http\Controllers;

use App\Models\sop;
use Illuminate\Http\Request;
use App\Models\Aturan;
use App\Models\Pelayanan;

class SopController extends Controller
{
    public function index()
    {
        $sop = Sop::all(); // Mengambil data SOP dari database
        $aturan = Aturan::all(); // Mengambil data Peraturan dari database
        $pelayanan = Pelayanan::all();

        return view('sop.index', compact('sop', 'aturan','pelayanan')); // Mengirimkan data SOP dan Peraturan ke Blade view SOP
    }


    public function create()
    {
        return view('sop.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'aktivitas' => 'required',
            'target' => 'required',
            'keterangan' => 'required'
        ]);

        Sop::create($request->all());

        return redirect()->route('sop.index')->with('message', 'Data SOP dan Peraturan berhasil ditambahkan.');
    }

    public function show($id)
    {
        $sop = Sop::findOrFail($id);
        return view('sop.show', compact('sop'));
    }

    public function edit($id)
    {
        $sop = Sop::findOrFail($id);
        return view('sop.edit', compact('sop'));
    }

    public function update(Request $request, $id)
    {
        $sop = Sop::findOrFail($id);

        $request->validate([
            'aktivitas' => 'required',
            'target' => 'required',
            'keterangan' => 'required'
        ]);

        $sop->aktivitas = $request->aktivitas;
        $sop->target = $request->target;
        $sop->keterangan = $request->keterangan;

        $sop->save();
        return redirect()->route('sop.index')->with('message', 'Data SOP dan Peraturan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $sop = Sop::findOrFail($id);
        $sop->delete();

        return redirect()->route('sop.index')->with('message', 'Data SOP dan Peraturan berhasil dihapus.');
    }

    
}
