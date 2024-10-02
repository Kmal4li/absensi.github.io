<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi'; // Nama tabel yang benar

    protected $fillable = [
        'id_pegawai',
        'nama',
        'tanggal',
        'jam_masuk',
        'jam_pulang',
        'status',
    ];
}
