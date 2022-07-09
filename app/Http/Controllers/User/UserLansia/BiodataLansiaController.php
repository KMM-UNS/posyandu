<?php

namespace App\Http\Controllers\User\UserLansia;

// use App\Datatables\User\Lansia\BiodataLansiaDataTable;
use App\Http\Controllers\Controller;
// use App\Models\DataLansia;
//use App\Models\GolonganDarah;
use App\Models\Agama;
use App\Models\DataLansia;
use App\Models\GolonganDarah;
use App\Models\StatusKawin;
use Illuminate\Http\Request;
use App\Models\JaminanKesehatan;
use App\Models\Pendidikan;

use Illuminate\Support\Facades\DB;

class BiodataLansiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DataLansia::where('createable_id', auth()->user()->id)->first();
        //$data = DataLansia::all();
        return view('pages.user.lansia.biodatalansia.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $agamas = Agama::pluck('nama', 'id');
        $goldas = GolonganDarah::pluck('nama', 'id');
        $statuskawins = StatusKawin::pluck('nama', 'id');
        $jaminankesehatans = JaminanKesehatan::pluck('jaminan_kesehatan_id', 'id');
        $pendidikans = Pendidikan::pluck('nama', 'id');


        return view('pages.user.lansia.biodatalansia.add-edit', ['agamas' =>  $agamas, 'goldas' => $goldas, 'statuskawins' => $statuskawins, 'jaminankesehatans' => $jaminankesehatans, 'pendidikans' => $pendidikans]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // DB::transaction(function () use ($request) {
        //     try {
        //         // dd($request->user());
        //         $data = DataLansia::create($request->all());
        //         $data->createable()->associate($request->user());
        //         $data->save();
        //         // dd($data);

        //         // dd($data);
        //     } catch (\Throwable $th) {
        //         DB::rollBack();
        //         dd($th);
        //         return back()->withInput()->withToastError('Something went wrong');
        //     }
        // });
        // return redirect(route('user.userlansia.biodatalansia.index'))->withToastSuccess('Data tersimpan');
        DB::transaction(function () use ($request) {
            try {
                // dd($request->user());
                // $data = DataLansia::create($request->all());
                // $data->createable()->associate($request->user());
                // $data->save();

                $data = DataLansia::create($request->all());
                $data->createable()->associate($request->user());
                if ($request->hasFile('foto_lansia')) {
                    $request->file('foto_lansia')->move('fotolansia/', $request->file('foto_lansia')->getClientOriginalName());
                    $data->foto_lansia = $request->file('foto_lansia')->getClientOriginalName();
                    $data->save();
                }
            } catch (\Throwable $th) {
                DB::rollBack();
                // dd($th);
                return back()->withInput()->withToastError('Something went wrong');
            }
        });
        return redirect(route('user.userlansia.biodatalansia.index'))->withToastSuccess('Data tersimpan');
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

        $agamas = Agama::pluck('nama', 'id');
        $goldas = GolonganDarah::pluck('nama', 'id');
        $statuskawins = StatusKawin::pluck('nama', 'id');
        $jaminankesehatans = JaminanKesehatan::pluck('jaminan_kesehatan_id', 'id');
        $pendidikans = Pendidikan::pluck('nama', 'id');
        return view('pages.user.lansia.biodatalansia.add-edit', ['agamas' =>  $agamas, 'goldas' => $goldas, 'statuskawins' => $statuskawins, 'jaminankesehatans' => $jaminankesehatans]);
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
            // $data = DataLansia::findOrFail($id);
            // $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('user.userlansia.biodatalansia.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     try {
    //         BiodataLansia::find($id)->delete();
    //     } catch (\Throwable $th) {
    //         return response(['error' => 'Something went wrong']);
    //     }
    // }
}
