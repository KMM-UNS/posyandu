<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RujukanLansia extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'rujukan_lansia';
    protected $fillable = [
        'id', 'no_surat','kepada','tanggal_surat','namalansia','umur','jeniskelamin','alamat','keluhan'
    ];
    // 
    public $timestamps = false;
}
