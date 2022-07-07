<?php

namespace App\Http\Controllers\Admin\Kegiatan;

use App\Datatables\Admin\Kegiatan\KegiatanLansiaDataTable;
use App\Http\Controllers\Controller;
use App\Models\KegiatanLansia;
use App\Models\DataLansia;
use App\Models\Kader;
use App\Models\Pengajuan;
use App\Models\PesertaKegiatan;
use App\Models\PesertaKader;
use Carbon\Carbon;
use Illuminate\Http\Request;


class KegiatanLansiaController extends Controller
{
    public function index(KegiatanLansiaDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.lansia.kegiatanlansia.index');
    }

    public function create()
    {
        return view('pages.admin.lansia.kegiatanlansia.add-edit');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            KegiatanLansia::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-kegiatan.datakegiatanlansia.index'))->withToastSuccess('Data tersimpan');
    }
    public function show($id)
    {
        $data = KegiatanLansia::findorFail($id);
        $data_lansia = DataLansia::get();
        $data_peserta = PesertaKegiatan::where('kegiatan_lansia_id', $id)->get();
        //coba
        $data_kader = Kader::get();
        $data_peserta_kader = PesertaKader::where('kegiatan_lansia1', $id)->get();

        return view('pages.admin.lansia.kegiatanlansia.show', ['data' => $data, 'data_lansia' => $data_lansia, 'data_peserta' => $data_peserta, 'data_kader' => $data_kader, 'data_peserta_kader' => $data_peserta_kader]);
    }
    public function edit($id)
    {
        $data = KegiatanLansia::findOrFail($id);
        return view('pages.admin.lansia.kegiatanlansia.add-edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = KegiatanLansia::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-kegiatan.datakegiatanlansia.index'))->withToastSuccess('Data tersimpan');
    }
    public function destroy($id)
    {
        try {
            $data = KegiatanLansia::find($id);
            $data->delete($data);
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
    public function status($id)
    {
        $now = Carbon::now();
        $datakegiatan = KegiatanLansia::find($id);
        $datakegiatan->status = !$datakegiatan->status;
        $datakegiatan->waktu = $now;
        $datakegiatan->save();
        return redirect()->back();
    }
    public function create_peserta(Request $request, $id)
    {
        $kegiatan = KegiatanLansia::where('id', $id)->first();
        PesertaKegiatan::create([
            "kegiatan_lansia_id" => $request->kegiatan_lansia_id,
            "lansia_id" => $request->lansia_id,
            "iuran_wajib" => $request->iuran_wajib,
        ]);
        $kegiatan->jumlah_iuran += (int)$request->iuran_wajib;
        $kegiatan->save();
        return redirect()->back();
    }

    public function status_peserta($id)
    {
        $datapeserta = PesertaKegiatan::find($id);
        $datapeserta->status = !$datapeserta->status;
        $datapeserta->save();
        return redirect()->back();
    }
    public function create_kader(Request $request, $id)
    {
        $kegiatan = KegiatanLansia::where('id', $id)->first();
        PesertaKader::create([
            "kegiatan_lansia1" => $request->kegiatan_lansia1,
            "kader_id" => $request->kader_id,
        ]);
        $kegiatan->save();

        return redirect()->back();
    }
    public function status_kader($id)
    {
        $datakader = PesertaKader::find($id);
        $datakader->status = !$datakader->status;
        $datakader->save();
        return redirect()->back();
    }

    public function laporankegiatan()
    {
        $max = KegiatanLansia::where('status', '1')->max('waktu');
        $total = KegiatanLansia::where('waktu', $max)->first();

        $total1 = KegiatanLansia::where('status', '1')->sum('jumlah_iuran');
        $data = KegiatanLansia::where('status', '1')->get();
        $dataa = Pengajuan::all();

        return view('pages.admin.lansia.kegiatanlansia.laporankegiatan', ['total' => $total, 'total1' => $total1, 'data' => $data, 'dataa' => $dataa]);
    }

    public function pengajuan(Request $request)
    {
        Pengajuan::create($request->all());
        return redirect()->back();
    }
    public function status_pengajuan($id)
    {
        $statusajuan = Pengajuan::find($id);
        $statusajuan->status = !$statusajuan->status;
        $statusajuan->save();
        return redirect()->back();
    }
    public function statusakhir_pengajuan($id)
    {
        $statusajuan = Pengajuan::find($id);
        $statusajuan->statusakhir = !$statusajuan->statusakhir;
        $statusajuan->save();
        return redirect()->back();
    }
}
