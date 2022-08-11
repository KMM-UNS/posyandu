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

    public function build(): \ArielMejiaDev\LarapexCharts\AreaChart
    {
        $data_lansia = DataLansia::where('createable_id', auth()->user()->id)->where('createable_type', 'App\Models\User')->first()->id;
        // dd($data_anak);
        $pantauan_kmss = PantauanKMS::where('nama_lansia1', $data_lansia)->get()->toArray();
        // dd($imunisasis);
        // membuat array baru []

        $tanggal = array();
        $imt = array();
        $kurang = array();
        $lebih = array();
        $normal = array();


        foreach ($pantauan_kmss as $pantauan_kms) {
            $x = $pantauan_kms['tanggal_pemeriksaan'];
            $y = $pantauan_kms['hasil'];
            array_push($tanggal, $x);
            array_push($imt, $y);
            array_push($kurang, 17);
            array_push($normal, 25);
            // array_push($lebih, 40);


            // array_push($lebih, 25);
        }


        return $this->chart->areaChart()
            ->setTitle('Grafik Indeks Massa Tubuh Lansia.')
            ->setSubtitle('Indeks Massa Tubuh')
            ->setTitle('Grafik Indeks Massa Tubuh')
            ->addData('IMT (kg/cm^2)', $imt)
            // ->addData('Lebih', ['18,$tanggal', '22,$tanggal', '23,$tanggal', '25,$tanggal'])
            // ->addData('Kurang', ['1,$tanggal', '5,$tanggal', '15,$tanggal', '17,$tanggal'])
            // ->addData('kurang', ['$kurang, $tanggal'])
            // ->addData('Lebih', ['$lebih, $tanggal'])
            ->addData('Batas Berat Badan Kurang', $kurang)
            ->addData('Batas Berat Badan Normal', $normal)
            // ->addData('Batas BB Kurang', $lebih)


            // ->addData(' IMT Normal', $normal)

            // ->addData(' IMT ', $lebih)
            ->setXAxis($tanggal);
        dd($tanggal);
    }
}
