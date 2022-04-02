<?php

namespace App\Http\Controllers\Admin\Dataibu;

use App\Datatables\Admin\Dataibu\DataIbuDataTable;
use App\Http\Controllers\Controller;
use App\Models\DataIbu;
use App\Models\GolonganDarah;
use Illuminate\Http\Request;

class DataIbuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DataIbuDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.ibu.dataibu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $golda = GolonganDarah::pluck('nama');
        return view('pages.admin.ibu.dataibu.add-edit', ['golda' => $golda]);
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
                'nama' => 'required|min:3'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            DataIbu::create($request->all());
        } catch (\Throwable $th) {

            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-ibu.dataibu.index'))->withToastSuccess('Data tersimpan');
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
        $data = DataIbu::findOrFail($id);
        $golda = GolonganDarah::pluck('nama');
        return view('pages.admin.ibu.dataibu.add-edit', ['data' => $data, 'golda' => $golda]);
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
                'nama' => 'required|min:3'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = DataIbu::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-ibu.dataibu.index'))->withToastSuccess('Data tersimpan');
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
            DataIbu::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
