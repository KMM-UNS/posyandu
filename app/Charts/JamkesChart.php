<?php

namespace App\Charts;

use App\Models\DataLansia;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class JamkesChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Penduduk Lansia Berdasarkan Jaminan Kesehatan')
            ->setSubtitle('Tahun 2022.')
            ->addData([
                DataLansia::where('jaminan_kesehatan', '1')->count(),
                DataLansia::where('jaminan_kesehatan', '2')->count(),
                DataLansia::where('jaminan_kesehatan', '3')->count(),
                DataLansia::where('jaminan_kesehatan', '4')->count(),
                DataLansia::where('jaminan_kesehatan', '5')->count(),
            ])
            ->setFontFamily('Open Sans')
            // ->setLabels(['BPJS PBI']);

            ->setLabels(['BPJS PBI', 'BPJS Non PBI', 'Jamkesda', 'Asuransi Swasta', 'Perusahaan Kantor']);
    }
}
