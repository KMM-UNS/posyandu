<?php

namespace App\Http\Controllers\Admin\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RujukanLansia;
use App\Datatables\Admin\Transaksi\RujukanLansiaDataTable;
//use PhpOffice\PhpWord\Writer\PDF;
use App\Models\DataLansia;
use Barryvdh\DomPDF\Facade\Pdf;

class RujukanLansiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RujukanLansiaDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.transaksi.rujukanlansia.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nama_lansia=DataLansia::pluck('nama_lansia','id');
        return view('pages.admin.transaksi.rujukanlansia.add-edit',['nama_lansia'=>$nama_lansia]);
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
                'namalansia' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            RujukanLansia::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-transaksi.rujukanlansia.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = RujukanLansia::findOrFail($id);
        
        // return view('pages.admin.transaksi.rujukanlansia.showrujukanlansia-pdf', ['data' => $data]);
        $pdf = PDF::loadview('pages.admin.transaksi.rujukanlansia.showrujukanlansia-pdf',
        [
            'no_surat'=>$data->no_surat,
            'kepada'=>$data->kepada,
            'tanggal_surat'=>$data->tanggal_surat,
            'namalansia'=>$data->namalansia,
            'umur'=>$data->umur,
            'jeniskelamin'=>$data->jeniskelamin,
            'alamat'=>$data->alamat,
            'keluhan'=>$data->keluhan,
        ]);
        return $pdf->download('Rujukan.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = RujukanLansia::findOrFail($id);
        $nama_lansia=DataLansia::pluck('nama_lansia','id');
        return view('pages.admin.transaksi.rujukanlansia.add-edit', ['data' => $data,'nama_lansia'=>$nama_lansia]);
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
            $data = RujukanLansia::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-transaksi.rujukanlansia.index'))->withToastSuccess('Data tersimpan');
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
            RujukanLansia::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }

    // public function exportpdf(){
    //     $data = rujukan_lansia::all();

    //     view()->share('data', $data);
    //     $pdf = PDF::loadview('rujukanlansia-pdf');
    //     return $pdf->download('Rujukan.pdf');

    // }
}
