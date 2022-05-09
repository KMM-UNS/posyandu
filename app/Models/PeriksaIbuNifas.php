<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\GolonganDarah;
use App\Models\DataIbu;
use App\Models\Kader;
// use App\Models\Vitamin;

class PeriksaIbuNifas extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'periksa_ibu_nifas';
    protected $fillable = [
        'id', 'nama', 'golongan_darah_id', 'tanggal_periksa', 'tinggi_badan', 'berat_badan', 'riwayat_kesehatanibu', 'status_pemberian_vitamin', 'riwayat_penyakit_keluarga',  'kader'
    ];
    public $timestamps = false;

    public function golda_ibu()
    {
        return $this->belongsTo(GolonganDarah::class, 'golongan_darah_id');
    }

    public function data_ibu()
    {
        return $this->belongsTo(DataIbu::class, 'nama');
    }
    public function data_kader()
    {
        return $this->belongsTo(Kader::class, 'kader');
    }
}
