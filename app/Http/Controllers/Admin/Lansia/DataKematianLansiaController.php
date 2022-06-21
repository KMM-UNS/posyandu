<?php

namespace App\Http\Controllers\Admin\Lansia;

use App\Datatables\Admin\Lansia\DataKematianLansiaDataTable;
use App\Http\Controllers\Controller;
use App\Models\DataKematianLansia;
use App\Models\DataLansia;
use Illuminate\Http\Request;

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

    public function cetakLaporanKematian($tglawal, $tglakhir){
        //dd(["Tanggal Awal :".$tglawal, "Tanggal Akhir :".$tglakhir]); 

        $cetakdatakematian = DataKematianLansia::whereBetween('tgl_meninggal',[$tglawal, $tglakhir])->latest()->get();
        return view('pages.admin.lansia.datakematian.cetaklaporankematian',compact('cetakdatakematian'));
        // $cetaklaporankematian = DataKematianLansia::whereBetween('tgl_meninggal',[$tglawal, $tglakhir]);
        // return view('pages.admin.lansia.datakematian.cetaklaporankematian',compact('cetaklaporankematian'));
    }
}
