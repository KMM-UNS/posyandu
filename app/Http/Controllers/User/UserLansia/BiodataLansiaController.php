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

class BiodataLansiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =DataLansia::all();
        // $agamas=Agama::pluck('nama','id'); 
        // $goldas=GolonganDarah::pluck('nama','id'); 
        // $statuskawins=StatusKawin::pluck('nama','id');
        // $jaminankesehatans=JaminanKesehatan::pluck('jaminan_kesehatan_id','id');
        // return view('pages.user.lansia.biodatalansia.add-edit', ['agamas' =>  $agamas, 'goldas'=> $goldas, 'statuskawins' => $statuskawins, 'jaminankesehatans' => $jaminankesehatans ]);
        return view('pages.user.lansia.biodatalansia.add-edit');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agamas=Agama::pluck('nama','id'); 
        $goldas=GolonganDarah::pluck('nama','id'); 
        $statuskawins=StatusKawin::pluck('nama','id');
        $jaminankesehatans=JaminanKesehatan::pluck('jaminan_kesehatan_id','id');
        return view('pages.user.lansia.biodatalansia.add-edit', ['agamas' =>  $agamas, 'goldas'=> $goldas, 'statuskawins' => $statuskawins, 'jaminankesehatans' => $jaminankesehatans ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'nama_lansia'=>'required',
        'no_KMS'=>'required',
        'email'=>'required', 
        'no_hp'=>'required', 
        'NIK'=>'required', 
        'jenis_kelamin'=>'required', 
        'ttl'=>'required', 
        'umur'=>'required', 
        'status_perkawinan'=>'required', 
        'alamat'=>'required', 
        'agama'=>'required', 
        'pendidikan_terakhir'=>'required',
        'golongan_darah'=>'required',
        'jaminan_kesehatan'=>'required'
        ]);

        $data = new DataLansia;
        $data->namalansia=$request->input('namalansia');
        $data->no_KMS=$request->input('no_KMS');
        $data->email=$request->input('email');
        $data->no_hp=$request->input('no_hp');
        $data->NIK=$request->input('NIK');
        $data->jenis_kelamin=$request->input('jenis_kelamin');
        $data->ttl=$request->input('ttl');
        $data->umur=$request->input('umur');
        $data->status_perkawinan=$request->input('status_perkawinan');
        $data->alamat=$request->input('alamat');
        $data->agama=$request->input('agama');
        $data->pendidikan_terakhir=$request->input('pendidikan_terakhir');
        $data->golongan_darah=$request->input('golongan_darah');
        $data->jaminan_kesehatan=$request->input('jaminan_kesehatan');

        $data->save();

        return redirect()->with('success','data saved');

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
        $data = DataLansia::findOrFail($id);
        $agamas=Agama::pluck('nama','id'); 
        $goldas=GolonganDarah::pluck('nama','id'); 
        $statuskawins=StatusKawin::pluck('nama','id');
        $jaminankesehatans=JaminanKesehatan::pluck('jaminan_kesehatan_id','id');
   
        return view('pages.user.lansia.biodatalansia.add-edit', ['data' => $data, 'agamas' =>  $agamas, 'goldas'=> $goldas, 'statuskawins' => $statuskawins, 'jaminankesehatans' => $jaminankesehatans]);
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
