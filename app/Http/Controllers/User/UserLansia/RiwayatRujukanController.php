<?php

namespace App\Http\Controllers\User\UserLansia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Datatables\User\Lansia\RiwayatRujukanDataTable;
// use App\DataTables\User\Lansia\RiwayatRujukanDataTable;
use App\Models\DataLansia;

use App\Models\RujukanLansia;

class RiwayatRujukanController extends Controller
{
    public function index(RiwayatRujukanDataTable $dataTable)
    {
        // $data = DataLansia::select('id')->where('createable_id', auth()->user()->id)->first()->id;
        return $dataTable->render('pages.user.lansia.riwayatrujukan.index');
        

    }

}
