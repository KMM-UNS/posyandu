<?php

namespace App\Http\Controllers\Admin\DataIbu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IbuHamilPeriksa;
use App\Models\DataIbu;
use App\Models\TenagaKesehatan;
use App\Models\Status;
use App\Datatables\Admin\Dataibu\IbuHamilPeriksaDataTable;

class IbuHamilPeriksaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IbuHamilPeriksaDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.ibu.periksaibuhamil.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::select('id')->where('nama', 'Ibu Hamil')->first()->toArray();
        $dataibu = DataIbu::where('status_id', $status)->pluck('nama', 'id');
        $datatenaga = TenagaKesehatan::pluck('nama', 'id');
        return view('pages.admin.ibu.periksaibuhamil.add-edit', ['dataibu' => $dataibu, 'datatenaga' => $datatenaga]);
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
            IbuHamilPeriksa::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-ibu.ibuhamilperiksa.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = IbuHamilPeriksa::findOrFail($id);
        $dataibu = DataIbu::pluck('nama', 'id');
        $datatenaga = TenagaKesehatan::pluck('nama', 'id');
        return view('pages.admin.ibu.periksaibuhamil.show', ['data' => $data, 'dataibu' => $dataibu, 'datatenaga' => $datatenaga]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = IbuHamilPeriksa::findOrFail($id);
        $status = Status::select('id')->where('nama', 'Ibu Hamil')->first()->toArray();
        $dataibu = DataIbu::where('status_id', $status)->pluck('nama', 'id');
        $datatenaga = TenagaKesehatan::pluck('nama', 'id');
        return view('pages.admin.ibu.periksaibuhamil.add-edit', ['data' => $data, 'dataibu' => $dataibu, 'datatenaga' => $datatenaga]);
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
            $data = IbuHamilPeriksa::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-ibu.ibuhamilperiksa.index'))->withToastSuccess('Data tersimpan');
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
            IbuHamilPeriksa::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
