<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Pengajuan extends Model
{
    use HasFactory;


    public const ACTIVE = "aktif";

    protected $table = 'pengajuan';
    protected $fillable =
    [
        'nama_kader', 'tgl_ajuan', 'jumlah_ajuan', 'rencana_ajuan'
    ];
}
