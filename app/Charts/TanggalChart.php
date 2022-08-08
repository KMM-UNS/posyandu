<?php

namespace App\Charts;

use App\Models\Imunisasi;
use App\Models\JadwalImunisasi;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class TanggalChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $jadwalimunisasis = JadwalImunisasi::get();
        $tanggal = array();
        $tanggalkegiatan = array();


        foreach($jadwalimunisasis as $jadwalimunisasi)
        {
            $imunisasi = Imunisasi::where('tanggal_imunisasi', $jadwalimunisasi->tanggal)->count();
            array_push($tanggal, $imunisasi);
            array_push($tanggalkegiatan, $jadwalimunisasi->tanggal);
        }
        // dd($tanggal);
        return $this->chart->barChart()
        ->setTitle('Jumlah Pemeriksaan Imunisasi Per Tanggal')
        ->setSubtitle('Tahun 2022.')
        ->addData('Jumlah Pemeriksaan', $tanggal)
        ->setXAxis($tanggalkegiatan);
        // ->setXAxis(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']);
    }
}
