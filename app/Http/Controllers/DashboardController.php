<?php

namespace App\Http\Controllers;

use App\Models\ForumLansia;
use App\Models\DataLansia;
use App\Charts\JenisKelaminChart;
use App\Charts\UmurChart;
use App\Charts\StatusKawinChart;
use App\Charts\JamkesChart;
use App\Models\KegiatanLansia;
use App\Models\PantauanKMS;
use App\Models\RujukanLansia;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(JenisKelaminChart  $jkChart, UmurChart $umurChart, StatusKawinChart $statusChart, JamkesChart $jamkesChart)
    {
        // dd(auth()->user()->hasRole('regular_user'));
        if (auth()->user()->hasRole('regular_user')) {
            $data = ForumLansia::get();
            $kegiatanlansia = KegiatanLansia::where('status', '0')->get();
            $lansia = DataLansia::select('id')->where('createable_id', auth()->user()->id)->first();
            if (isset($lansia)) {
                $lansia = DataLansia::select('id')->where('createable_id', auth()->user()->id)->first()->id;
                $riwayatkms = PantauanKMS::where('nama_lansia1', $lansia)->count();

                if (isset($lansia)) {
                    $lansia = DataLansia::select('id')->where('createable_id', auth()->user()->id)->first()->id;
                    $rujukan = RujukanLansia::where('namalansia', $lansia)->where('status', '1')->count();
                    return view('home', compact('data', 'kegiatanlansia', 'lansia', 'riwayatkms', 'rujukan'));
                }
            }
            return view('home', compact('data', 'kegiatanlansia'));
            // $data = ForumLansia::get();
            // $kegiatanlansia = KegiatanLansia::where('status', '0')->get();
            // $lansia = DataLansia::select('id')->where('createable_id', auth()->user()->id)->first()->id;
            // $riwayatkms = PantauanKMS::where('nama_lansia1', $lansia)->count();
            // $rujukan = RujukanLansia::where('namalansia', $lansia)->where('status', '1')->count();
            // return view('home', compact('data', 'kegiatanlansia', 'lansia', 'riwayatkms', 'rujukan'));
        } else {
            $data = ForumLansia::get();
            $jumlahlansia = DataLansia::count();
            $jumlahkegiatan = KegiatanLansia::count();
            $kegiatanlansia = KegiatanLansia::where('status', '0')->get();
            return view('pages.admin.dashboard', [
                'data' => $data,
                'jumlahlansia' => $jumlahlansia,
                'jumlahkegiatan' => $jumlahkegiatan,
                'jkChart' => $jkChart->build(),
                'umurChart' => $umurChart->build(),
                'statusChart' => $statusChart->build(),
                'jamkesChart' => $jamkesChart->build(),
                'kegiatanlansia' => $kegiatanlansia,
            ]);
        }
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
