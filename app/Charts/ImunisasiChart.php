<?php

namespace App\Charts;

use App\Models\DataAnak;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Imunisasi;
use Mockery\Undefined;

class ImunisasiChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }
    public function build($id): \ArielMejiaDev\LarapexCharts\AreaChart
    {
        $data = DataAnak::findOrFail($id);
        $imunisasis = Imunisasi::where('nama_anak_id',$id)->get()->toArray();
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

        // if (count($imunisasis)) {
        //     # code...
        // }
        for ($i=0; $i < count($imunisasis); $i++) {
            # code...
            $berat[$i]['berat'] = $imunisasis[$i]['berat_badan'];
            $berat[$i]['umur'] = $imunisasis[$i]['umur'];
        }

        for ($i=count($imunisasis); $i < 25; $i++) {
            $berat[$i]['berat'] = '0';
            $berat[$i]['umur'] = '0';
        }

        $beratNew = array();
        for ($i=0; $i < 25; $i++) {
            # code...
            $beratNew[$i]['berat'] = '0';
            $beratNew[$i]['umur'] = '0';
        }

        // dd
        // dd($berat);

        for ($i=0; $i < count($berat); $i++) {
            # code...
            $beratNew[(int)$berat[$i]['umur']]['umur'] = $berat[$i]['umur'];
            $beratNew[(int)$berat[$i]['umur']]['berat'] = $berat[$i]['berat'];
        }

        // $beratNew = array();
        // for ($i=0; $i < count($berat); $i++) {
        //     if ($berat[$i]['umur'] != '') {
        //         $beratNew[$i]['berat'] = '';
        //         $beratNew[$i]['umur'] = '';
        //     } else if ($berat[$i]['umur'] == '') {
        //         $beratNew[$i]['berat'] = (int)$berat[(int)$berat[$i]['umur']]['berat'];
        //         $beratNew[$i]['umur'] = (int)$berat[(int)$berat[$i]['umur']]['umur'];
        //     }
        // }

        $beratLast = array();
        for ($i=0; $i < count($beratNew); $i++) {
            # code...
            $beratLast[$i] = $beratNew[$i]['berat'];
        }
        // dd($beratNew);
        // $tinggi = array();
        // $umur = array();
        // foreach($imunisasis as $key => $imunisasi)
        // {
        //     if($imunisasi->umur<25){
        //         $berat[$key]=$imunisasi->berat_badan;
        //     }else{
        //         $berat[$key]=null;
        //     }
        // }
        // dd($imunisasis);
        // [0 => '6', 1 => 6 ]
        // dd($beratLast);


        return $this->chart->areaChart()
            ->setTitle('Grafik Tumbuh Kembang Anak.')
            ->setSubtitle('Pencapaian Berat Badan Anak.')
            ->setTitle('Grafik Tumbuh Kembang Anak')
            ->addData('Berat Badan (Kg)', $beratLast)
            ->addData('Batas Kurus (Kg)', ['2.4','3.2', '4.0', '4.6', '5.1', '5.5', '5.8', '6.1', '6.3', '6.6', '6.8', '7.0', '7.1', '7.3', '7.5', '7.7', '7.8', '8.0', '8.2', '8.3', '8.5', '8.7', '8.8', '9.0', '9.2'])
            // ->addData('Batas -2SD', ['2.8','3.6', '4.5', '5.1', '5.6', '6.1', '6.4', '6.7', '7.0', '7.3', '7.5', '7.7', '7.5', '7.7', '7.9', '8.1', '8.3', '8.5', '8.7', '8.8', '9.0', '9.2', '9.4','9.6','9.8','9.9','10.1'])
            ->addData('Batas Ideal', ['3.2', '4.2', '5.1', '5.8', '6.4', '6.9', '7.3', '7.6', '7.9', '8.2', '8.5', '8.7', '8.9', '9.2', '9.4', '9.6', '9.8', '10.0', '10.2', '10.4', '10.6', '10.9', '11.1' ,'11.3' ,'11.5'])
            // ->addData('Batas 2SD', [ '3.7', '4.8', '5.9', '6.7', '7.3', '7.8', '8.3', '8.7', '9.0', '9.3', '9.6', '9.9', '10.2', '10.4', '10.7', '10.9', '11.2', '11.4', '11.6', '11.9', '12.1', '12.4', '12.6', '12.8', '13.1'])
            ->addData('Batas Gemuk (Kg)', [ '4.2',  '5.4', '6.5', '7.4', '8.1', '8.7', '9.2', '9.6', '10.0', '10.4', '10.7', '11.0', '11.3', '11.6', '11.9', '12.2', '12.5', '12.7', '13.0', '13.3', '13.5', '13.8', '14.1', '14.3', '14.6'])

            // ->addData('Tinggi Badan', $tinggi)
            ->setXAxis(['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24']);
            // ->setXAxis( $umur );
            // dd($umur);
    }
}
