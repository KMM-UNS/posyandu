<?php

namespace App\Http\Controllers\admin\Anak;

use App\Datatables\Admin\Anak\ImunisasiDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Imunisasi;
use App\Models\JenisVaksin;
use App\Models\DataAnak;
use App\Models\VitaminAnak;

class ImunisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ImunisasiDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.anak.imunisasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisvaksin=JenisVaksin::pluck('vaksin','id');
        $dataanak=DataAnak::pluck('nama_anak','id');
        $vitaminanak=VitaminAnak::pluck('nama_vitamin','id');
        return view('pages.admin.anak.imunisasi.add-edit',['jenisvaksin'=>$jenisvaksin,
        'dataanak'=>$dataanak,'vitaminanak'=>$vitaminanak]);
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
                'nama_anak_id' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            Imunisasi::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.anak-data.imunisasi.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenisvaksin=JenisVaksin::pluck('vaksin','id');
        $dataanak=DataAnak::pluck('nama_anak','id');
        $vitaminanak=VitaminAnak::pluck('nama_vitamin','id');
        $data = Imunisasi::findOrFail($id);
        return view('pages.admin.anak.imunisasi.add-edit', ['data' => $data,'jenisvaksin'=>$jenisvaksin, 'dataanak'=>$dataanak, 'vitaminanak'=>$vitaminanak]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenisvaksin=JenisVaksin::pluck('vaksin','id');
        $dataanak=DataAnak::pluck('nama_anak','id');
        $vitaminanak=VitaminAnak::pluck('nama_vitamin','id');
        $data = Imunisasi::findOrFail($id);
        return view('pages.admin.anak.imunisasi.add-edit', ['data' => $data,'jenisvaksin'=>$jenisvaksin, 'dataanak'=>$dataanak, 'vitaminanak'=>$vitaminanak]);
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
                'nama_anak_id' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = Imunisasi::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.anak-data.imunisasi.index'))->withToastSuccess('Data tersimpan');

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
            Imunisasi::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
