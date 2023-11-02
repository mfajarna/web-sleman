<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pelayanan/fasilitas');
    }
    public function kontak(){
        return view('kontak');
    }
}
