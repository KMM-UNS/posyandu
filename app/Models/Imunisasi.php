<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\JenisVaksin;
use App\Models\DataAnak;
use App\Models\VitaminAnak;
use App\Models\Kader;
class Imunisasi extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'imunisasis';
    protected $fillable = [
        'nama_anak_id',
        'tanggal_imunisasi',
        'lingkar_kepala',
        'berat_badan',
        'tinggi_badan',
        'total_imt',
        'ket_imt',
        'umur',
        'jenis_vaksin',
        'vitamin',
        'keluhan',
        'tindakan',
        'status_gizi',
        'nama_kader',
    ];
    public $timestamps = false;

    public function jenisvaksin()
    {
        return $this->belongsTo(JenisVaksin::class,'jenis_vaksin');
    }

    public function data_anak()
    {
        return $this->belongsTo(DataAnak::class,'nama_anak_id');
    }

    public function vitamin_anak()
    {
         return $this->belongsTo(VitaminAnak::class,'vitamin');
    }
    public function kader()
    {
         return $this->belongsTo(Kader::class,'nama_kader');
    }
}
