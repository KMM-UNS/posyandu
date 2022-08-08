<?php

namespace App\Http\Controllers\user;

use App\Models\DataAnak;
use App\Models\Rujukan;
use App\Models\Imunisasi;
use App\Charts\ImunisasiChart;
use App\Charts\LingkarKepalaChart;
use App\Models\JenisVaksin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BiodataController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('dataanak')->except('index');
    // }

    public function index()
    {
        $data = DataAnak::where('createable_id', auth()->user()->id)->get();
        return view('pages.user.anak.biodata.index', ['data' => $data]);
    }

    public function create()
    {
        return view('pages.user.anak.biodata.add-edit');
    }

    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            try {
                // dd($request->all());
                $data = DataAnak::create($request->all());
                $data->createable()->associate($request->user());
                $data->save();

                // dd($dataanak);
            } catch (\Throwable $th) {
                DB::rollBack();
                dd($th);
                return back()->withInput()->withToastError('Something went wrong');
            }
        });


        // try {
        //     $request->validate([
        //         'nama_anak' => 'required|min:3'
        //     ]);
        // } catch (\Throwable $th) {
        //     return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        // }

        // try {
        //     // DataAnak::create($request->all());
        // } catch (\Throwable $th) {
        //     return back()->withInput()->withToastError('Something went wrong');
        // }

        return redirect(route('user.biodata.index'))->withToastSuccess('Data tersimpan');
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
        $rujukans = Rujukan::where('nama',$id)->get();
        $jenisvaksins = JenisVaksin::where('id','!=',0)->get();
        return view('pages.user.anak.biodata.show', ['data' => $data, 'imunisasis' => $imunisasis,'rujukans' => $rujukans,'jenisvaksins'=> $jenisvaksins]);

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
        return view('pages.user.anak.biodata.add-edit', ['data' => $data]);
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

        return redirect(route('user.biodata.index'))->withToastSuccess('Data tersimpan');
    }

    public function rujukan($id)
    {
        $data = DataAnak::findOrFail($id);
        // $imunisasis = Imunisasi::where('nama_anak_id',$id)->get();
        $rujukans = Rujukan::where('nama',$id)->get();
        // $jenisvaksins = JenisVaksin::where('id','!=',0)->get();
        return view('pages.user.anak.biodata.rujukan', ['data' => $data,'rujukans' => $rujukans]);

    }

    public function kms($id, ImunisasiChart  $imunisasiChart, LingkarKepalaChart $lingkarkepalaChart)
    {
        // $data = DataAnak::findOrFail($id);
        // $imunisasis = Imunisasi::where('nama_anak_id',$id)->get();
        // $rujukans = Rujukan::where('nama',$id)->get();
        // $jenisvaksins = JenisVaksin::where('id','!=',0)->get();
        return view('pages.user.anak.biodata.grafik', ['imunisasiChart' => $imunisasiChart->build($id), 'lingkarkepalaChart'=>$lingkarkepalaChart->build($id)]);

    }
}
