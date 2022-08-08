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

@section('title', 'Riwayat Imunisasi')

@push('css')
	<link href="/assets/plugins/morris.js/morris.css" rel="stylesheet" />
@endpush

@section('content')
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
    {{-- <li class="breadcrumb-item"><a href="javascript:;">Master Data</a></li> --}}
    <li class="breadcrumb-item active">@yield('title')</li>
</ol>
{{-- @foreach ($dataanaks as $dataanak )
 @if(empty($dataanak) || $dataanak->count()==0)
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
                                    <th>Jenis Vaksin</th>
                                    <th>Umur</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    {{-- <th>Keterangan IMT</th>
                                    <th>Umur</th>
                                    <th>Vaksin</th>
                                    <th>Vitamin Anak</th>
                                    <th>Keluhan</th>
                                    <th>Tindakan</th>
                                    <th>Status Gizi</th>
                                    <th>Nama Kader</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jenisvaksins as $jenisvaksin)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $jenisvaksin->vaksin }}</td>
                                    <td>{{ $jenisvaksin->umur}}</td>
                                    {{-- <td>{{ $jenisvaksin->tinggi_badan}}</td>
                                    <td>{{ $jenisvaksin->total_imt }}</td>
                                    <td>{{ $jenisvaksin->ket_imt}}</td>
                                    <td>{{ $jenisvaksin->umur ?? old('umur') }}</td>
                                    <td>{{ $jenisvaksin->jenisvaksin->vaksin}}</td>
                                    <td>{{ $jenisvaksin->vitamin_anak->nama_vitamin }}</td>
                                    <td>{{ $jenisvaksin->keluhan }}</td>
                                    <td>{{ $jenisvaksin->tindakan }}</td>
                                    <td>{{ $imunisasi->status_gizi}}</td>
                                    <td>{{ $imunisasi->kader->nama }}</td> --}}
                                </tr>
                                @endforeach
                                {{-- <a href=" {{ route('user.grafik.cetak', $imunisasi->id) }}" class="btn btn-info buttons-show"><i class="fa fa-print fa-fw"></i></a> --}}
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>
