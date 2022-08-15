<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\DataAnak;
use App\Models\Imunisasi;

class TinggiBadanChart
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
        // $tinggi = array();
        // foreach($imunisasis as $imunisasi)
        // {
        //     for($i = 0; $i < 25; $i++){
        //         if($imunisasi->umur == $i){
        //             $tinggi[$i]=$imunisasi->tinggi_badan;
        //         } else {
        //             $tinggi[$i] = null;
        //         }
        //     }
        // }
        $tinggi = array();

        for ($i=0; $i < count($imunisasis); $i++) {
            # code...
            $tinggi[$i]['tinggi'] = $imunisasis[$i]['tinggi_badan'];
            $tinggi[$i]['umur'] = $imunisasis[$i]['umur'];
        }

        for ($i=count($imunisasis); $i < 25; $i++) {
            $tinggi[$i]['tinggi'] = '0';
            $tinggi[$i]['umur'] = '0';
        }

        $tinggiNew = array();
        for ($i=0; $i < 25; $i++) {
            # code...
            $tinggiNew[$i]['tinggi'] = '0';
            $tinggiNew[$i]['umur'] = '0';
        }
        for ($i=0; $i < count($tinggi); $i++) {
            # code...
            $tinggiNew[(int)$tinggi[$i]['umur']]['umur'] = $tinggi[$i]['umur'];
            $tinggiNew[(int)$tinggi[$i]['umur']]['tinggi'] = $tinggi[$i]['tinggi'];
        }

        $tinggiLast = array();
        for ($i=0; $i < count($tinggiNew); $i++) {
            # code...
            $tinggiLast[$i] = $tinggiNew[$i]['tinggi'];
        }

        return $this->chart->areaChart()
        ->setTitle('Grafik Tumbuh Kembang Anak.')
        ->setSubtitle('Pencapaian Tinggi Badan.')
        ->setTitle('Grafik Tumbuh Kembang Anak')
        ->addData('Tinggi Badan (Cm)', $tinggiLast)
        ->addData('Pendek (Cm)', ['43.6','47.8','51.0','53.5','55.6','57.4','58.9','60.3','61.7','62.9','64.1','65.2','66.3','67.3','68.3','69.3','70.2','71.1','72.0','72.8','73.7','74.5','75.2','76.0','76.7'])
        ->addData('Normal (Cm)', ['49.1','53.7','57.1','59.8','62.1','64.0','65.7','67.3','68.7','70.1','71.5','72.8','74.0','75.2','76.4','77.5', '78.6','79.7','80,7','81,7','82.7','83.7','84.6','85.5','86.4'])
        ->addData('Tinggi (Cm)', ['54.7','59.5','63.2','66.1','68.6','70.7','72.5','74.2','75.8','77.4','78.9','80.3','81.7','83.1','84.4','85.7', '87.0','88.2','89.4','90.6', '91.7', '92.9','94.0','95.0','96.1'])
        // ->addData('Tinggi Badan', $tinggi)
        ->setXAxis(['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24']);

    }
}
