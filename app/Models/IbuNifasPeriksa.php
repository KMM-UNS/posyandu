<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\DataIbu;

class IbuNifasPeriksa extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'ibu_nifas_periksas';
    protected $fillable = [
        'id', 'nama',   'keluhan', 'tanggal_kembali', 'tenaga_kesehatan', 'tanggal_periksa'
    ];
    // 
    public $timestamps = false;
    public function data_ibu()
    {
        return $this->belongsTo(DataIbu::class, 'nama');
    }

    public function data_kesehatan()
    {
        return $this->belongsTo(TenagaKesehatan::class, 'tenaga_kesehatan');
    }
}
