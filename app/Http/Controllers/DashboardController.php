<?php

namespace App\Http\Controllers;

use App\Models\ForumLansia;
use App\Models\DataLansia;
use App\Charts\JenisKelaminChart;
use App\Charts\UmurChart;
use App\Charts\StatusKawinChart;
use App\Models\KegiatanLansia;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(JenisKelaminChart  $jkChart, UmurChart $umurChart, StatusKawinChart $statusChart)
    {
        $data = ForumLansia::get();
        $jumlahlansia = DataLansia::count();
        $jumlahkegiatan = KegiatanLansia::count();
        return view('pages.admin.dashboard', [
            'data' => $data,
            'jumlahlansia' => $jumlahlansia,
            'jumlahkegiatan' => $jumlahkegiatan,
            'jkChart' => $jkChart->build(),
            'umurChart' => $umurChart->build(),
            'statusChart' => $statusChart->build(),
        ]);

        // return view('pages.admin.dashboard', ['JenisKelaminChart' => $genderChart->build()], compact('data', 'jumlahlansia', 'jumlahkegiatan', 'chart'));
    }

    public function create()
    {
        return view('pages.admin.dashboard');
    }
    public function store(Request $request)
    {
        $user_id = Auth()->user()->id;
        $tanggal = Carbon::now()->format('Y-m-d');
        $jam = Carbon::now()->format('H:i:s');

        ForumLansia::create([
            "user_id" => $user_id,
            "tanggal" => $tanggal,
            "jam" => $jam,
            "komentar" => $request->komentar,
        ]);
        return redirect()->back();
    }
}
