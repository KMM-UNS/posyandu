<?php

namespace App\Http\Controllers\Admin\Master;

use App\Datatables\Admin\Master\InstansiDataTable;
use App\Http\Controllers\Controller;
use App\Models\Instansi;
use Illuminate\Http\Request;


class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(InstansiDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.instansi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.master.instansi.add-edit');
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama_instansi' => 'required|min:3'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            Instansi::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.instansi.index'))->withToastSuccess('Data tersimpan');
    }
    public function edit($id)
    {
        $data = Instansi::findOrFail($id);
        return view('pages.admin.master.instansi.add-edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama_instansi' => 'required|min:3'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = Instansi::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.instansi.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            Instansi::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}

