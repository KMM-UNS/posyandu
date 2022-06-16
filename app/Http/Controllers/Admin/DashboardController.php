<?php

namespace App\Http\Controllers;

use App\Models\DataAnak;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $anak = DataAnak::count();

        return view('pages.admin.dashboard', [
            'anak' => $anak
        ]);
    }
}
