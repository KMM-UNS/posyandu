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
            ->addData([
                DataAnak::where('jenis_kelamin', 'laki-laki')->count(),
                DataAnak::where('jenis_kelamin', 'perempuan')->count(),
            ])
            ->setFontFamily('Open Sans')
            ->setLabels(['Jumlah Anak Laki-laki', 'Jumlah Anak Perempuan']);
            }
}
