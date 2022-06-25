<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rujukan;
use App\Models\DataAnak;
use Barryvdh\DomPDF\Facade\Pdf;

class RujukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dataanak = DataAnak::findOrFail($id);
        $dataanak = DataAnak::select('id')->where('createable_id', auth()->user()->id)->first()->id;
        $rujukans = Rujukan::where('nama', $dataanak)->get();
        // dd($dataanak);
        return view('pages.user.anak.rujuk.index', ['rujukans' => $rujukans]);
    }

    // public function show($id)
    // {
    //     $data = DataAnak::findOrFail($id);
    //     // dd($data);
    //     $rujukans = Rujukan::where('nama',$id)->get();
    //     // dd($rujukans);
    //     return view('pages.user.anak.rujuk.show',
    //     // ['data' => $data, 'rujukan' => $rujukans]
    // );

    // }

    public function cetak($id)
    {
        $data = Rujukan::findOrFail($id);
        $pdf = PDF::loadview('pages.admin.transaksi.rujukan.showrujukan-pdf',
        [
        'kode_surat'=>$data->kode_surat,
        'tanggal_surat'=>$data->tanggal_surat,
        'kepada'=>$data->kepada,
        'nama'=>$data->data_anak->nama_anak,
        'umur'=>$data->umur,
        'alamat'=>$data->alamat,
        'bb_turun'=>$data->bb_turun,
        'bb_naik'=>$data->bb_naik,
        'keluhan'=>$data->keluhan,
        'keterangan_rujukan'=>$data->keterangan_rujukan,

        ]);
        return $pdf->download('cetak.pdf');
        // $data = Rujukan::findOrFail($id);
        // $dataanak = DataAnak::select('id')->where('createable_id', auth()->user()->id)->first()->id;
        // $rujukans = Rujukan::where('nama', $dataanak, auth()->user()->id)->get();
        // $rujukan = Rujukan::where('createable_id', auth()->user()->id)->where('createable_type', 'App\Models\User')->findOrFail($id);
        // $pdf = PDF::loadview('pages.user.anak.rujuk.cetak', [
        //     'kode_surat'=>$rujukans->kode_surat,
        //     'tanggal_surat'=>$rujukans->tanggal_surat,
        //     'kepada'=>$rujukans->kepada,
        //     'nama'=>$rujukans->data_anak->nama_anak,
        //     'umur'=>$rujukans->umur,
        //     'alamat'=>$rujukans->alamat,
        //     'bb_turun'=>$rujukans->bb_turun,
        //     'bb_naik'=>$rujukans->bb_naik,
        //     'keluhan'=>$rujukans->keluhan,
        //     'keterangan_rujukan'=>$rujukans->keterangan_rujukan,


        // ]);
        // return $pdf->download('cetak.pdf');
    }
}
