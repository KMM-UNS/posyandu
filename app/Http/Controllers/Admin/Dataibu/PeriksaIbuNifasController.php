<?php

namespace App\Http\Controllers\Admin\Dataibu;

use App\Models\Status;
use App\Models\DataIbu;
use App\Models\Kader;
use Illuminate\Http\Request;
use App\Models\GolonganDarah;
use App\Models\PeriksaIbuNifas;
// use App\Models\Vitamin;
use App\Http\Controllers\Controller;
use App\Datatables\Admin\Dataibu\PeriksaIbuNifasDataTable;

class PeriksaIbuNifasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PeriksaIbuNifasDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.ibu.ibunifas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $golda = GolonganDarah::pluck('nama', 'id');
        $kader = Kader::pluck('nama', 'id');
        $status = Status::select('id')->where('nama', 'Ibu Nifas')->first()->toArray();
        $dataibu = DataIbu::where('status_id', $status)->pluck('nama', 'id');
        return view('pages.admin.ibu.ibunifas.add-edit', ['golda' => $golda, 'dataibu' => $dataibu, 'status' => $status, 'kader' => $kader]);
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
            PeriksaIbuNifas::create($request->all());
        } catch (\Throwable $th) {

            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-ibu.ibunifas.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PeriksaIbuNifas::findOrFail($id);
        $golda = GolonganDarah::pluck('nama', 'id');
        $dataibu = DataIbu::pluck('nama', 'id');
        $kader = Kader::pluck('nama', 'id');
        return view('pages.admin.ibu.ibunifas.show', ['data' => $data, 'golda' => $golda, 'dataibu' => $dataibu, 'kader' => $kader]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PeriksaIbuNifas::findOrFail($id);
        $golda = GolonganDarah::pluck('nama', 'id');
        $dataibu = DataIbu::pluck('nama', 'id');
        $kader = Kader::pluck('nama', 'id');
        return view('pages.admin.ibu.ibunifas.add-edit', ['data' => $data, 'golda' => $golda, 'dataibu' => $dataibu, 'kader' => $kader]);
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
            $data = PeriksaIbuNifas::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-ibu.ibunifas.index'))->withToastSuccess('Data tersimpan');
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
            PeriksaIbuNifas::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
