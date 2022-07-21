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
            ->setTitle('Data Anak Berdasarkan Kelompok Usia')
            // ->setSubtitle('Tahun 2022')
            ->addData([
                // Imunisasi::where('umur', '>=', '0')->where('umur', '<=', '24')->count(),
                Imunisasi::where('umur', '>=', '0 Bulan')->where('umur', '<=', '24 Bulan')->count(),
                Imunisasi::where('umur', '>=', '25 Bulan')->where('umur', '<=', '60 Bulan')->count(),
                Imunisasi::where('umur', '>=', '61 Bulan')->count(),
            ])
            ->setFontFamily('Open Sans')
            ->setLabels(['Balita(0 Bulan-24 Bulan)', 'Anak(25 Bulan-60 Bulan)','Remaja(61 Bulan +)']);
            // ->setLabels(['Player 7', 'Player 10', 'Player 9']);
    }
}
