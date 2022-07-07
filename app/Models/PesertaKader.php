<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\DataLansia;

class PesertaKader extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'peserta_kader';
    protected $fillable = [
        'kegiatan_lansia1',
        'kader_id',
    ];
    public function datalansia()
    {
        return $this->belongsTo(DataLansia::class);
    }
}
