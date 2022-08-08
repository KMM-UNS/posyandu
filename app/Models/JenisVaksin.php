<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Imunisasi;

class JenisVaksin extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'jenis_vaksins';
    protected $fillable = ['vaksin','umur','stok'];
    public $timestamps = false;

    public function imunisasi()
    {
        return $this->hasMany(Imunisasi::class);
    }
}
