<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Models\DataIbu;

class Status extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'statuses';
    protected $fillable =
    [
        'id', 'nama'
    ];
    public $timestamps = false;

    public function setNamaAttribute($value)
    {
        return $this->attributes['nama'] = Str::ucfirst($value);
    }

    public function scopeActive($query)
    {
        return $query->where('status', static::ACTIVE);
    }

    public function statuss()
    {
        return $this->hasMany(DataIbu::class);
    }
}
