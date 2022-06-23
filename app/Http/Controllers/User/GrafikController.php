<?php

namespace App\Http\Controllers\user;

use App\Models\Imunisasi;
use App\Http\Controllers\Controller;
use App\Models\DataAnak;
use App\Charts\ImunisasiChart;
use Barryvdh\DomPDF\Facade\Pdf;
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
        $imunisasis = Imunisasi::where('nama_anak_id', $dataanak, auth()->user()->id)->get();
        return view('pages.user.anak.grafik.index', ['imunisasis' => $imunisasis], ['chart' => $chart->build()] );
    }

// public function cetak($id)
//     {
//         $data = Imunisasi::findOrFail($id);
//         $pdf = PDF::loadview('pages.user.anak.grafik.index',
//         [
//         'kode_surat'=>$data->kode_surat,
//         'tanggal_surat'=>$data->tanggal_surat,
//         'kepada'=>$data->kepada,
//         'nama'=>$data->data_anak->nama_anak,
//         'umur'=>$data->umur,
//         'alamat'=>$data->alamat,
//         'bb_turun'=>$data->bb_turun,
//         'bb_naik'=>$data->bb_naik,
//         'keluhan'=>$data->keluhan,
//         'keterangan_rujukan'=>$data->keterangan_rujukan,

//         ]);
//         return $pdf->download('rujukan.pdf');
        // $ = Imunisasi::findOrFail($id);
        // // $rujukan = Rujukan::where('createable_id', auth()->user()->id)->where('createable_type', 'App\Models\User')->findOrFail($id);
        // $pdf = PDF::loadview('pages.user.anak.grafik.index', ['imunisasi' => $imunisasi]);
        // return $pdf->download('cetak.pdf');
    }


