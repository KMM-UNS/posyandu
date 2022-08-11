<?php

namespace App\Http\Controllers\User\UserLansia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Datatables\User\Lansia\RiwayatRujukanDataTable;
// use App\DataTables\User\Lansia\RiwayatRujukanDataTable;
use App\Models\RujukanLansia;
use App\Models\DataLansia;
use App\Models\Puskesmas;
use Barryvdh\DomPDF\Facade\Pdf;

class RiwayatRujukanController extends Controller
{
    public function index(RiwayatRujukanDataTable $dataTable)
    {
        $data = DataLansia::select('id')->where('createable_id', auth()->user()->id)->first()->id;
        return $dataTable->render('pages.user.lansia.riwayatrujukan.index', ['data' => $data]);
    }

    public function create()
    {

        // $data = DataLansia::select('id')->where('createable_id', auth()->user()->id)->first()->id;
        // $nama_lansia=DataLansia::pluck('nama_lansia','id');
        // $data = DataLansia::select('id')->where('createable_id', auth()->user()->id)->first()->id;
        $nama_lansia = DataLansia::where('createable_id', auth()->user()->id)->first()->id;
        $instansi = Puskesmas::pluck('nama', 'id');
        //     $nama_lansia=DataLansia::pluck('nama_lansia');
        //    $nama_lansia=[
        //     'data'=>$data
        //    ];
        return view('pages.user.lansia.riwayatrujukan.add-edit', ['nama_lansia' => $nama_lansia, 'instansi' => $instansi]);
    }

    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            try {
                // dd($request->user());
                $nama_lansia = DataLansia::where('createable_id', auth()->user()->id)->first()->id;
                // dd($nama_lansia);
                $data = RujukanLansia::create($request->all());
                $data->createable()->associate($request->user());
                $data->save();
                // dd($data);

                // dd($data);
            } catch (\Throwable $th) {
                DB::rollBack();
                dd($th);
                return back()->withInput()->withToastError('Something went wrong');
            }
        });
        return redirect(route('user.userlansia.riwayatrujukan.index'))->withToastSuccess('Data tersimpan');
    }
    public function edit($id)
    {
        $data = RujukanLansia::findOrFail($id);
        $nama_lansia = DataLansia::pluck('nama_lansia', 'id');
        $instansi = Puskesmas::pluck('nama', 'id');
        return view('pages.user.lansia.riwayatrujukan.edit', ['data' => $data, 'nama_lansia' => $nama_lansia, 'instansi' => $instansi]);
    }
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'namalansia' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = RujukanLansia::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('user.userlansia.riwayatlansia.index'))->withToastSuccess('Data tersimpan');
    }

    public function show($id)
    {
        $data = RujukanLansia::findOrFail($id);
        $nama_lansia = DataLansia::pluck('nama_lansia', 'id');

        // return view('pages.admin.transaksi.rujukanlansia.showrujukanlansia-pdf', ['data' => $data]);
        $pdf = PDF::loadview(
            'pages.user.lansia.riwayatrujukan.showrujukanlansia-pdf',
            [
                'no_surat' => $data->no_surat,
                'kepada' => $data->instansi->nama,
                'tanggal_surat' => $data->tanggal_surat,
                'namalansia' => $data->rujukan->nama_lansia,
                'umur' => $data->umur,
                'jeniskelamin' => $data->jeniskelamin,
                'alamat' => $data->alamat,
                'keluhan' => $data->keluhan,
            ]
        );
        return $pdf->download('Rujukan.pdf');
    }
}
