<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Imunisasi;
use App\Models\Rujukan;


class DataAnak extends Model
{

    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'data_anaks';
    protected $fillable = [
        'foto',
        'nama_anak',
        'NIK',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'berat_badan_lahir',
        'tinggi_badan_lahir',
        'umur',
        'tahun',
        'jenis_kelamin',
        'anak_ke',
        'nama_orangtua',
        'no_hp_orangtua',
        'golongan_darah',
        'tinggi_ibu',
        'tinggi_bapak',
        'createable_id',
        'createable_type'];
    public $timestamps = false;

    public function imunisasi()
    {
        return $this->hasMany(Imunisasi::class);
    }

    public function rujukan()
    {
        return $this->hasMany(Rujukan::class);
    }

    public function createable()
    {
        return $this->morphTo();
    }

}
