<?php

namespace App\Http\Controllers\Admin\Lansia;

use App\Http\Controllers\Controller;

class CobaController extends Controller
{
    public function index()
    {
        return view('pages.admin.lansia.coba');
        // return view('demo-pages.formkms');
    }
}
