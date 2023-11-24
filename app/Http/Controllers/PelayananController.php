<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelayanan;


class PelayananController extends Controller
{
    public function index()
    {
        return view('pelayanan/jadwal');
    }

    public function view_create(){
        return view('peraturan/create');
    }

    public function upload(Request $request){
        $request->validate([
            'file' => 'required|file|max:2048',
        ]);

        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->store('uploads');
        $file->move(public_path('pdf'), $fileName);

        $fileModel = new Pelayanan;
        $fileModel->name = $fileName;
        $fileModel->path = $filePath;
        $fileModel->save();

        return redirect()->route('sop.index')->with('message', 'Data Pelayanan berhasil ditambahkan.');
        
    }

    public function edit($id){
        $pelayanan = Pelayanan::findOrFail($id);

        return view('peraturan/edit', compact('pelayanan'));
    }

    public function update(Request $request, $id){
        $pelayanan = Pelayanan::findOrFail($id);

        $request->validate([
            'file' => 'required|file|max:2048',
        ]);

        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->store('uploads');
        $file->move(public_path('pdf'), $fileName);

        $pelayanan->name = $fileName;
        $pelayanan->path = $filePath;
        $pelayanan->save();

        return redirect()->route('sop.index')->with('message', 'Data Pelayanan berhasil diupdate.');
        
    }
}
