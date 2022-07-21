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
                                {{-- <a href=" {{ route('user.grafik.cetak', $imunisasi->id) }}" class="btn btn-info buttons-show"><i class="fa fa-print fa-fw"></i></a> --}}
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div>

{{-- @endif
@endforeach --}}
{{-- <script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }} --}}
{{-- @endif --}}
<div class="panel-footer">
    <a href=" {{ route('user.grafik.cetak', $imunisasi->id) }}" class="btn btn-info buttons-show"><i class="fas fa-print"> Cetak </i></a>
    {{-- <a href="{{route('user.rujuk.show', $rujukan->id)}}" class="btn btn-sm btn-primary width-60 m-r-2">Deta</a> --}}
    {{-- <a href="{{route('user.grafik.show')}}"class="btn btn-info buttons-show"><i class="fas fa-download"> Cetak</i></a> --}}
</div>
@endsection
</body>
</html>
