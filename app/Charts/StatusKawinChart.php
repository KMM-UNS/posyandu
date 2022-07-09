<?php

namespace App\Charts;

use App\Models\DataLansia;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class StatusKawinChart
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
                DataLansia::where('status_perkawinan', '1')->count(),
                DataLansia::where('status_perkawinan', '2')->count(),
                DataLansia::where('status_perkawinan', '3')->count(),
                DataLansia::where('status_perkawinan', '4')->count(),

            ])
            ->setFontFamily('Open Sans')

            ->setLabels(['Kawin', 'Belum Kawin', 'Cerai Mati', 'Cerai Hidup']);
    }
}
