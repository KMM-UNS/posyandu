<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
//use App\Models\GolonganDarah;
use App\Models\StatusKawin;
use App\Models\Agama;
use App\Models\GolonganDarah;
use App\Models\JaminanKesehatan;
use App\Models\Pendidikan;
use App\Models\PesertaKegiatan;
// use App\Models\DataKematianLansia;



class DataLansia extends Model
{
    use HasFactory;


    public const ACTIVE = "aktif";

    protected $table = 'data_lansia';
    protected $fillable = [
        'nama_lansia',
        'no_kms',
        'email',
        'no_hp',
        'NIK',
        'jenis_kelamin',
        'ttl',
        'umur',
        'status_perkawinan',
        'alamat',
        'agama',
        'pendidikan_terakhir',
        'golongan_darah',
        'jaminan_kesehatan',

    ];


    public function KeluhanTindakan()
    {
        return $this->hasMany(KeluhanTindakan::class);
    }

    public function PantauanKMS()
    {
        return $this->hasMany(PantauanKMS::class);
    }

    public function statuskawin()
    {
        return $this->belongsTo(StatusKawin::class, 'status_perkawinan');
    }


    public function agama()
    {
        return $this->belongsTo(Agama::class, 'agama');
    }

    public function golongandarah()
    {
        return $this->belongsTo(GolonganDarah::class, 'golongan_darah');
    }

    public function jaminankesehatan()
    {
        return $this->belongsTo(JaminanKesehatan::class, 'jaminan_kesehatan');
    }
    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class, 'pendidikan_terakhir');
    }

    public function createable()
    {
        return $this->morphTo();
    }

    public function RujukanLansia()
    {
        return $this->hasMany(RujukanLansia::class);
    }
    public function DataKematianLansia()
    {
        return $this->hasMany(DataKematianLansia::class);
    }
    public function peserta()
    {
        return $this->belongsTo(PesertaKegiatan::class);
    }
    public function pesertakader()
    {
        return $this->belongsTo(PesertaKader::class);
    }
}
