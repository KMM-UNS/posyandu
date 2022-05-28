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
        'tanggal_pemeriksaan' , 'nama_lansia1', 'kegiatan_harian' , 'status_mental' , 'indeks_massa_tubuh', 'tekanan_darah', 'hemoglobin','reduksi_urine', 'protein_urine', 'umur', 'jk', 'tb', 'bb', 'hasil'
    ];
    public $timestamps = false;

    public function lansia()
    {
        return $this->belongsTo(DataLansia::class,'nama_lansia1');
    }
    


}
