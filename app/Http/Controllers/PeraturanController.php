<?php

namespace App\Http\Controllers;

use App\Models\sop;
use App\Models\Aturan;
use App\Models\Pelayanan;
use Illuminate\Http\Request;

class PeraturanController extends Controller
{
    public function index()
    {
        $sop = Sop::all(); // Mengambil data SOP dari database
        $aturan = Aturan::all(); // Mengambil data Peraturan dari database
        $pelayanan = Pelayanan::all();
        $name;

        // $name = $pelayanan[0]->name;
        $name = $pelayanan->count();
        if($name > 0){
            $name = $pelayanan[0]->name;
        } else {
            $name = 'pdf/standarpelayanan.pdf';
        }


        return view('peraturan', compact('sop', 'aturan', 'name'));
    }
}
