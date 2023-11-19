<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MFasilitas extends Model
{
    use HasFactory;

    protected $table = 'tb_fasilitas';

    protected $casts = [
        'file_path' => 'array'
    ];

    protected $fillable = [
        'file_path',
        'description',
        'category'
    ];
}
