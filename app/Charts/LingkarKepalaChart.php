<?php

namespace App\Charts;
use App\Models\DataAnak;
use App\Models\Imunisasi;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class LingkarKepalaChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }
    public function build($id): \ArielMejiaDev\LarapexCharts\AreaChart
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
        $lingkarkepala = array();
        // $tinggi = array();
        // $umur = array();
        foreach($imunisasis as $imunisasi)
        {
            for($i = 0; $i < 25; $i++){
                if($imunisasi->umur == $i){
                    $lingkarkepala[$i]=$imunisasi->lingkar_kepala;
                } else {
                    $lingkarkepala[$i] = null;
                }
            }
            // $x = $imunisasi['lingkar_kepala'];
            // $y = $imunisasi['tinggi_badan'];
            // $z = $imunisasi['umur'];
            // dd($x); array push agar datanya ter pisah pisah tidak tercampur
            // array_push($lingkarkepala, $x);
            // array_push($tinggi, $y);
            // array_push($umur, $z);
        }
        // [0 => '6', 1 => 6 ]


        return $this->chart->areaChart()
            ->setTitle('Grafik Tumbuh Kembang Anak.')
            ->setSubtitle('Pencapaian Lingkar Kepala Anak.')
            ->setTitle('Grafik Tumbuh Kembang Anak')
            ->addData('Lingkar Kepala (Cm)', $lingkarkepala)
            ->addData('Batas Bawah', ['33.1','36.1','37.9','39.3','40.4','41.3','42.1','42.7','43.2','43.7','44.1','44.4','44.7','45.0','45.2','45.5'])
            ->addData('Batas Atas', ['35.8','38.5','40.3','41.7','42.9','43.8','44.6','45.3','45.8','46.3','46.7','47.1','47.4','47.7','47.9','48.2'])
            // ->addData('Tinggi Badan', $tinggi)
            ->setXAxis( ['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'] );
            // dd($umur);
    }
}
