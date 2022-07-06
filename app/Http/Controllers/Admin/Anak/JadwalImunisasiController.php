<?php

namespace App\Http\Controllers\Admin\Anak;

use App\Datatables\Admin\Anak\JadwalImunisasiDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalImunisasi;
use App\Models\Kader;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

class JadwalImunisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(JadwalImunisasiDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.anak.jadwalimunisasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kader=Kader::pluck('nama','id');
        return view('pages.admin.anak.jadwalimunisasi.add-edit', ['kader'=>$kader]);
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
                'tanggal' => 'required|min:3'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            JadwalImunisasi::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.anak-data.jadwalkegiatan.index'))->withToastSuccess('Data tersimpan');

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
        $data = JadwalImunisasi::findOrFail($id);
        $kader=Kader::pluck('nama','id');
        return view('pages.admin.anak.jadwalimunisasi.add-edit', ['data' => $data, 'kader'=>$kader]);

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
                'tanggal' => 'required|min:3'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = JadwalImunisasi::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.anak-data.jadwalkegiatan.index'))->withToastSuccess('Data tersimpan');
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
            JadwalImunisasi::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }

    public function laporan(){
        return view('pages.admin.anak.jadwalimunisasi.laporankegiatan');
    }

    public function sortir(Request $request){

        $startDate = Str::before($request->tglawal, ' -');
        $endDate = Str::after($request->tglakhir, '- ');
        switch ($request->submit) {
            case 'table':

                $data = JadwalImunisasi::all()
                    ->whereBetween('tanggal', [$startDate, $endDate]);

                return view('pages.admin.anak.jadwalimunisasi.laporankegiatan', compact( 'data', 'startDate', 'endDate'));
                break;
        }
    }

    public function cetak($start, $end){

        $startDate = $start;
        $endDate =$end;
        $data = JadwalImunisasi::get()
            ->whereBetween('tanggal', [$startDate, $endDate]);

        $pdf = PDF::loadview('pages.admin.anak.jadwalimunisasi.cetaklaporankegiatan',['data' =>$data]);
        return $pdf->download('Laporan Kegiatan.pdf');
    }
}
