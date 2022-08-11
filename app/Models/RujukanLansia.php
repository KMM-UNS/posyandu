<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class RujukanLansia extends Model
{
    use HasFactory;


    public const ACTIVE = "aktif";

    protected $table = 'rujukan_lansia';
    protected $fillable = [
        'id', 'no_surat', 'kepada', 'tanggal_surat', 'namalansia', 'umur', 'jeniskelamin', 'alamat', 'keluhan', 'status'
    ];
    // 
    // public $timestamps = false;

    public function rujukan()
    {
        return $this->belongsTo(DataLansia::class, 'namalansia');
    }
    public function instansi()
    {
        return $this->belongsTo(Puskesmas::class, 'kepada');
    }
    public function createable()
    {
        return $this->morphTo();
    }
}
