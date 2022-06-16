<?php

namespace App\Http\Controllers\User\UserLansia;

use App\Datatables\User\Lansia\RiwayatKeluhanTindakanDataTable;

use App\Models\PantauanKMS;
use App\Http\Controllers\Controller;
use App\Models\DataLansia;
use App\Models\KeluhanTindakan;

use Illuminate\Http\Request;

class RiwayatKeluhanTindakanController extends Controller
{
    public function index()
    {
        $data = DataLansia::select('id')->where('createable_id', auth()->user()->id)->first()->id;
        $keluhan_tindakan = KeluhanTindakan::where('nama_lansia_id', $data)->get();
     
        return view('pages.user.lansia.kmslansia.index', ['keluhan_tindakan' => $keluhan_tindakan]);

        
        
    }
}
