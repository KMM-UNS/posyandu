<?php

namespace App\Http\Controllers;

use App\Models\ForumLansia;
use App\Models\KegiatanLansia;
use App\Models\PantauanKMS;
use App\Models\DataLansia;
use App\Models\RujukanLansia;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ForumLansiaController extends Controller
{
    public function index()
    {
        // $data = ForumLansia::get();
        // $kegiatanlansia = KegiatanLansia::where('status', '0')->get();
        // $lansia = DataLansia::select('id')->where('createable_id', auth()->user()->id)->first()->id;
        // $riwayatkms = PantauanKMS::where('nama_lansia1', $lansia)->count();
        // $rujukan = RujukanLansia::where('namalansia', $lansia)->where('status', '1')->count();

        // return view('home', compact('data', 'kegiatanlansia', 'lansia', 'riwayatkms', 'rujukan'));
        //coba

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
    }




    public function create()
    {
        return view('home');
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
