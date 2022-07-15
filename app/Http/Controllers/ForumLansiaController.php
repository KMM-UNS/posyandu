<?php

namespace App\Http\Controllers;

use App\Models\ForumLansia;
use App\Models\KegiatanLansia;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ForumLansiaController extends Controller
{
    public function index()
    {
        $data = ForumLansia::get();
        $kegiatanlansia = KegiatanLansia::where('status', '0')->get();
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
