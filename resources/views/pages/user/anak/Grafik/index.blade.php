@extends('layouts.user')

@section('title', 'Morris Chart')

@push('css')
	<link href="/assets/plugins/morris.js/morris.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Chart</a></li>
		<li class="breadcrumb-item active">Morris Chart</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Kartu Menuju Sehat Anak </h1>
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
    <h1 class="page-header">Grafik Tumbuh Kembang Anak </h1>
    <div class="form-group">
	<div class="row">
			<!-- end panel -->
            <div class="col-md-12">
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="morris-chart-2">
				<div class="panel-heading">
					<h4 class="panel-title">Morris Area Chart</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<h4 class="text-center">Quarterly Apple iOS device unit sales</h4>
					<div id="morris-line-chart" class="height-sm"></div>
				</div>
			</div>
            {{-- <div class="col-md-6"> --}}
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="morris-chart-2">
                    <div class="panel-heading">
                        <h4 class="panel-title">Morris Area Chart</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <h4 class="text-center">Quarterly Apple iOS device unit sales</h4>
                        <div id="morris-bar-chart" class="height-sm"></div>
                    </div>
                </div>
			<!-- end panel -->
		</div>

@endsection


@push('scripts')
  <script src="/assets/plugins/raphael/raphael.min.js"></script>
	<script src="/assets/plugins/morris.js/morris.min.js"></script>
	<script src="/assets/js/demo/chart-morris.demo.js"></script>
@endpush
