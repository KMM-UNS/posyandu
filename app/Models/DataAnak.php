<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Imunisasi;

class DataAnak extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'data_anaks';
    protected $fillable = [
        'nama_anak',
        'NIK',
        'tempat_lahir',
        'tanggal_lahir',
        'berat_badan_lahir',
        'tinggi_badan_lahir',
        'umur',
        'jenis_kelamin',
        'anak_ke',
        'nama_orangtua',
        'no_hp_orangtua'];
    public $timestamps = false;

    public function imunisasi()
    {
        return $this->hasMany(Imunisasi::class);
    }
}
