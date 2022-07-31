<?php

namespace App\Http\Controllers\admin\Anak;

use App\Datatables\Admin\Anak\ImunisasiDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Imunisasi;
use App\Models\JenisVaksin;
use App\Models\DataAnak;
use App\Models\VitaminAnak;
use App\Models\Kader;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
use Illuminate\Support\Str;

class ImunisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ImunisasiDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.anak.imunisasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisvaksin=JenisVaksin::pluck('vaksin','id');
        $dataanak=DataAnak::pluck('nama_anak','id');
        $vitaminanak=VitaminAnak::pluck('nama_vitamin','id');
        $kader=Kader::pluck('nama','id');
        return view('pages.admin.anak.imunisasi.add-edit',['jenisvaksin'=>$jenisvaksin,
        'dataanak'=>$dataanak,'vitaminanak'=>$vitaminanak,'kader'=>$kader]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $request->validate([
                'nama_anak_id' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }
        DB::transaction(function () use ($request) {

        try {


            $imunisasi=Imunisasi::create($request->all());
            if($request->jenis_vaksin == null){
                $imunisasi->jenis_vaksin = 0;
            } else {
                $imunisasi->jenis_vaksin = $request->jenis_vaksin;
            }
            // $imunisasi->save();
        if ($imunisasi->jenis_vaksin !=0){ // -> karena jenis vaksin di imunisasi di isi kosong
            $jenisvaksin = JenisVaksin::where('id', $imunisasi->jenis_vaksin)->first();
            // dd($jenisvaksin);
            if($jenisvaksin->stok > 0){
                // $jenisvaksin->stok >= $imunisasi->jenis_vaksin;
                $jenisvaksin->stok = $jenisvaksin->stok - 1;
                $jenisvaksin->save();
            }
            else {
            //     // DB::rollBack();

            //     $jenisvaksin->save();
            //     return back()->withInput()->withToastError('Stok Habis');
            // }
            $imunisasi->jenis_vaksin = 0;
            $imunisasi->save();
            }
        }
        } catch (\Throwable $th) {
            // dd($th);
            DB::rollBack();
            // dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }
    });

        return redirect(route('admin.anak-data.imunisasi.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenisvaksin=JenisVaksin::pluck('vaksin','id');
        $dataanak=DataAnak::pluck('nama_anak','id');
        $vitaminanak=VitaminAnak::pluck('nama_vitamin','id');
        $kader= Kader::pluck('nama','id');
        $data = Imunisasi::findOrFail($id);
        return view('pages.admin.anak.imunisasi.show', ['data' => $data,'jenisvaksin'=>$jenisvaksin,
        'dataanak'=>$dataanak, 'vitaminanak'=>$vitaminanak,'kader'=>$kader]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenisvaksin=JenisVaksin::pluck('vaksin','id');
        $dataanak=DataAnak::pluck('nama_anak','id');
        $vitaminanak=VitaminAnak::pluck('nama_vitamin','id');
        $kader=Kader::pluck('nama','id');
        $data = Imunisasi::findOrFail($id);
        return view('pages.admin.anak.imunisasi.add-edit', ['data' => $data,'jenisvaksin'=>$jenisvaksin,
        'dataanak'=>$dataanak, 'vitaminanak'=>$vitaminanak,'kader'=>$kader]);
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
                'nama_anak_id' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = Imunisasi::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.anak-data.imunisasi.index'))->withToastSuccess('Data tersimpan');

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
            Imunisasi::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
        // dd($id);
    }

    public function laporan(){
        return view('pages.admin.anak.imunisasi.laporanimunisasi');
    }

    public function sortir(Request $request){

        $startDate = Str::before($request->tglawal, ' -');
        $endDate = Str::after($request->tglakhir, '- ');
        switch ($request->submit) {
            case 'table':

                $data = Imunisasi::all()
                    ->whereBetween('tanggal_imunisasi', [$startDate, $endDate]);

                return view('pages.admin.anak.imunisasi.laporanimunisasi', compact( 'data', 'startDate', 'endDate'));
                break;
        }
    }

    public function cetak($start, $end){
        $startDate = $start;
        $endDate =$end;
        $data = Imunisasi::get()
            ->whereBetween('tanggal_imunisasi', [$startDate, $endDate]);
        $pdf = PDF::loadview('pages.admin.anak.imunisasi.cetaklaporanimunisasi',['data' =>$data]);
        $pdf->setpaper('letter', 'landscape');
        return $pdf->download('Laporan Imunisasi.pdf');
    }
}
