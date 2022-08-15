@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', 'Detail Data Anak' )

@push('css')
<link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
  <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Master Data</a></li>
  <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Master Data<small> @yield('title')</small></h1>
<!-- end page-header -->


<!-- begin panel -->
<form action="{{ isset($data) ? route('admin.anak-data.dataanak.update', $data->id) : route('admin.anak-data.dataanak.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
  @csrf
  @if(isset($data))
  {{ method_field('PUT') }}
  @endif

  <div align="center">
	<h1 class="page-header"><strong> Riwayat Imunisasi Anak </strong></h1>
    </div>

    <div class="row">
        <!-- begin col-6 -->
        <div class="col-lg-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="table-basic-1">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Table Riwayat Pemeriksaan Imunisasi Anak</h4>
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
                                    <th>Lingkar Kepala (Cm)</th>
                                    <th>Total IMT</th>
                                    <th>Keterangan IMT</th>
                                    <th>Umur</th>
                                    {{-- <th>Vaksin</th> --}}
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
                                    <td>{{ $imunisasi->lingkar_kepala}}</td>
                                    <td>{{ $imunisasi->total_imt }}</td>
                                    <td>{{ $imunisasi->ket_imt}}</td>
                                    <td>{{ $imunisasi->umur ?? old('umur') }}</td>
                                    {{-- <td>{{ $imunisasi->jenisvaksin->vaksin}}</td> --}}
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

	<!-- end page-header -->
	<!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-lg-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="table-basic-1">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Table Riwayat Vaksin Anak</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    <!-- begin table-responsive -->
                    <div class="table-responsive">
                        <table class="table m-b-0">
                            <thead>
                                <tr>
                                    <th><b>No</b></th>
                                    {{-- <th><b>Vitamin</b></th> --}}
                                    <th><b>Jenis Vaksin</b></th>
                                    <th><b>Umur</b></th>
                                    <th><b>Tanggal</b></th>
                                    {{-- <th><b>Vitamin</b></th> --}}
                                    <th><b>Status</b></th>
                                    {{-- <th><b>Vitamin</b></th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jenisvaksins as $jenisvaksin)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $jenisvaksin->vaksin }}</td>
                                    <td>{{ $jenisvaksin->umur}} Bulan</td>
                                    @php
                                        $imunisasi = $imunisasis->where('jenis_vaksin', $jenisvaksin->id)->first();
                                    @endphp
                                    @if ($imunisasi)
                                    <td>{{ $imunisasi->tanggal_imunisasi }}</td>
                                    {{-- <td>{{ $imunisasi->vitamin_anak->nama_vitamin }}</td> --}}
                                    <td class="btn btn-info btn-xs"> Sudah Vaksin</td>
                                    @else
                                    {{-- <td> -</td> --}}
                                    <td> -</td>
                                    <td class="btn btn-secondary btn-xs">Belum Vaksin</td>
                                    @endif
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


    <a href="javascript:history.back(-1);" class="btn btn-success">
        <i class="fa fa-arrow-circle-left"></i> Kembali
      </a>

        <!-- end table-responsive -->
    </div>
@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
@endpush
