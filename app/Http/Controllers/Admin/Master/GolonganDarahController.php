<?php

namespace App\Http\Controllers\Admin\Master;

use App\Datatables\Admin\Master\GolonganDarahDataTable;
use App\Http\Controllers\Controller;
use App\Models\GolonganDarah;
use Illuminate\Http\Request;

class GolonganDarahController extends Controller
{
    public function index(GolonganDarahDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.golda.index');
    }

    public function create()
    {
        return view('pages.admin.master.golda.add-edit');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            GolonganDarah::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.golda.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = GolonganDarah::findOrFail($id);
        return view('pages.admin.master.golda.add-edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama' => 'required'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = GolonganDarah::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.golda.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            GolonganDarah::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
