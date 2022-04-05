<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
//use App\Models\GolonganDarah;
use App\Models\Agama;


class DataLansia extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'data_lansia';
    protected $fillable = [
        'nama_lansia', 'NIK', 'jenis_kelamin', 'ttl', 'umur', 'status_perkawinan', 'alamat', 'agama', 'pendidikan_terakhir','golongan_darah','jaminan_kesehatan'
    ];
    public $timestamps = false;


    

}
