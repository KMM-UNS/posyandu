<?php

namespace App\Http\Controllers\Admin\Master;

use App\Datatables\Admin\Master\JaminanKesehatanDataTable;
use App\Http\Controllers\Controller;
use App\Models\JaminanKesehatan;
use Illuminate\Http\Request;

class JaminanKesehatanController extends Controller
{
    public function index(JaminanKesehatanDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.jaminankesehatan.index');
    }

    public function create()
    {
        return view('pages.admin.master.jaminankesehatan.add-edit');
    }

    public function store(Request $request)
    {  
        try {
            $request->validate([
                'jaminan_kesehatan_id' => 'required'
            ]);
          
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            JaminanKesehatan::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.jaminankesehatan.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = JaminanKesehatan::findOrFail($id);
        return view('pages.admin.master.jaminankesehatan.add-edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'jaminan_kesehatan_id' => 'required'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = JaminanKesehatan::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.jaminankesehatan.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            JaminanKesehatan::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
