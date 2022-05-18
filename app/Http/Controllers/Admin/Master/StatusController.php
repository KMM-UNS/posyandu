<?php

<<<<<<<< HEAD:app/Http/Controllers/Admin/Anak/VitaminAnakController.php
namespace App\Http\Controllers\admin\anak;

use App\Datatables\Admin\Anak\VitaminAnakDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VitaminAnak;

class VitaminAnakController extends Controller
========
namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Status;
use App\Datatables\Admin\Master\StatusDataTable;

class StatusController extends Controller
>>>>>>>> 2c5fdcdb0465bb80ea204f1c599c47ec8a4c99c3:app/Http/Controllers/Admin/Master/StatusController.php
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<<< HEAD:app/Http/Controllers/Admin/Anak/VitaminAnakController.php
    public function index(VitaminAnakDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.anak.vitaminanak.index');

========
    public function index(StatusDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.status.index');
>>>>>>>> 2c5fdcdb0465bb80ea204f1c599c47ec8a4c99c3:app/Http/Controllers/Admin/Master/StatusController.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<<< HEAD:app/Http/Controllers/Admin/Anak/VitaminAnakController.php
        return view('pages.admin.anak.vitaminanak.add-edit');
========
        return view('pages.admin.master.status.add-edit');
>>>>>>>> 2c5fdcdb0465bb80ea204f1c599c47ec8a4c99c3:app/Http/Controllers/Admin/Master/StatusController.php
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
<<<<<<<< HEAD:app/Http/Controllers/Admin/Anak/VitaminAnakController.php
                'nama_vitamin' => 'required|min:3'
========
                'nama' => 'required|min:3'
>>>>>>>> 2c5fdcdb0465bb80ea204f1c599c47ec8a4c99c3:app/Http/Controllers/Admin/Master/StatusController.php
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
<<<<<<<< HEAD:app/Http/Controllers/Admin/Anak/VitaminAnakController.php
            VitaminAnak::create($request->all());
========
            Status::create($request->all());
>>>>>>>> 2c5fdcdb0465bb80ea204f1c599c47ec8a4c99c3:app/Http/Controllers/Admin/Master/StatusController.php
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

<<<<<<<< HEAD:app/Http/Controllers/Admin/Anak/VitaminAnakController.php
        return redirect(route('admin.anak-data.vitaminanak.index'))->withToastSuccess('Data tersimpan');


========
        return redirect(route('admin.master-data.status.index'))->withToastSuccess('Data tersimpan');
>>>>>>>> 2c5fdcdb0465bb80ea204f1c599c47ec8a4c99c3:app/Http/Controllers/Admin/Master/StatusController.php
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
<<<<<<<< HEAD:app/Http/Controllers/Admin/Anak/VitaminAnakController.php
        $data = VitaminAnak::findOrFail($id);
        return view('pages.admin.anak.vitaminanak.add-edit', ['data' => $data]);
========
        $data = Status::findOrFail($id);
        return view('pages.admin.master.status.add-edit', ['data' => $data]);
>>>>>>>> 2c5fdcdb0465bb80ea204f1c599c47ec8a4c99c3:app/Http/Controllers/Admin/Master/StatusController.php
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
<<<<<<<< HEAD:app/Http/Controllers/Admin/Anak/VitaminAnakController.php
                'nama_vitamin' => 'required|min:3'
========
                'nama' => 'required|min:3'
>>>>>>>> 2c5fdcdb0465bb80ea204f1c599c47ec8a4c99c3:app/Http/Controllers/Admin/Master/StatusController.php
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
<<<<<<<< HEAD:app/Http/Controllers/Admin/Anak/VitaminAnakController.php
            $data = VitaminAnak::findOrFail($id);
========
            $data = Status::findOrFail($id);
>>>>>>>> 2c5fdcdb0465bb80ea204f1c599c47ec8a4c99c3:app/Http/Controllers/Admin/Master/StatusController.php
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

<<<<<<<< HEAD:app/Http/Controllers/Admin/Anak/VitaminAnakController.php
        return redirect(route('admin.anak-data.vitaminanak.index'))->withToastSuccess('Data tersimpan');
========
        return redirect(route('admin.master-data.status.index'))->withToastSuccess('Data tersimpan');
>>>>>>>> 2c5fdcdb0465bb80ea204f1c599c47ec8a4c99c3:app/Http/Controllers/Admin/Master/StatusController.php
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
<<<<<<<< HEAD:app/Http/Controllers/Admin/Anak/VitaminAnakController.php
            VitaminAnak::find($id)->delete();
========
            Status::find($id)->delete();
>>>>>>>> 2c5fdcdb0465bb80ea204f1c599c47ec8a4c99c3:app/Http/Controllers/Admin/Master/StatusController.php
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
