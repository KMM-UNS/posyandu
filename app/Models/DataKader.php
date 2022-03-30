<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class DataKader extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'data_kaders';
    protected $fillable =
    [
        'nama', 'jabatan', 'jenis kelamin', 'TTL', 'pendidikan', 'status absen'
    ];
    public $timestamps = false;
}
