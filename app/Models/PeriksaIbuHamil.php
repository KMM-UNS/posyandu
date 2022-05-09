<?php

namespace App\Models;

use App\Models\DataIbu;
use App\Models\DaftarPenyakit;
use App\Models\DetailImunisasi;
use App\Models\Kader;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PeriksaIbuHamil extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'periksa_ibu_hamils';
    protected $fillable = [
        'id', 'nama_id', 'tt_ke',  'tanggal_periksa', 'tinggi_badan', 'berat_badan', 'lila_ibu', 'riwayat_kesehatanibu_id', 'status_imunisasi', 'riwayat_beresiko', 'riwayat_kehamilan', 'kader'
    ];
    // 
    public $timestamps = false;


    public function data_ibu()
    {
        return $this->belongsTo(DataIbu::class, 'nama_id');
    }
    public function data_penyakit()
    {
        return $this->belongsTo(DaftarPenyakit::class, 'riwayat_kesehatanibu_id');
    }
    public function data_imunisasi()
    {
        return $this->belongsTo(DetailImunisasi::class, 'tt_ke');
    }
    public function data_kader()
    {
        return $this->belongsTo(Kader::class, 'kader');
    }
}
