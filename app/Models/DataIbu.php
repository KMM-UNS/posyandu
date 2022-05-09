<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Models\GolonganDarah;
use App\Models\Status;
use App\Models\PeriksaIbuHamil;
use App\Models\PeriksaIbuNifas;
use App\Models\IbuHamilPeriksa;
use App\Models\IbuNifasPeriksa;

class DataIbu extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'data_ibus';
    protected $fillable = [
        'id', 'nama', 'nik', 'pembiayaan', 'golongan_darah_id', 'ttl', 'pendidikan', 'pekerjaan', 'alamat_rumah', 'no_telepon', 'status_id'
    ];
    public $timestamps = false;


    public function golda_ibu()
    {
        return $this->belongsTo(GolonganDarah::class, 'golongan_darah_id');
    }

    public function status_ibu()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function dataibus()
    {
        return $this->hasMany(PeriksaIbuHamil::class);
    }

    public function namaibu()
    {
        return $this->hasMany(PeriksaIbuNifas::class);
    }
    public function periksaibus()
    {
        return $this->hasMany(IbuHamilPeriksa::class);
    }
    public function periksanifas()
    {
        return $this->hasMany(IbuNifasPeriksa::class);
    }
}
