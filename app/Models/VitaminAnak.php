<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Imunisasi;

class VitaminAnak extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'vitamin_anaks';
    protected $fillable = [
        'nama_vitamin',
        'keterangan'];
    public $timestamps = false;

    public function imunisasi()
    {
        return $this->hasMany(Imunisasi::class);
    }
}
