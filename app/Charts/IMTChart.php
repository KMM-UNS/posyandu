<?php

namespace App\Charts;

use App\Models\DataLansia;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\PantauanKMS;

class IMTChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $data_lansia = DataLansia::where('createable_id', auth()->user()->id)->where('createable_type', 'App\Models\User')->first()->id;
        // dd($data_anak);
        $pantauan_kmss = PantauanKMS::where('nama_lansia1',$data_lansia)->get()->toArray();
        // dd($imunisasis);
        // membuat array baru []
      
        $tanggal = array();
        $imt = array();
       
        foreach($pantauan_kmss as $pantauan_kms)
        {
            $x = $pantauan_kms['tanggal_pemeriksaan'];
            $y = $pantauan_kms['hasil'];
            // dd($x);
            array_push($tanggal, $x);
            array_push($imt, $y);
            
        }
        // [0 => '6', 1 => 6 ]


        return $this->chart->lineChart()
            ->setTitle('Grafik Indeks Massa Tubuh Lansia.')
            ->setSubtitle('Indeks Massa Tubuh')
            ->setTitle('Grafik Indeks Massa Tubuh')
            // ->addData('Berat Badan', $berat)
            ->setColors(['#ffc63b'])
            
            ->addData('IMT (kg/cm^2)',$imt)
            ->setXAxis( $tanggal);
            dd($tanggal);
    }
}