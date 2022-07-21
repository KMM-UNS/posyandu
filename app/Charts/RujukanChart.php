<?php

namespace App\Charts;

use App\Models\Rujukan;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class RujukanChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $tanggal = array();
        for($j = 1; $j <= 12; $j++){
            // $x = DB::table('imunisasis')->whereMonth('tanggal_imunisasi', $j)->count();
            $x = DB::table('rujukans')->whereMonth('tanggal_surat', $j)->where('deleted_at', null)->count();
            {array_push($tanggal, $x);
            }
        }
        return $this->chart->barChart()
            ->setTitle('Jumlah Rujukan Per Bulan')
            ->setSubtitle('Tahun 2022.')
            // ->addData('San Francisco', [6, 9, 3, 4, 10, 8])
            ->addData('Jumlah Rujukan ', $tanggal)
            ->setXAxis(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']);
    }
}
