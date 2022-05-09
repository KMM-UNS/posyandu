<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kader extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'kaders';
    protected $fillable =
    [
        'nama', 'jabatan', 'jenis_kelamin', 'ttl', 'pendidikan', 'status_absen'
    ];
    public $timestamps = false;

    public function periksaibunifas()
    {
        return $this->hasMany(PeriksaIbuNifas::class);
    }
    public function periksaibuhamil()
    {
        return $this->hasMany(PeriksaIbuHamil::class);
    }
}
