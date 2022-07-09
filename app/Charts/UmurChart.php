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
            ->addData([
                DataLansia::where('umur', '>=', '60')->where('umur', '<=', '69')->count(),
                DataLansia::where('umur', '>=', '70')->where('umur', '<=', '79')->count(),
                DataLansia::where('umur', '>=', '80')->count(),


                // DataLansia::where('umur', '60,61,62', '61', '62', '63', '64', '65', '66', '67', '68', '69')->count(),
                // DataLansia::where('umur', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79')->count(),
                // DataLansia::where('umur', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89')->count(),
            ])
            ->setFontFamily('Open Sans')
            ->setLabels(['Lansia Muda (60-69)', 'Lansia Madya (70-79)', 'Lansia Tua (80+)']);
    }
}
