<?php

namespace App\Http\Controllers\Admin\Lansia;

use App\Datatables\Admin\Lansia\PantauanKMSDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PantauanKMS;
use App\Models\DataLansia;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;


class PantauanKMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PantauanKMSDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.lansia.pantauan-kms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nama_lansia=DataLansia::pluck('nama_lansia','id');
        return view('pages.admin.lansia.pantauan-kms.add-edit',['nama_lansia' =>  $nama_lansia]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama_lansia1' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            PantauanKMS::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-lansia.pantauankms.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('pages.admin.lansia.pantauan-kms.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $data = PantauanKMS::findOrFail($id);
        $nama_lansia=DataLansia::pluck('nama_lansia','id');

        return view('pages.admin.lansia.pantauan-kms.add-edit', ['data' => $data, 'nama_lansia' => $nama_lansia]);
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
        try {
            $request->validate([
                'nama_lansia1' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = PantauanKMS::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-lansia.pantauankms.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            PantauanKMS::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }

    //cetak pertanggal
    public function laporanKMS(){
        return view('pages.admin.lansia.pantauan-kms.laporanKMS');
    }

    public function sortir(Request $request){
    
        $startDate = Str::before($request->tglawal, ' -');
        $endDate = Str::after($request->tglakhir, '- ');
        switch ($request->submit) {
            case 'table':

                $data = PantauanKMS::all()
                    ->whereBetween('tanggal_pemeriksaan', [$startDate, $endDate]);
             
                return view('pages.admin.lansia.pantauan-kms.laporanKMS', compact( 'data', 'startDate', 'endDate'));
                break;
        }
    }

    public function cetakLaporanKMS($start, $end){
        $startDate = $start;
        $endDate =$end;
        $data = PantauanKMS::get()
            ->whereBetween('tanggal_pemeriksaan', [$startDate, $endDate]);

        $pdf = PDF::loadview('pages.admin.lansia.pantauan-kms.cetaklaporankms',['data' =>$data]);
        return $pdf->download('Laporan KMS Lansia.pdf'); 
    }

    //cetak pernama
    public function laporanDataKMS(){
        $nama_lansia=DataLansia::pluck('nama_lansia','id');
        //$nama_lansia=PantauanKMS::with('lansia')->get()->pluck('lansia.nama_lansia','id');
        return view('pages.admin.lansia.pantauan-kms.laporandataKMS', ['nama_lansia'=> $nama_lansia]);
    }

    public function sortirriwayat(Request $request){
        $data = PantauanKMS::where('nama_lansia1', $request->nama_lansia1)->get();
        // dd($data);
        return redirect()->route('admin.data-lansia.laporandatakmslansia')->with(['data' => $data]);
    }
    public function cetakLaporandataKMS($id){

        $data = PantauanKMS::where('nama_lansia1', $id)->get();
        $pdf = PDF::loadview('pages.admin.lansia.pantauan-kms.cetaklaporankms',['data' =>$data]);
        return $pdf->download('Laporan KMS Lansia.pdf'); 
        
    }

}