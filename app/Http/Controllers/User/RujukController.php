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
        $dataanak = DataAnak::select('id')->where('createable_id', auth()->user()->id)->first();
        if($dataanak != null){
            $rujukans = Rujukan::where('nama', $dataanak->id, auth()->user()->id)->get();
        } else {
            $rujukans = Rujukan::where('nama', $dataanak, auth()->user()->id)->get();
        }
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
        'kepada'=>$data->instansi->nama_instansi,
        'nama'=>$data->data_anak->nama_anak,
        'umur'=>$data->umur,
        'alamat'=>$data->alamat,
        'bb_turun'=>$data->bb_turun,
        'bb_naik'=>$data->bb_naik,
        'keluhan'=>$data->keluhan,
        'keterangan_rujukan'=>$data->keterangan_rujukan,

        ]);
        return $pdf->download('cetak.pdf');
    }
}
