<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KegiatanLansia extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'kegiatan_lansia';
    protected $fillable = [
        'nama',
        'deskripsi',
        'lokasi', 
        'tanggal_kegiatan', 
        'waktu_mulai', 
        'waktu_selesai', 
        'status',
     
    ];
    public function pesertakegiatan()
    {
        return $this->hasMany(PesertaKegiatan::class);
    }

}
