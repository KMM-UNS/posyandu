<?php

namespace App\Charts;

use App\Models\DataAnak;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Imunisasi;

class ImunisasiChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $data_anak = DataAnak::where('createable_id', auth()->user()->id)->where('createable_type', 'App\Models\User')->first()->id;
        // dd($data_anak);
        $imunisasis = Imunisasi::where('nama_anak_id',$data_anak)->get()->toArray();
        // dd($imunisasis);
        // membuat array baru []
        $berat = array();
        $tinggi = array();
        $umur = array();
        foreach($imunisasis as $imunisasi)
        {
            $x = $imunisasi['berat_badan'];
            $y = $imunisasi['tinggi_badan'];
            $z = $imunisasi['umur'];
            // dd($x); array push agar datanya ter pisah pisah tidak tercampur
            array_push($berat, $x);
            array_push($tinggi, $y);
            array_push($umur, $z);
        }
        // [0 => '6', 1 => 6 ]


        return $this->chart->lineChart()
            ->setTitle('Grafik Tumbuh Kembah Anak.')
            ->setSubtitle('Pencapaian Tumbuh Kembang Anak.')
            ->setTitle('Grafik Tumbuh kembang Anak')
            ->addData('Berat Badan', $berat)
            ->addData('Tinggi Badan', $tinggi)
            ->setXAxis( $umur );
            dd($umur);
    }
}
