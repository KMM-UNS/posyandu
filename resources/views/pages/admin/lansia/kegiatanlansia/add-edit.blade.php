@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Data Lansia' : 'Create Data Lansia' )

@push('css')
<link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
  <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Lansia</a></li>
  <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Lansia<small> @yield('title')</small></h1>
<!-- end page-header -->


<!-- begin panel -->
<form action="{{ isset($data) ? route('admin.data-kegiatan.datakegiatanlansia.update', $data->id) : route('admin.data-kegiatan.datakegiatanlansia.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
    <!-- end panel-heading -->
    <!-- begin panel-body -->

    <div class="panel-body">
      <div class="form-group">
        <label for="name">Nama Kegiatan</label>
        <input type="text" id="nama" name="nama" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama ?? old('nama') }}}">
        <label for="name">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->deskripsi ?? old('deskripsi') }}}"></textarea>
        <label for="name">Lokasi</label>
        <input type="text" id="lokasi" name="lokasi" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->lokasi ?? old('lokasi') }}}">
        <label for="name">Tanggal Kegiatan</label>
        <input type="date" id="tanggal_kegiatan" name="tanggal_kegiatan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_kegiatan ?? old('tanggal_kegiatan') }}}">
        <label for="name">Waktu Mulai</label>
        <input type="text" id="waktu_mulai" name="waktu_mulai" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->waktu_mulai ?? old('waktu_mulai') }}}">
        <label for="name">Waktu Selesai</label>
        <input type="text" id="waktu_selesai" name="waktu_selesai" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->waktu_selesai ?? old('waktu_selesai') }}}">
     </div>
    </div>
    <!-- end panel-body -->
    <!-- begin panel-footer -->
    <div class="panel-footer">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
    <!-- end panel-footer -->
  </div>
  <!-- end panel -->
</form>
<a href="javascript:history.back(-1);" class="btn btn-success">
  <i class="fa fa-arrow-circle-left"></i> Kembali
</a>

@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
@endpush
