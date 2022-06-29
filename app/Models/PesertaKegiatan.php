<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\DataLansia;


class PesertaKegiatan extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'peserta_kegiatan';
    protected $fillable = [
        'kegiatan_lansia_id', 
        'lansia_id', 
        'iuran_wajib'
    ];
    public function datalansia()
    {
        return $this->belongsTo(DataLansia::class);
    }
}
