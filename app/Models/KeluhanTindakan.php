<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class KeluhanTindakan extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'keluhan_tindakan';
    protected $fillable = [
        'nama_lansia_id', 'nama_pemeriksa' ,'tanggal_pemeriksaan', 'keluhan', 'tindakan'
    ];
    public $timestamps = false;

    public function lansia()
    {
        return $this->belongsTo(DataLansia::class,'nama_lansia_id');
    }


}
