<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\KeluhanTindakan;

class Kader extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'kaders';
    protected $fillable =
    [
        'nama', 'jabatan', 'jenis_kelamin', 'TTL', 'pendidikan',
    ];
    public $timestamps = false;

    public function kmslansia()
    {
        return $this->hasMany(PantauanKMS::class);
    }
}
