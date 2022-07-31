<?php

namespace App\Charts;

use App\Models\Imunisasi;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class UmurChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Data Pemeriksaan Imunisasi Anak Berdasarkan Kelompok Usia')
            // ->setSubtitle('Tahun 2022')
            ->addData([
                // Imunisasi::where('umur', '>=', '0')->where('umur', '<=', '24')->count(),
                Imunisasi::where('umur', '>=', 0)->where('umur', '<=', 12)->count(),
                // Imunisasi::where('umur', '>=', 25)->where('umur', '<=', 60)->count(),
                Imunisasi::where('umur', '>=', 13)->count(),
            ])
            ->setFontFamily('Open Sans')
            ->setLabels(['Bayi(0 Bulan-12 Bulan)','Anak - Anak(13 Bulan +)']);
            // ->setLabels(['Player 7', 'Player 10', 'Player 9']);
    }
}
