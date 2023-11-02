<?php

namespace App\Http\Controllers;

use App\Models\Aturan;
use App\Models\Sop;
use Illuminate\Http\Request;

class AturanController extends Controller
{
    public function index()
    {
        $sop = Sop::all(); // Mengambil data SOP dari database
        $aturan = Aturan::all(); // Mengambil data Peraturan dari database

        return view('sop.index', compact('sop', 'aturan',)); // Mengirimkan data SOP dan Peraturan ke Blade view SOP
    }

    public function create()
    {
        return view('aturan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'uraian' => 'required',
            'ket' => 'required',
        ]);

        Aturan::create($request->all());

        return redirect()->route('aturan.index')->with('message', 'Data Peraturan berhasil ditambahkan.');
    }

    public function show($id)
    {
        $aturan = Aturan::findOrFail($id);
        return view('aturan.show', compact('aturan'));
    }

    public function edit($id)
    {
        $aturan = Aturan::findOrFail($id);
        return view('aturan.edit', compact('aturan'));
    }

    public function update(Request $request, $id)
    {
        $aturan = Aturan::findOrFail($id);

        $request->validate([
            'uraian' => 'required',
            'ket' => 'required',
        ]);

        $aturan->uraian = $request->uraian;
        $aturan->ket = $request->ket;

        $aturan->save();
        return redirect()->route('aturan.index')->with('message', 'Data Peraturan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $aturan = Aturan::findOrFail($id);
        $aturan->delete();

        return redirect()->route('aturan.index')->with('message', 'Data Peraturan berhasil dihapus.');
    }
}
