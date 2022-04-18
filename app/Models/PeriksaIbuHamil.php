<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\GolonganDarah;
use App\Models\Vitamin;


class PeriksaIbuHamil extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'periksa_ibu_hamils';
    protected $fillable = [
        'id', 'nama', 'golongan_darah', 'tanggal_periksa', 'tinggi_badan', 'berat_badan', 'riwayat_kesehatanibu', 'status_pemberian_vitamin', 'riwayat_penyakit_keluarga', 'keluhan_ibu_hamil', 'tenaga_kesehatan'
    ];
    public $timestamps = false;

    public function golda()
    {
        return $this->belongsTo(GolonganDarah::class, 'golongan_darah');
    }

    public function vitamin()
    {
        return $this->belongsTo(Vitamin::class, 'status_pemberian_vitamin');
    }
}
