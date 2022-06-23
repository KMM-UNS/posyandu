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
	<h1 class="page-header"><strong> Kartu Menuju Sehat (KMS) </strong></h1>
    </div>
	<!-- end page-header -->
	<!-- begin row -->

    <div class="row">
        <div class="col-md-12">
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
<body class="h-screen bg-gray-100">

<div class="container px-4 mx-auto">

    <div class="p-6 m-20 bg-white rounded shadow">
        {!! $chart->container() !!}
    </div>

</div>

<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}
{{-- @endif --}}
<div class="panel-footer">
     <a class="btn btn-info buttons-show"><i class="fas fa-download"> Download</i></a>
</div>
@endsection
</body>
</html>
