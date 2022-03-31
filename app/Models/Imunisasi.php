<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\JenisVaksin;

class Imunisasi extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'imunisasis';
    protected $fillable = [
        'nama_anak',
        'jenis_kelamin',
        'tanggal_imunisasi',
        'berat_badan',
        'tinggi_badan',
        'umur',
        'jenis_vaksin',
        'jadwal_vaksin',
        'nama_kader',
    ];
    public $timestamps = false;

    public function jenisvaksin()
    {
        return $this->belongsTo(JenisVaksin::class,'jenis_vaksin');
    }
}
