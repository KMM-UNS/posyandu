<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Puskesmas extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'puskesmas';
    protected $fillable = ['nama'];
    public $timestamps = false;

    public function rujukanlansia()
    {
        return $this->hasMany(RujukanLansia::class);
    }
}
