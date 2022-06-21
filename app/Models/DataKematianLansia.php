<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
//use App\Models\GolonganDarah;
use App\Models\DataLansia;



class DataKematianLansia extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'data_kematian_lansia';
    protected $fillable = [
        'nama_jenazah',
        'jenis_kelamin',
        'tgl_lahir', 
        'tgl_meninggal', 
      
    ];
    
    public function kematian()
    {
        return $this->belongsTo(DataLansia::class,'nama_jenazah');
    }

    


}
