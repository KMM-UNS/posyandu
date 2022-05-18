<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Imunisasi;

class Kader extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'kaders';
    protected $fillable =
    [
        'nama', 'jabatan', 'jenis_kelamin', 'TTL', 'pendidikan', 'status_absen'
    ];
    public $timestamps = false;

    public function imunisasi()
    {
        return $this->hasMany(Imunisasi::class);
    }
}
