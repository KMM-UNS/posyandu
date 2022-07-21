<?php

namespace App\Charts;

use App\Models\DataAnak;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class DataanakChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
        ->setTitle('Grafik Jenis Kelamin Anak')
        // ->setSubtitle('Tahun 2022')
            ->addData([
                DataAnak::where('jenis_kelamin', 'laki-laki')->count(),
                DataAnak::where('jenis_kelamin', 'perempuan')->count(),
            ])
            ->setFontFamily('Open Sans')
            ->setLabels(['Jumlah Anak Laki-laki', 'Jumlah Anak Perempuan']);
    //     return $this->chart->pieChart()
    //         ->setTitle('Top 3 scorers of the team.')
    //         ->setSubtitle('Season 2021.')
    //         ->addData([40, 50, 30])
    //         ->setLabels(['Player 7', 'Player 10', 'Player 9']);
    // }
            }
}
