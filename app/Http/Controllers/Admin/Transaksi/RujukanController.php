<?php

namespace App\Http\Controllers\Admin\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rujukan;
use App\Models\DataAnak;
use App\Models\Instansi;
use App\Datatables\Admin\Transaksi\RujukanDataTable;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;
// use AutoNumberTrait;

class RujukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RujukanDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.transaksi.rujukan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //     $kode_surat = Rujukan::create([
    //         'kode_surat' => '',
    //         'tanggal_surat' => '',
    //         'kepada' => '',
    //         'nama' => '',
    //         'umur' => '',
    //         'alamat' => '',
    //         'bb_turun' => '',
    //         'bb_naik' => '',
    //         'keluhan' => '',
    //         'keterangan_rujukan' => '',
    //         'status' => '',
    //             ]);
    // echo $kode_surat->kode_surat;

        // $imunisasi=Imunisasi::pluck('nama_anak_id','id');
        $dataanak=DataAnak::pluck('nama_anak','id');
        $instansi=Instansi::pluck('nama_instansi','id');
        return view('pages.admin.transaksi.rujukan.add-edit', ['dataanak'=>$dataanak, 'instansi'=>$instansi]);
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
                'nama' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            Rujukan::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-transaksi.rujukan.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $imunisasi=Imunisasi::pluck('nama','id');
        // $data=DataAnak::pluck('nama_anak','id');
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
        return $pdf->download('rujukan.pdf');
        // return view('pages.admin.transaksi.rujukan.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $imunisasi=Imunisasi::pluck('nama','id');
        $dataanak=DataAnak::pluck('nama_anak','id');
        $instansi=Instansi::pluck('nama_instansi','id');
        $data = Rujukan::findOrFail($id);
        return view('pages.admin.transaksi.rujukan.add-edit', ['data' => $data, 'dataanak'=>$dataanak, 'instansi'=>$instansi]);
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
                'nama' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = Rujukan::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-transaksi.rujukan.index'))->withToastSuccess('Data tersimpan');
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
            Rujukan::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }

    public function laporan(){
        return view('pages.admin.transaksi.rujukan.laporanrujukananak');
    }

    public function sortir(Request $request){

        $startDate = Str::before($request->tglawal, ' -');
        $endDate = Str::after($request->tglakhir, '- ');
        switch ($request->submit) {
            case 'table':

                $data = Rujukan::all()
                    ->whereBetween('tanggal_surat', [$startDate, $endDate]);

                return view('pages.admin.transaksi.rujukan.laporanrujukananak', compact( 'data', 'startDate', 'endDate'));
                break;
        }
    }

    public function cetak($start, $end){

        $startDate = $start;
        $endDate =$end;
        $data = Rujukan::get()
            ->whereBetween('tanggal_surat', [$startDate, $endDate]);

        $pdf = PDF::loadview('pages.admin.transaksi.rujukan.cetaklaporanrujukan',['data' =>$data]);
        return $pdf->download('Laporan Rujukan Anak.pdf');
    }

    public function status($id)
    {
        $datarujukan = Rujukan::find($id);
        $datarujukan->status = !$datarujukan->status;
        $datarujukan->save();
        return redirect()->back();
    }
}
