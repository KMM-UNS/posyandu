<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\DataAnak;
use App\Models\Instansi;

class Rujukan extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'rujukans';
    protected $fillable = [
        'id', 'kode_surat', 'tanggal_surat', 'kepada', 'nama', 'umur', 'alamat', 'bb_turun', 'bb_naik', 'keluhan',  'keterangan_rujukan', 'status',
    ];
    //
    public $timestamps = false;

    public function data_anak()
    {
        return $this->belongsTo(DataAnak::class,'nama');
    }

    public function instansi()
    {
        return $this->belongsTo(Instansi::class,'kepada');
    }
}
