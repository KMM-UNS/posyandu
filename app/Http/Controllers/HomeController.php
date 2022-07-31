<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\ImunisasiChart;
use App\Charts\UmurChart;
use App\Charts\DataanakChart;
use App\Charts\PeriksaChart;
use App\Charts\RujukanChart;
use App\Models\DataAnak;
use App\Models\Kader;
use App\Models\Rujukan;
use App\Models\Imunisasi;

class HomeController extends Controller
{
    public function index(ImunisasiChart  $imunisasiChart, DataanakChart $dataanakChart, UmurChart $umurChart,
    PeriksaChart $periksaChart, RujukanChart $rujukanChart ){
        // return view('pages.landing-page');
        $anak = DataAnak::count();
        $kader = Kader::count();
        $rujukan = Rujukan::count();
        $imunisasi = Imunisasi::count();
        if(auth()->user()->hasRole('regular_user')){
            return view('home', ['imunisasiChart' => $imunisasiChart->build()]);
        }
         else if (auth()->user()->hasRole('petugas_kesehatan')){
            return view('pages.admin.dashboard',  [
                'anak' => $anak,
                'dataanakChart' => $dataanakChart->build(),
                'umurChart' => $umurChart->build(),
                'periksaChart' => $periksaChart->build(),
                'rujukanChart' => $rujukanChart->build(),
            ]);
        }
        else {
            return view('pages.admin.dashboard',  [
                'anak' => $anak, 'kader' => $kader,
                'rujukan'=>$rujukan,
                'imunisasi'=>$imunisasi,
                'dataanakChart' => $dataanakChart->build(),
                'umurChart' => $umurChart->build(),
                'periksaChart' => $periksaChart->build(),
                'rujukanChart' => $rujukanChart->build(),
            ]);
        }
    }
}
