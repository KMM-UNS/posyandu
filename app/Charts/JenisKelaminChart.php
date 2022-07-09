<?php

namespace App\Charts;

use App\Models\DataLansia;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class JenisKelaminChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->addData([

                DataLansia::where('jenis_kelamin', 'laki-laki')->count(),
                DataLansia::where('jenis_kelamin', 'perempuan')->count(),
            ])
            ->setFontFamily('Open Sans')
            ->setColors(['#ffc63b', '#ff6384'])
            ->setLabels(['Laki-laki', 'Perempuan']);
    }
}
