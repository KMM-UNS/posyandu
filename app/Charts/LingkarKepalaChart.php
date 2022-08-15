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
        $lingkarkepala = array();

        // if (count($imunisasis)) {
        //     # code...
        // }
        for ($i=0; $i < count($imunisasis); $i++) {
            # code...
            $lingkarkepala[$i]['lingkarkepala'] = $imunisasis[$i]['lingkar_kepala'];
            $lingkarkepala[$i]['umur'] = $imunisasis[$i]['umur'];
        }

        for ($i=count($imunisasis); $i < 25; $i++) {
            $lingkarkepala[$i]['lingkarkepala'] = '0';
            $lingkarkepala[$i]['umur'] = '0';
        }

        $lingkarkepalaNew = array();
        for ($i=0; $i < 25; $i++) {
            # code...
            $lingkarkepalaNew[$i]['lingkarkepala'] = '0';
            $lingkarkepalaNew[$i]['umur'] = '0';
        }

        // dd
        // dd($berat);

        for ($i=0; $i < count($lingkarkepala); $i++) {
            # code...
            $lingkarkepalaNew[(int)$lingkarkepala[$i]['umur']]['umur'] = $lingkarkepala[$i]['umur'];
            $lingkarkepalaNew[(int)$lingkarkepala[$i]['umur']]['lingkarkepala'] = $lingkarkepala[$i]['lingkarkepala'];
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

        $lingkarkepalaLast = array();
        for ($i=0; $i < count($lingkarkepalaNew); $i++) {
            # code...
            $lingkarkepalaLast[$i] = $lingkarkepalaNew[$i]['lingkarkepala'];
        }

        // [0 => '6', 1 => 6 ]


        return $this->chart->areaChart()
            ->setTitle('Grafik Tumbuh Kembang Anak.')
            ->setSubtitle('Pencapaian Lingkar Kepala Anak.')
            ->setTitle('Grafik Tumbuh Kembang Anak')
            ->addData('Lingkar Kepala (Cm)', $lingkarkepalaLast)
            ->addData('Kecil (Cm)', ['32.1','35.1','36.9','38.3','39.4','40.3','41.0','41.7','42.2','42.6','43.0','43.4','43.6','43.9','44.1','44.3','44.5','44.7','44.9','45.0','45.2','45.3','45.4','45.6','45.7'])
            // ->addData('Batas Bawah', ['33.1','36.1','37.9','39.3','40.4','41.3','42.1','42.7','43.2','43.7','44.1','44.4','44.7','45.0','45.2','45.5','45.6','45.8','46.0','46.2','46.3','46.4','46.6', '46.7','46.8'])
            ->addData('Normal (Cm)', ['34.5','37.3','39.1','40.5','41.6','42.6','43.3','44.0','44.5','45.0','45.4','45.8','46.1','46.3','46.6','46.8','47.0','47.2','47.4', '47.5','47.7','47.8','48.0','48.1','48.3'])
            // ->addData('Batas Atas', ['35.8','38.5','40.3','41.7','42.9','43.8','44.6','45.3','45.8','46.3','46.7','47.1','47.4','47.7','47.9','48.2','48.4','48.6','48.7','48.9','49.1','49.2','49.4','49.5','49.7'])
            ->addData('Besar (Cm)', ['36.9','39.5','41.3','42.7','43.9','44.8','45.6','46.3','46.9','47.4','47.8','48.2','48.5','48.8','49.0','49.3','49.5','49.7','49.9','50.0','50.2','50.4','50.5', '50.7','50.8'])
            // ->addData('Tinggi Badan', $tinggi)
            ->setXAxis( ['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24'] );
            // dd($umur);
    }
}
