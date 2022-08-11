<?php

namespace App\Charts;

use App\Models\DataLansia;
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
            ->setTitle('Penduduk Lansia Berdasarkan Kelompok Umur')
            ->setSubtitle('Tahun 2022.')
            ->addData([
                DataLansia::where('umur', '>=', '50')->where('umur', '<=', '59')->count(),
                DataLansia::where('umur', '>=', '60')->where('umur', '<=', '69')->count(),
                DataLansia::where('umur', '>=', '70')->where('umur', '<=', '79')->count(),
                DataLansia::where('umur', '>=', '80')->count(),
            ])
            ->setFontFamily('Open Sans')
            ->setLabels(['Pra Lansia (50-59)', 'Lansia Muda (60-69)', 'Lansia Madya (70-79)', 'Lansia Tua (80+)']);
    }
}
