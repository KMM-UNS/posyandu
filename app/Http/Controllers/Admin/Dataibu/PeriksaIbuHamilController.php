<?php

namespace App\Http\Controllers\Admin\Dataibu;

use App\Models\Status;
use App\Models\DataIbu;
use App\Models\Kader;
use App\Models\DaftarPenyakit;
use App\Models\DetailImunisasi;
use Illuminate\Http\Request;
use App\Models\PeriksaIbuHamil;
use App\Http\Controllers\Controller;
use App\Datatables\Admin\Dataibu\PeriksaIbuHamilDataTable;

class PeriksaIbuHamilController extends Controller
{
    public function index(PeriksaIbuHamilDataTable $dataTable)
    {
        // $imunisasi = DetailImunisasi::();
        return $dataTable->render('pages.admin.ibu.ibuhamil.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::select('id')->where('nama', 'Ibu Hamil')->first()->toArray();
        $kader = Kader::pluck('nama', 'id');
        $dataibu = DataIbu::where('status_id', $status)->pluck('nama', 'id');
        $datapenyakit = DaftarPenyakit::pluck('nama', 'id');
        $dataimunisasi = DetailImunisasi::pluck('tt_ke', 'id');
        return view('pages.admin.ibu.ibuhamil.add-edit', ['dataibu' => $dataibu, 'datapenyakit' => $datapenyakit, 'dataimunisasi' => $dataimunisasi, 'kader' => $kader]);
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
                'nama_id' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            PeriksaIbuHamil::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }
        return redirect(route('admin.data-ibu.ibuhamil.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PeriksaIbuHamil::with('data_imunisasi')->findOrFail($id);
        // dd($data->data_imunisasi);
        $dataibu = DataIbu::pluck('nama', 'id');
        $datapenyakit = DaftarPenyakit::pluck('nama', 'id');
        $dataimunisasi = DetailImunisasi::pluck('tt_ke', 'id');
        $kader = Kader::pluck('nama', 'id');
        return view('pages.admin.ibu.ibuhamil.show', ['data' => $data, 'dataibu' => $dataibu, 'datapenyakit' => $datapenyakit, 'dataimunisasi' => $dataimunisasi, 'kader' => $kader]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PeriksaIbuHamil::findOrFail($id);
        $dataibu = DataIbu::pluck('nama', 'id');
        $datapenyakit = DaftarPenyakit::pluck('nama', 'id');
        $kader = Kader::pluck('nama', 'id');
        $dataimunisasi = DetailImunisasi::pluck('tt_ke', 'id');
        return view('pages.admin.ibu.ibuhamil.add-edit', ['data' => $data,  'dataibu' => $dataibu, 'datapenyakit' => $datapenyakit, 'dataimunisasi' => $dataimunisasi, 'kader' => $kader]);
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
                'nama_id' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = PeriksaIbuHamil::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-ibu.ibuhamil.index'))->withToastSuccess('Data tersimpan');
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
            PeriksaIbuHamil::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
