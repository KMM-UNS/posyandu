<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rujukan extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'rujukans';
    protected $fillable = [
        'id', 'kode_surat', 'tanggal_surat', 'kode_pemeriksaan', 'kepada', 'penyakit', 'tempat_rujukan', 'kecamatan', 'lampiran', 'perihal', 'alamat_penerima',  'keterangan_rujukan'
    ];
    // 
    public $timestamps = false;
}
