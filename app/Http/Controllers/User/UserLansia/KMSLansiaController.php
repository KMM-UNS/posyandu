<?php

namespace App\Http\Controllers\User\UserLansia;

use App\Datatables\User\Lansia\KMSLansiaDataTable;
use App\Datatables\User\Lansia\RiwayatKeluhanTindakanDataTable;
use App\Models\PantauanKMS;
use App\Http\Controllers\Controller;
use App\Models\DataLansia;
use App\Models\Kader;
use App\Models\KeluhanTindakan;
use yajra\DataTables\Facades\DataTables;
use App\Charts\IMTChart;
use Illuminate\Http\Request;

class KMSLansiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(KMSLansiaDataTable $dataTable, IMTChart $chart)
    {
        // if ($request->ajax()) {
        //     $query = PantauanKMS::with(['lansia']);

        //     return DataTables::of($query)
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }


        $data = DataLansia::select('id')->where('createable_id', auth()->user()->id)->first()->id;
        // $kader = Kader::select('id')->where('createable_id', auth()->user()->id)->first()->id;
        // $kmslansia = PantauanKMS::with(['lansia']);
        // $keluhantindakan = KeluhanTindakan::with(['lansia', 'kader']);
        // $kmslansia = PantauanKMS::where('nama_lansia1', $data)->get();
        $keluhan_tindakans = KeluhanTindakan::where('nama_lansia_id', $data)->get();


        // return view('pages.user.lansia.kmslansia.index');

        // $data = DataLansia::select('id')->where('createable_id', auth()->user()->id)->first()->id;
        // $kmslansia = PantauanKMS::where('nama_lansia1', $data)->get();
        $data = [
            'keluhan_tindakans' => $keluhan_tindakans
        ];

        // return DataTables::of($kmslansia)->view('pages.user.lansia.kmslansia.index');
        return $dataTable->render('pages.user.lansia.kmslansia.index', $data , ['chart' => $chart->build()]);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }
}
