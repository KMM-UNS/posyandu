<?php

namespace App\Http\Controllers\user;

use App\Models\DataAnak;
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
        $dataanak = DataAnak::where('createable_id', auth()->user()->id)->first();
        return view('pages.user.anak.biodata.index', ['dataanak' => $dataanak]);
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
                $dataanak = DataAnak::create($request->all());
                $dataanak->createable()->associate($request->user());
                $dataanak->save();

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
        // $data = DataAnak::findOrFail($id);
        // $imunisasis = Imunisasi::where('nama_anak_id',$id)->get();
        // return view('pages.user.anak.biodata.show', ['data' => $data, 'imunisasis' => $imunisasis]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data = DataAnak::findOrFail($id);
        // return view('pages.user.anak.biodata.add-edit', ['data' => $data]);
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
            // $data = DataAnak::findOrFail($id);
            // $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('user.anak.biodata.index'))->withToastSuccess('Data tersimpan');
    }


}
