<?php

namespace App\Http\Controllers\Admin\DataIbu;

use App\Models\Status;
use App\Models\DataIbu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IbuNifasPeriksa;
use App\Models\TenagaKesehatan;
use App\Datatables\Admin\Dataibu\IbuNifasPeriksaDataTable;

class IbuNifasPeriksaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IbuNifasPeriksaDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.ibu.periksaibunifas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::select('id')->where('nama', 'Ibu Nifas')->first()->toArray();
        $dataibu = DataIbu::where('status_id', $status)->pluck('nama', 'id');
        $datatenaga = TenagaKesehatan::pluck('nama', 'id');
        return view('pages.admin.ibu.periksaibunifas.add-edit', ['dataibu' => $dataibu, 'status' => $status, 'datatenaga' => $datatenaga]);
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
            IbuNifasPeriksa::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-ibu.ibunifasperiksa.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = IbuNifasPeriksa::findOrFail($id);
        $dataibu = DataIbu::pluck('nama', 'id');
        $datatenaga = TenagaKesehatan::pluck('nama', 'id');
        return view('pages.admin.ibu.periksaibunifas.show', ['data' => $data, 'dataibu' => $dataibu, 'datatenaga' => $datatenaga]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = IbuNifasPeriksa::findOrFail($id);
        $dataibu = DataIbu::pluck('nama', 'id');
        $datatenaga = TenagaKesehatan::pluck('nama', 'id');
        return view('pages.admin.ibu.periksaibunifas.add-edit', ['data' => $data, 'dataibu' => $dataibu, 'datatenaga' => $datatenaga]);
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
            $data = IbuNifasPeriksa::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-ibu.ibunifasperiksa.index'))->withToastSuccess('Data tersimpan');
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
            IbuNifasPeriksa::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
