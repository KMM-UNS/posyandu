<?php

namespace App\Http\Controllers\Admin\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rujukan;
use App\Datatables\Admin\Transaksi\RujukanDataTable;
use Barryvdh\DomPDF\Facade\Pdf;

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
        return view('pages.admin.transaksi.rujukan.add-edit');
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
                'kode_surat' => 'required|min:1'
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
        $data = Rujukan::findOrFail($id);
        $pdf = PDF::loadview('pages.admin.transaksi.rujukan.showrujukan-pdf',
        [
        'kode_surat'=>$data->kode_surat,
        'tanggal_surat'=>$data->tanggal_surat,
        'kepada'=>$data->kepada,
        'nama'=>$data->nama,
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
        $data = Rujukan::findOrFail($id);
        return view('pages.admin.transaksi.rujukan.add-edit', ['data' => $data]);
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
                'kode_surat' => 'required|min:1'
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
}
