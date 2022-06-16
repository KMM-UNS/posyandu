@extends('layouts.user')

@section('title', 'Morris Chart')

@push('css')
	<link href="/assets/plugins/morris.js/morris.css" rel="stylesheet" />
@endpush

@section('content')
<div align="center">
	<h1 class="page-header"><strong> Kartu Menuju Sehat (KMS) </strong></h1>
    </div>
	<!-- end page-header -->
	<!-- begin row -->

    <div class="row">
        <div class="col-md-12">

            {{-- <div class="text"><strong>Riwayat Vaksin</strong></div> --}}
             <table class="table table-primary table-striped">
                    <thead>
                        <tr>
                            {{-- <th scope="col"><strong> Nama Anak </strong></th> --}}
                            <th scope="col"><strong> Tanggal Imunisasi </strong></th>
                            <th scope="col"><strong> Berat Badan (kg) </strong></th>
                            <th scope="col"><strong> Tinggi Badan (Cm) </strong></th>
                            <th scope="col"><strong> Umur </strong></th>
                            <th scope="col"><strong> Vaksin </strong></th>
                            <th scope="col"><strong> Vitamin Anak </strong></th>
                            <th scope="col"><strong> Keluhan </strong></th>
                            <th scope="col"><strong> Tindakan </strong></th>
                            <th scope="col"><strong> Status Gizi </strong></th>
                            <th scope="col"><strong> Nama Kader </strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($imunisasis as $imunisasi)
                        <tr>
                            {{-- <td>{{ $imunisasi->data_anak->nama_anak }}</td> --}}
                            <td>{{ $imunisasi->tanggal_imunisasi }}</td>
                            <td>{{ $imunisasi->berat_badan}}</td>
                            <td>{{ $imunisasi->tinggi_badan}}</td>
                            <td>{{ $imunisasi->umur ?? old('umur') }}</td>
                            <td>{{ $imunisasi->jenisvaksin->vaksin}}</td>
                            <td>{{ $imunisasi->vitamin_anak->nama_vitamin }}</td>
                            <td>{{ $imunisasi->keluhan }}</td>
                            <td>{{ $imunisasi->tindakan }}</td>
                            <td>{{ $imunisasi->status_gizi}}</td>
                            <td>{{ $imunisasi->kader->nama }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<figure class="highcharts-figure">
    <div id="container"></div>
</figure>
<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Berat Badan'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Berat Badan ( Kg )'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} kg</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Umur',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
}],
});
</script>
@endsection
