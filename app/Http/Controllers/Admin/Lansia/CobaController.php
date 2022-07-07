<?php

namespace App\Http\Controllers\Admin\Lansia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        return view('pages.admin.lansia.coba');
    }
}
