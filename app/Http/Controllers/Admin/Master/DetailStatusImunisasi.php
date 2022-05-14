<?php

namespace App\Http\Controllers\Admin\Master;

use App\Datatables\Admin\Master\DetailstatusImunisasiDataTable;
use App\Http\Controllers\Controller;
use App\Models\DetailImunisasi;
use Illuminate\Http\Request;

class DetailStatusImunisasi extends Controller
{
    public function index(DetailstatusImunisasiDataTable $dataTable)
    {

        return $dataTable->render('pages.admin.master.detailimunisasi.index');
    }

    public function create()
    {
        return view('pages.admin.master.detailimunisasi.add-edit');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'selang_waktu' => 'required'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            DetailImunisasi::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.detailimunisasi.index'))->withToastSuccess('Data tersimpan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = DetailImunisasi::findOrFail($id);
        return view('pages.admin.master.detailimunisasi.add-edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'selang_waktu' => 'required|min:3'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = DetailImunisasi::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.detailimunisasi.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            DetailImunisasi::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
