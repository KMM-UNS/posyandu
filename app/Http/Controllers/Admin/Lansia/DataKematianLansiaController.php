<?php

namespace App\Http\Controllers\Admin\Lansia;

use App\Datatables\Admin\Lansia\DataKematianLansiaDataTable;
use App\Http\Controllers\Controller;
use App\Models\DataKematianLansia;
use App\Models\DataLansia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;

class DataKematianLansiaController extends Controller
{
    public function index(DataKematianLansiaDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.lansia.datakematian.index');
    }

    public function create()
    {
        $nama_lansia=DataLansia::pluck('nama_lansia','id');
        return view('pages.admin.lansia.datakematian.add-edit',['nama_lansia' =>  $nama_lansia]);
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama_jenazah' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            DataKematianLansia::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-lansia.datakematianlansia.index'))->withToastSuccess('Data tersimpan');
    }
    public function show()
    {
       //
    }
    public function edit($id)
    {
        $data = DataKematianLansia::findOrFail($id);
        $nama_lansia=DataLansia::pluck('nama_lansia','id');
        return view('pages.admin.lansia.datakematian.add-edit',['data'=>$data, 'nama_lansia' =>  $nama_lansia]);
    }
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama_lansia' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = DataKematianLansia::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-lansia.datakematianlansia.index'))->withToastSuccess('Data tersimpan');
    }
    public function destroy($id)
    {
        try {
            DataKematianLansia::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
    public function laporankematian(){
        return view('pages.admin.lansia.datakematian.laporankematian');
    }
    public function sortir(Request $request){
    
        $startDate = Str::before($request->tglawal, ' -');
        $endDate = Str::after($request->tglakhir, '- ');
        switch ($request->submit) {
            case 'table':

                $data = DataKematianLansia::all()
                    ->whereBetween('tgl_meninggal', [$startDate, $endDate]);
             
                return view('pages.admin.lansia.datakematian.laporankematian', compact( 'data', 'startDate', 'endDate'));
                break;
        }
    }
    public function cetakLaporanKematian($start, $end){

        $startDate = $start;
        $endDate =$end;
        $data = DataKematianLansia::get()
            ->whereBetween('tgl_meninggal', [$startDate, $endDate]);

        $pdf = PDF::loadview('pages.admin.lansia.datakematian.cetaklaporankematian',['data' =>$data]);
        return $pdf->download('Laporan Kematian Lansia.pdf');
    }
}
