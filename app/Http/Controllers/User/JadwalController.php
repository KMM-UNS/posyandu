<?php

namespace App\Http\Controllers\User;

use App\DataTables\admin\anak\JadwalImunisasiDataTable;
use App\DataTables\user\anak\JadwalDataTable;
use App\Http\Controllers\Controller;
use App\Models\Imunisasi;
use Illuminate\Http\Request;
use App\Models\JenisVaksin;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisvaksins = JenisVaksin::where('id','!=',0)->get();
        // $imunisasi = Imunisasi::where
        return view('pages.user.anak.jadwal.index',['jenisvaksins'=> $jenisvaksins]);
        // ,['jadwalimunisasi' => $jadwalimunisasi]);
    }

}
