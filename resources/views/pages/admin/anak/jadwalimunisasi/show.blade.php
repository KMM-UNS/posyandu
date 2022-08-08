@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', 'Report Pemeriksaan Imunisasi' )

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
<form action="{{ isset($data) ? route('admin.anak-data.jadwalkegiatan.update', $data->id) : route('admin.anak-data.jadwalkegiatan.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
  @csrf
  @if(isset($data))
  {{ method_field('PUT') }}
  @endif

  <div class="panel panel-inverse">
    <!-- begin panel-heading -->
    <div class="panel-heading">
      <h4 class="panel-title">Form @yield('title')</h4>
      <div class="panel-heading-btn">
        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
      </div>
    </div>
    <div class="panel-footer">
        <a href="{{ route('admin.anak-data.jadwalimunisasi.report', $data->id) }}" class="btn btn-info buttons-show"><i class="fas fa-print"> Cetak </i></a>
    </div>
    <!-- end panel-heading -->
    <!-- begin panel-body -->
    <div class="panel-body">
        <div class="form-group">
          <div class="row">
              <div class="col-md-3">
                  <label for="name"><b>Tanggal Kegiatan</b></label>
              </div>
              <div class="col-md-3">
                  : {{ $data->tanggal }}
              </div>
              <div class="col-md-3">
                  <label for="name"><b>Penanggung Jawab</b></label>
              </div>
              <div class="col-md-3">
                  : {{ $data->kader->nama }}
              </div>
          </div>
          <div class="row">
            <div class="col-md-3">
                <label for="name"><b>Tempat Kegiatan</b></label>
            </div>
            <div class="col-md-3">
                : {{ $data->tempat }}
            </div>
            <div class="col-md-3">
                <label for="name"><b>Keterangan</b></label>
            </div>
            <div class="col-md-3">
                : {{ $data->keterangan }}
            </div>
        </div>

     {{-- </div>
    </div> --}}
    {{-- <table class="table table-primary table-striped">
        <thead>
            <tr> --}}
    {{-- <div class="panel-body"> --}}
                    <!-- begin table-responsive -->
    <div class="table-responsive">
    <table class="table m-b-0">
        <thead>
            <tr>
                <th> No</th>
                <th> Nama Anak</th>
                {{-- <th> Tanggal Imunisasi</th> --}}
                <th> Berat Badan (kg)</th>
                <th> Tinggi Badan (Cm)</th>
                <th> Total IMT</th>
                <th> Kategori IMT</th>
                <th> Umur</th>
                <th> Vaksin</th>
                <th> Vitamin Anak</th>
                <th> Keluhan</th>
                <th> Tindakan</th>
                <th> Gizi Tambahan</th>
                {{-- <th> Nama Kader</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach($imunisasis as $imunisasi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $imunisasi->data_anak->nama_anak }}</td>
                {{-- <td>{{ $imunisasi->tanggal_imunisasi }}</td> --}}
                <td>{{ $imunisasi->berat_badan}}</td>
                <td>{{ $imunisasi->tinggi_badan}}</td>
                <td>{{ $imunisasi->total_imt}}</td>
                <td>{{ $imunisasi->ket_imt}}</td>
                <td>{{ $imunisasi->umur ?? old('umur') }}</td>
                <td>{{ $imunisasi->jenisvaksin->vaksin}}</td>
                <td>{{ $imunisasi->vitamin_anak->nama_vitamin }}</td>
                <td>{{ $imunisasi->keluhan }}</td>
                <td>{{ $imunisasi->tindakan }}</td>
                <td>{{ $imunisasi->status_gizi}}</td>
                {{-- <td>{{ $imunisasi->kader->nama }}</td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>
    <!-- end panel-footer -->
    {{-- </div> --}}
  <!-- end panel -->
  {{-- <div class="panel-footer">
    <a href=" {{ route('admin.anak-data.dataanak.cetak') }}"class="fas fa-print"> Cetak</a>
    </div> --}}
    {{-- <div class="panel-footer">
        <a href="" class="btn btn-info buttons-show"><i class="fas fa-print"> Cetak </i></a>
    </div> --}}
</form>
<a href="javascript:history.back(-1);" class="btn btn-success">
  <i class="fa fa-arrow-circle-left"></i> Kembali
</a>


@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
@endpush
