<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class DataIbu extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'data_ibus';
    protected $fillable = [
        'id', 'nama', 'nik', 'pembiayaan', 'golongan_darah', 'ttl', 'pendidikan', 'pekerjaan', 'alamat_rumah', 'no_telepon', 'status'
    ];
    public $timestamps = false;
}
