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
<form action="{{ isset($data) ? route('admin.data-lansia.datalansia.update', $data->id) : route('admin.data-lansia.datalansia.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
        <label for="name">Nama Lansia</label>
        <input type="text" id="nama_lansia" name="nama_lansia" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama_lansia ?? old('nama_lansia') }}}">
        <label for="name">NIK</label>
        <input type="text" id="NIK" name="NIK" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->NIK ?? old('NIK') }}}">
        <label for="name">Jenis Kelamin</label>
        <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jenis_kelamin ?? old('jenis_kelamin') }}}">
        <label for="name">ttl</label>
        <input type="text" id="ttl" name="ttl" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->ttl ?? old('ttl') }}}">
        <label for="name">Umur</label>
        <input type="text" id="umur" name="umur" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->umur ?? old('umur') }}}">
        <label for="name">Status Perkawinan</label>
        <input type="text" id="status_perkawinan" name="status_perkawinan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->status_perkawinan ?? old('status_perkawinan') }}}">
        <label for="name">Alamat</label>
        <input type="text" id="alamat" name="alamat" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->alamat ?? old('alamat') }}}">
        <label for="name">Agama</label>
        <input type="text" id="agama" name="agama" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->agama ?? old('agama') }}}">
        <label for="name">Pendidikan Terakhir</label>
        <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->pendidikan_terakhir ?? old('pendidikan_terakhir') }}}">
        <label for="name">Golongan Darah</label>
        <input type="text" id="golongan_darah" name="golongan_darah" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->golongan_darah ?? old('golongan_darah') }}}">
        <label for="name">Jaminan Kesehatan</label>
        <input type="text" id="jaminan_kesehatan" name="jaminan_kesehatan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jaminan_kesehatan ?? old('jaminan_kesehatan') }}}">
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
