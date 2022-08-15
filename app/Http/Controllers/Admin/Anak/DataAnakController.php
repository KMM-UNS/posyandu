<?php

namespace App\Http\Controllers\Admin\Anak;

use App\Models\DataAnak;
use App\Models\Imunisasi;
use App\Models\JenisVaksin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Http\Controllers\Controller;
use App\Datatables\Admin\Anak\DataAnakDataTable;

class DataAnakController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DataAnakDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.anak.dataanak.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.anak.dataanak.add-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        // try {
        //         $request->validate([
        //             'NIK' => 'unique:data_anaks.NIK'
        //         ]);
        //     } catch (\Throwable $th) {
        //         return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        //     }
        //  $request ->validate([
        //     'NIK' => 'unique.data_anaks,NIK',]);
        DB::transaction(function () use ($request) {
            // try {
            //     $request->validate([
            //         'NIK' => 'unique.data_anaks.NIK'
            //     ]);
            // } catch (\Throwable $th) {
            //     return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
            // }
            try {
                $dataanak = DataAnak::create($request->all());
                $dataanak->createable()->associate($request->user());
                $dataanak->save();
            } catch (\Throwable $th) {
                dd($th);
                DB::rollback();
                return back()->withInput()->withToastError('Something what happen');
            }
            // try {
            //     $request->validate([
            //         'NIK' => 'unique:data_anaks.NIK'
            //     ]);
            // } catch (\Throwable $th) {
            //     return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
            // }
        });

        return redirect(route('admin.anak-data.dataanak.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DataAnak::findOrFail($id);
        $imunisasis = Imunisasi::where('nama_anak_id',$id)->get();
        $jenisvaksins = JenisVaksin::where('id','!=',0)->get();
        return view('pages.admin.anak.dataanak.show', ['data' => $data, 'imunisasis' => $imunisasis, 'jenisvaksins'=> $jenisvaksins]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DataAnak::findOrFail($id);
        return view('pages.admin.anak.dataanak.add-edit', ['data' => $data]);
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
                'nama_anak' => 'required|min:3'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = DataAnak::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.anak-data.dataanak.index'))->withToastSuccess('Data tersimpan');
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
            DataAnak::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }

    // public function cetak($id)
    // {

    // $data = DataAnak::findOrFail($id);
    // $imunisasis = Imunisasi::where('nama_anak_id',$id)->get();
    // $pdf = PDF::loadview('pages.admin.anak.dataanak.cetak',
    // [
    //     'data' => $data,
    //     'imunisasis' => $imunisasis,
    // ])->setOptions(['defaultFont' => 'sans-serif']);;
    // $pdf->setpaper('letter', 'landscape');
    // return $pdf->download('cetakkms.pdf');
    // }
}
