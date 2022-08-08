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
    public function build($id): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $data = DataAnak::findOrFail($id);
        $imunisasis = Imunisasi::where('nama_anak_id',$id)->get();
        // karena ada kemungkinan kosong, panggil data anak sesuai yang login
        // $data_anak = DataAnak::where('createable_id', auth()->user()->id)->where('createable_type', 'App\Models\User')->first();
        // // dd($data_anak);
        // // cek apakah sudah mengisi data anak yang ditunjukkan dengan data anak tidak null
        // if($data_anak != null) {
        //     $imunisasis = Imunisasi::where('nama_anak_id',$data_anak->id)->get()->toArray();
        // } else {
        //     $imunisasis = Imunisasi::where('nama_anak_id',$data_anak)->get()->toArray();
        // }

        // dd($imunisasis);
        // membuat array baru []
        $berat = array();
        // $tinggi = array();
        // $umur = array();
        foreach($imunisasis as $imunisasi)
        {
            for($i = 0; $i < 25; $i++){
            // $x = $imunisasi['berat_badan'];
            // $y = $imunisasi['tinggi_badan'];
            // $z = $imunisasi['umur'];
            // dd($x); array push agar datanya ter pisah pisah tidak tercampur
            // array_push($berat, $x);
                if($imunisasi->umur == $i){
                    $berat[$i]=$imunisasi->berat_badan;
                } else {
                    $berat[$i] = null;
                }
            }
            // array_push($tinggi, $y);
            // array_push($umur, $z);
        }
        // dd($imunisasis);
        // [0 => '6', 1 => 6 ]


        return $this->chart->lineChart()
            ->setTitle('Grafik Tumbuh Kembang Anak.')
            ->setSubtitle('Pencapaian Tumbuh Kembang Anak.')
            ->setTitle('Grafik Tumbuh Kembang Anak')
            ->addData('Berat Badan (Kg)', $berat)
            ->addData('Batas Bawah', ['2.5','3.4','4.3','5.0','5.6','6.0','6.4','6.7','6.9','7.1','7.4','7.6','7.7','7.9','8.1','8.3'])
            ->addData('Batas Atas', ['4.4','5.8','7.1','8.0','8.7','9.3','9.8','10.3','10.7','11.0','11.4','11.7','12.0','12.3','12.6','12.8'])
            // ->addData('Tinggi Badan', $tinggi)
            ->setXAxis(['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24']);
            // ->setXAxis( $umur );
            // dd($umur);
    }
}
