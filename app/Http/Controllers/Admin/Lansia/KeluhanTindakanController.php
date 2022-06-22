<?php

namespace App\Http\Controllers\Admin\Lansia;

use App\Datatables\Admin\Lansia\KeluhanTindakanDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KeluhanTindakan;
use App\Models\DataLansia;
use App\Models\Kader;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;


class KeluhanTindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(KeluhanTindakanDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.lansia.keluhan-tindakan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nama_lansia=DataLansia::pluck('nama_lansia','id');
        $kaderid=Kader::pluck('nama','id');
        return view('pages.admin.lansia.keluhan-tindakan.add-edit', ['nama_lansia' =>  $nama_lansia, 'kaderid' => $kaderid ]);
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
                'nama_lansia_id' => 'required|min:1'
            ]);
         }   
        catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            KeluhanTindakan::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-lansia.keluhantindakan.index'))->withToastSuccess('Data tersimpan');
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
        $data = KeluhanTindakan::findOrFail($id);
        $nama_lansia=DataLansia::pluck('nama_lansia','id');
        $kaderid=Kader::pluck('nama','id');
        return view('pages.admin.lansia.keluhan-tindakan.add-edit',
        ['data' => $data, 'nama_lansia' => $nama_lansia, 'kaderid' => $kaderid]);
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
                'nama_lansia_id' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = KeluhanTindakan::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-lansia.keluhantindakan.index'))->withToastSuccess('Data tersimpan');
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
            KeluhanTindakan::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }

    public function laporanKeluhanTindakan(){
        return view('pages.admin.lansia.keluhan-tindakan.laporankeluhantindakan');
    }

    public function sortir(Request $request){
    
        $startDate = Str::before($request->tglawal, ' -');
        $endDate = Str::after($request->tglakhir, '- ');
        switch ($request->submit) {
            case 'table':

                $data = KeluhanTindakan::all()
                    ->whereBetween('tanggal_pemeriksaan', [$startDate, $endDate]);
             
                return view('pages.admin.lansia.keluhan-tindakan.laporankeluhantindakan', compact( 'data', 'startDate', 'endDate'));
                break;
        }
    }

    public function cetakLaporanKeluhanTindakan($start, $end){
        //dd(["Tanggal Awal :".$tglawal, "Tanggal Akhir :".$tglakhir]); 
        $startDate = $start;
        $endDate =$end;
        $data = KeluhanTindakan::get()
            ->whereBetween('tanggal_pemeriksaan', [$startDate, $endDate]);

         $pdf = PDF::loadview('pages.admin.lansia.keluhan-tindakan.cetakkeluhantindakan',['data' =>$data]);
         return $pdf->download('Laporan Keluhan dan Tindakan Lansia.pdf');
      
       
    }
}
