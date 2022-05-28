<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Models\StatusKawin;
use App\Models\Agama;
use App\Models\GolonganDarah;
use App\Models\JaminanKesehatan;


class BiodataLansia extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'data_lansia';
    protected $fillable = [
        'nama_lansia','no_KMS','email', 'no_hp', 'NIK', 'jenis_kelamin', 'ttl', 'umur', 'status_perkawinan', 'alamat', 'agama', 'pendidikan_terakhir','golongan_darah','jaminan_kesehatan'
    ];
    public $timestamps = false;

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
        return $this->belongsTo(StatusKawin::class,'status_perkawinan');
    }

    public function agama()
    {
        return $this->belongsTo(Agama::class,'agama');
    }

    public function golongandarah()
    {
        return $this->belongsTo(GolonganDarah::class,'golongan_darah');
    }

    public function jaminankesehatan()
    {
        return $this->belongsTo(JaminanKesehatan::class,'jaminan_kesehatan');
    }




}
