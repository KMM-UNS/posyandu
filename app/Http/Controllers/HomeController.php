<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\ImunisasiChart;
use App\Models\DataAnak;
use App\Models\Kader;

class HomeController extends Controller
{
    public function index(ImunisasiChart $chart){
        // return view('pages.landing-page');
        $anak = DataAnak::count();
        $kader = Kader::count();
        if(auth()->user()->hasRole('regular_user')){
            return view('home', ['chart' => $chart->build()]);
        }
        else {
            return view('pages.admin.dashboard',  [
                'anak' => $anak, 'kader' => $kader
            ]);
        }
    }
}
