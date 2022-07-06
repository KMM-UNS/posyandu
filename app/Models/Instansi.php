<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Rujukan;

class Instansi extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'instansis';
    protected $fillable = ['nama_instansi'];
    public $timestamps = false;

    public function rujukan()
    {
        return $this->hasMany(Rujukan::class);
    }
}
