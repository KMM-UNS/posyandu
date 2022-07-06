<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Kader;

class JadwalImunisasi extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'jadwal_imunisasis';
    protected $fillable = [
        'tanggal',
        'tempat',
        'keterangan',
        'penanggung_jawab',
        ];
    public $timestamps = false;

    public function kader()
    {
         return $this->belongsTo(Kader::class,'penanggung_jawab');
    }


}
