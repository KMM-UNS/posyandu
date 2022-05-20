<?php

namespace App\Http\Controllers\User;

use App\DataTables\admin\anak\JadwalImunisasiDataTable;
use App\DataTables\user\anak\JadwalDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalImunisasi;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.user.anak.jadwal.index');
    }

}
