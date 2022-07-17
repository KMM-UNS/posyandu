<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\DataAnak;
use App\Models\Instansi;
// use AutoNumberTrait;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Rujukan extends Model
{
    use HasFactory;
    use AutoNumberTrait;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'rujukans';
    protected $fillable = [
        'id', 'kode_surat', 'tanggal_surat', 'kepada', 'nama', 'umur', 'alamat', 'bb_turun', 'bb_naik', 'keluhan',  'keterangan_rujukan', 'status',
    ];
    //
    public $timestamps = false;

    public function data_anak()
    {
        return $this->belongsTo(DataAnak::class,'nama');
    }

    public function instansi()
    {
        return $this->belongsTo(Instansi::class,'kepada');
    }

    public function getAutoNumberOptions()
    {
        return [
            'kode_surat' => [
                'format' => function () {
                    return date('Y.m.d') . '/SR/?';
                },
                'length' => 5
                // 'format' => 'SO.?', // Format kode yang akan digunakan.
                // 'length' => 5 // Jumlah digit yang akan digunakan sebagai nomor urut
            ]
        ];
    }
}
