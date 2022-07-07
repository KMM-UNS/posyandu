<?php

namespace App\Http\Controllers\Admin\Kegiatan;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    public function index()
    {
        $data = Pengajuan::get();
        // mengirim data pegawai ke view index
        return view('pages.admin.lansia.kegiatanlansia.pengajuan', compact(
            'data'
        ));
    }
}
