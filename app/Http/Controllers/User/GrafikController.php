<?php

namespace App\Http\Controllers\user;

use App\Models\Imunisasi;
use App\Http\Controllers\Controller;
use App\Models\DataAnak;
use App\Charts\ImunisasiChart;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
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
        // != (Tidak sama dengan)
        $dataanak = DataAnak::select('id')->where('createable_id', auth()->user()->id)->first();
        if($dataanak != null) {
        $imunisasis = Imunisasi::where('nama_anak_id', $dataanak->id, auth()->user()->id)->get();
        } else {
        $imunisasis = Imunisasi::where('nama_anak_id', $dataanak, auth()->user()->id)->get();
        }
        return view('pages.user.anak.grafik.index', ['imunisasis' => $imunisasis] );
    }

public function cetak($id)
    {
        $data = Imunisasi::findOrFail($id);
         $dataanak = DataAnak::select('id')->where('createable_id', auth()->user()->id)->first();
        if($dataanak != null) {
        $imunisasis = Imunisasi::where('nama_anak_id', $dataanak->id, auth()->user()->id)->get();
        } else {
        $imunisasis = Imunisasi::where('nama_anak_id', $dataanak, auth()->user()->id)->get();
        }
        // $dataanak = DataAnak::select('id')->where('createable_id', auth()->user()->id)->first()->id;
        // $imunisasis = Imunisasi::where('nama_anak_id', $dataanak, auth()->user()->id)->get();
        // dd($data);
        $pdf = PDF::loadview('pages.user.anak.Grafik.cetak',
        [
            // 'tanggal_imunisasi'=>$data->tanggal_imunisasi,
            // 'berat_badan'=>$data->berat_badan,
            // 'tinggi_badan'=>$data->tinggi_badan,
            // 'total_imt'=>$data->total_imt,
            // 'ket_imt'=>$data->ket_imt,
            // 'umur'=>$data->umur,
            // 'jenis_vaksin'=>$data->jenisvaksin->vaksin,
            // 'vitamin'=>$data->vitamin_anak->nama_vitamin,
            // 'keluhan'=>$data->keluhan,
            // 'tindakan'=>$data->tindakan,
            // 'status_gizi'=>$data->status_gizi,
            // 'nama_kader'=>$data->kader->nama,

            'imunisasis' => $imunisasis,
            // 'chart' => $chart->build()
        // 'tanggal_imunisasi'=>$data->tanggal_imunisasi,
        // 'berat_badan'=>$data->berat_badan,
        // 'tinggi_badan'=>$data->tinggi_badan,
        // 'umur'=>$data->umur,
        // 'jenis_vaksin'=>$data->jenisvaksin->vaksin,
        // 'vitamin'=>$data->vitamin_anak->nama_vitamin,
        // 'keluhan'=>$data->keluhan,
        // 'tindakan'=>$data->tindakan,
        // 'status_gizi'=>$data->status_gizi,
        // 'nama_kader'=>$data->kader->nama,

        ])->setOptions(['defaultFont' => 'sans-serif']);;
        // return $pdf->download('rujukan.pdf');
        // $imunisasi = Imunisasi::findOrFail($id);
        // $rujukan = Rujukan::where('createable_id', auth()->user()->id)->where('createable_type', 'App\Models\User')->findOrFail($id);
        // $pdf = PDF::loadview('pages.user.anak.grafik.index', ['imunisasi' => $imunisasi]);
        $pdf->setpaper('letter', 'landscape');
        return $pdf->download('cetakkms.pdf');
    }
}


