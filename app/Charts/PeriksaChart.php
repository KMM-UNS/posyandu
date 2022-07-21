<?php

namespace App\Charts;
use App\Models\Imunisasi;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PeriksaChart
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
            $x = DB::table('imunisasis')->whereMonth('tanggal_imunisasi', $j)->where('deleted_at', null)->count();
            {array_push($tanggal, $x);
            }
        }
        return $this->chart->barChart()
            ->setTitle('Jumlah Pemeriksaan Imunisasi Per Bulan')
            ->setSubtitle('Tahun 2022.')
            ->addData('Jumlah Pemeriksaan', $tanggal)
            // ->addData('Boston', [7, 3, 8, 2, 6, 4, 5, 6, 7, 8, 9, 9])
            ->setXAxis(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']);
            // dd($tanggal);

        }
}

