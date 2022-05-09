<?php

namespace App\Models;

use App\Models\DataIbu;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IbuHamilPeriksa extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'ibu_hamil_periksas';
    protected $fillable = [
        'id', 'nomor_periksa', 'nama_id',   'keluhan', 'tanggal_kembali', 'tenaga_kesehatan', 'tanggal_periksa'
    ];
    // 
    public $timestamps = false;

    public function periksa_ibu()
    {
        return $this->belongsTo(DataIbu::class, 'nama_id');
    }

    public function data_kesehatan()
    {
        return $this->belongsTo(TenagaKesehatan::class, 'tenaga_kesehatan');
    }
}
