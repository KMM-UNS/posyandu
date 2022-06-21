<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataKegiatan extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'data_kegiatan';
    protected $fillable = [
        'nama_kegiatan',
        'tanggal',
        'waktu', 
        'daftar_hadir',
        'notulensi',
        'fotokegiatan', 
      
    ];
}
