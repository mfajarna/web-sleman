<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\MPeminjaman;

class DashboardController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $peminjaman = MPeminjaman::where('status', 'Belum Diverifikasi')->get()->count();
        $peminjamanVerifikasi = MPeminjaman::where('status', 'Diverifikasi')->get()->count();

        return view('dashboard.index', compact('peminjaman','peminjamanVerifikasi'));
    }
}
