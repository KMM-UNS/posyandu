<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataKader extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'data_kaders';
    protected $fillable = [
        'nama_kader',
        'jenis_kelamin',
        'alamat',
        'no_telephone'];
    public $timestamps = false;
}
