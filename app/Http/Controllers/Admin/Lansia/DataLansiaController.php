<?php

namespace App\Http\Controllers\Admin\Lansia;

use App\Datatables\Admin\Lansia\DataLansiaDataTable;
use App\Http\Controllers\Controller;
use App\Models\DataLansia;
//use App\Models\GolonganDarah;
use App\Models\Agama;
use App\Models\GolonganDarah;
use App\Models\StatusKawin;
use Illuminate\Http\Request;
use App\Models\JaminanKesehatan;
use App\DataTables\Admin\Lansia\DetailDataLansiaDataTable;


class DataLansiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DataLansiaDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.lansia.data-lansia.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agamas = Agama::pluck('nama', 'id');
        $goldas = GolonganDarah::pluck('nama', 'id');
        $statuskawins = StatusKawin::pluck('nama', 'id');
        $jaminankesehatans = JaminanKesehatan::pluck('jaminan_kesehatan_id', 'id');
        return view('pages.admin.lansia.data-lansia.add-edit', ['agamas' =>  $agamas, 'goldas' => $goldas, 'statuskawins' => $statuskawins, 'jaminankesehatans' => $jaminankesehatans]);
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
                'nama_lansia' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            DataLansia::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-lansia.datalansia.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DetailDataLansiaDataTable $dataTable, $id)
    {
        $data = DataLansia::findorFail($id);
        $agamas = Agama::pluck('nama', 'id');
        $goldas = GolonganDarah::pluck('nama', 'id');
        $statuskawins = StatusKawin::pluck('nama', 'id');
        $jaminankesehatans = JaminanKesehatan::pluck('jaminan_kesehatan_id', 'id');

        return $dataTable->render('pages.admin.lansia.data-lansia.show', [
            'data' => $data, 'agamas' =>  $agamas, 'goldas' => $goldas, 'statuskawins' => $statuskawins, 'jaminankesehatans' => $jaminankesehatans
            // 'status_tinggal' => $status_tinggal
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DataLansia::findOrFail($id);
        $agamas = Agama::pluck('nama', 'id');
        $goldas = GolonganDarah::pluck('nama', 'id');
        $statuskawins = StatusKawin::pluck('nama', 'id');
        $jaminankesehatans = JaminanKesehatan::pluck('jaminan_kesehatan_id', 'id');

        return view('pages.admin.lansia.data-lansia.add-edit', ['data' => $data, 'agamas' =>  $agamas, 'goldas' => $goldas, 'statuskawins' => $statuskawins, 'jaminankesehatans' => $jaminankesehatans]);
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
                'nama_lansia' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = DataLansia::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-lansia.datalansia.index'))->withToastSuccess('Data tersimpan');
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
            DataLansia::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
