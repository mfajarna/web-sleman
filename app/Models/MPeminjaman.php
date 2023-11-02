<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MPeminjaman extends Model
{
    use HasFactory;

    protected $table = 'tb_peminjaman';

    protected $fillable = [
        'nama',
        'instansi',
        'no_telp',
        'acara',
        'surat_permohonan',
        'ktp',
        'dari_tanggal',
        'sampe_tanggal',
        'waktu_peminjaman',
        'status'
    ];
}
