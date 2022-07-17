<?php

namespace App\Http\Controllers;

use App\Models\DataAnak;
use App\Models\Kader;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $anak = DataAnak::count();
        $kader = Kader::count();

        return view('pages.admin.dashboard',
        [
            'anak' => $anak, 'kader' => $kader
        ]);
    }
}
