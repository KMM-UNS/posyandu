<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class PantauanKMS extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'pantauan_kms';
    protected $fillable = [
        'tanggal_pemeriksaan', 'nama_lansia1', 'kader', 'kegiatan_harian', 'status_mental', 'indeks_massa_tubuh', 'tb', 'bb', 'hasil',  'tekanan_darah', 'sistol', 'diastol', 'dengan_obat', 'nadi', 'hemoglobin', 'g_hemoglobin', 'reduksi_urine', 'jumlahtanda', 'dengan_obat_reduksi', 'protein_urine', 'jumlah_tanda', 'dengan_obat_protein', 'keluhan', 'gizi', 'tindakan',
    ];
    public $timestamps = false;

    public function lansia()
    {
        return $this->belongsTo(DataLansia::class, 'nama_lansia1');
    }
    public function kaderposyandu()
    {
        return $this->belongsTo(Kader::class, 'kader');
    }
}
