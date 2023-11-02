<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MPeminjaman;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = MPeminjaman::all();

        return view('peminjaman.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_peminjam' => 'required',
            'instansi' => 'required',
            'noWa' => 'required',
            'acara' => 'required',
            'ktp' => 'required|file|max:2048',
            'dari' => 'required',
            'sampai' => 'required',
            'waktu_peminjaman' => 'required'
        ]);

        $file = $request->file('ktp');
        $fileName = $file->getClientOriginalName();


        $model = new MPeminjaman;
        $model->nama = $request->nama_peminjam;
        $model->instansi = $request->instansi;
        $model->no_telp = $request->noWa;
        $model->acara = $request->acara;
        $model->surat_permohonan = $request->surat_permohonan;
        $model->ktp = $fileName;
        $model->dari_tanggal = $request->dari;
        $model->sampe_tanggal = $request->sampai;
        $model->waktu_peminjaman = $request->waktu_peminjaman;

        $model->save();

        $filePath = $file->store('ktp');
        $file->move(public_path('ktp'), $fileName);

        return redirect()->back()->with('success', 'File uploaded successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = MPeminjaman::findOrFail($id);
        

        dd($id);

        return response()->json(array('success' => $id));
        // $model->status = 'Diverifikasi';
        // $model->save();

        // return redirect()->back()->with('success', 'File uploaded successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateStatus(Request $request, $id){

        // $model = MPeminjaman::findOrFail($id);
        // $model->status = 'Diverifikasi';
        // $model->save();

        // return redirect()->back()->with('success', 'File uploaded successfully.');

        return response()->json(array('status' =>'200'));
    }
}
