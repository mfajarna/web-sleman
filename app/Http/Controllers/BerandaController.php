<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mkontak;
use App\Models\MFasilitas;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda');
    }
    public function peminjaman()
    {
        return view('peminjaman');
    }
    public function jadwal()
    {
        return view('pelayanan/jadwal');
    }
    public function jadwal_user()
    {
        return view('pelayanan/jadwal_user');
    }
    public function fasilitas()
    {

        $fasilitasKategory = MFasilitas::groupBy('category')->get();

        return view('pelayanan/fasilitas', compact('fasilitasKategory'));
    }
    public function kontak(){
        $kontaks = MKontak::all();

        return view('kontak', compact('kontaks'));
    }
}
