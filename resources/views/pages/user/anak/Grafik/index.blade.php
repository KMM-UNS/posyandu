<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Chart Sample</title> --}}
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
@extends('layouts.user')

@section('title', 'Morris Chart')

@push('css')
	<link href="/assets/plugins/morris.js/morris.css" rel="stylesheet" />
@endpush

@section('content')
 {{-- @if(empty($dataanak) || $dataanak->count()==0)
    <div class="panel-body">
        <h1 class="text-center">Anak Belum Imunisasi!</h1>
    </div>
    @else --}}
    <div align="center">
	<h1 class="page-header"><strong> Riwayat Imunisasi </strong></h1>
    </div>
	<!-- end page-header -->
	<!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-lg-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="table-basic-1">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    {{-- <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div> --}}
                    <h4 class="panel-title">Table Riwayat Imunisasi Anak</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    <!-- begin table-responsive -->
                    <div class="table-responsive">
                        <table class="table m-b-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Imunisasi</th>
                                    <th>Berat Badan (kg)</th>
                                    <th>Tinggi Badan (Cm)</th>
                                    <th>Total IMT</th>
                                    <th>Keterangan IMT</th>
                                    <th>Umur</th>
                                    <th>Vaksin</th>
                                    <th>Vitamin Anak</th>
                                    <th>Keluhan</th>
                                    <th>Tindakan</th>
                                    <th>Status Gizi</th>
                                    <th>Nama Kader</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($imunisasis as $imunisasi)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $imunisasi->tanggal_imunisasi }}</td>
                                    <td>{{ $imunisasi->berat_badan}}</td>
                                    <td>{{ $imunisasi->tinggi_badan}}</td>
                                    <td>{{ $imunisasi->total_imt }}</td>
                                    <td>{{ $imunisasi->ket_imt}}</td>
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
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div>

                <!-- end panel-body -->
                <!-- begin hljs-wrapper -->
                {{-- <div class="hljs-wrapper">
                <pre><code class="html">&lt;table class="table"&gt;
...
&lt;/table&gt;</code></pre>
                </div>
                <!-- end hljs-wrapper -->
            </div> --}}

    {{-- <div class="row">
        <div class="col-md-12">
             <table class="table table-primary table-striped">
                    <thead>
                        <tr> --}}
                            {{-- <th scope="col"><strong> Nama Anak </strong></th> --}}
                            {{-- <th scope="col"><strong> No </strong></th>
                            <th scope="col"><strong> Tanggal Imunisasi </strong></th>
                            <th scope="col"><strong> Berat Badan (kg) </strong></th>
                            <th scope="col"><strong> Tinggi Badan (Cm) </strong></th>
                            <th scope="col"><strong> Total IMT </strong></th>
                            <th scope="col"><strong> Keterangan IMT </strong></th>
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
                        <tr> --}}
                            {{-- <td>{{ $imunisasi->data_anak->nama_anak }}</td> --}}
                            {{-- <td>{{ $loop->iteration }}</td>
                            <td>{{ $imunisasi->tanggal_imunisasi }}</td>
                            <td>{{ $imunisasi->berat_badan}}</td>
                            <td>{{ $imunisasi->tinggi_badan}}</td>
                            <td>{{ $imunisasi->total_imt }}</td>
                            <td>{{ $imunisasi->ket_imt}}</td>
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
    </div> --}}
{{-- <body class="h-screen bg-gray-100">

<div class="container px-4 mx-auto">

    <div class="p-6 m-20 bg-white rounded shadow">
        {!! $chart->container() !!}
    </div>

</div>

<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }} --}}
{{-- @endif --}}
<div class="panel-footer">
    {{-- <a href="{{route('user.rujuk.show', $rujukan->id)}}" class="btn btn-sm btn-primary width-60 m-r-2">Deta</a> --}}
    <a href="{{route('user.grafik.cetak', $chart->id)}}"class="btn btn-info buttons-show"><i class="fas fa-download"> Download</i></a>
</div>
@endsection
</body>
</html>
