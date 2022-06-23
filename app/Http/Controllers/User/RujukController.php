<?php

namespace App\Http\Controllers\user;

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

    public function show($id)
    {
        $data = DataAnak::findOrFail($id);
        $rujukans = Rujukan::where('nama',$id)->get();
        // dd($rujukans);
        return view('pages.user.anak.rujuk.show', ['data' => $data, 'rujukan' => $rujukans]);

    }

    // public function cetak($id)
    // {
    //     $rujukan = Rujukan::findOrFail($id);
    //     $rujukan = Rujukan::where('createable_id', auth()->user()->id)->where('createable_type', 'App\Models\User')->findOrFail($id);
    //     $pdf = PDF::loadview('pages.admin.transaksi.rujukan.showrujukan-pdf', [
    //         'rujukan' => $rujukan
    //     ]);
    //     return $pdf->download('cetak.pdf');
    // }
}
