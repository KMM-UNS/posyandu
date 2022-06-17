<?php

namespace App\Http\Controllers\user;

use App\Models\Imunisasi;
use App\Http\Controllers\Controller;
use App\Models\DataAnak;
use App\Charts\ImunisasiChart;
use Illuminate\Http\Request;

class GrafikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ImunisasiChart $chart)
    {
        $dataanak = DataAnak::select('id')->where('createable_id', auth()->user()->id)->first()->id;
        $imunisasis = Imunisasi::where('nama_anak_id', $dataanak)->get();
        return view('pages.user.anak.grafik.index', ['imunisasis' => $imunisasis], ['chart' => $chart->build()] );
    }


    }

