<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Models\DataLansia;

class JaminanKesehatan extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'jaminan_kesehatan';
    protected $fillable = [
        'jaminan_kesehatan_id'
    ];
    public $timestamps = false;

    public function DataLansiaJaminanKesehatan()
    {
        return $this->hasMany(DataLansia::class);
    }

}
