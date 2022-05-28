@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Keluhan Tindakan' : 'Create Keluhan Tindakan' )

@push('css')
<link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb  float-xl-right">
  <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Lansia</a></li>
  <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Lansia<small> @yield('title')</small></h1>
<!-- end page-header -->


<!-- begin panel -->
<form action="{{ isset($data) ? route('admin.data-lansia.keluhantindakan.update', $data->id) : route('admin.data-lansia.keluhantindakan.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
        <x-form.Dropdown name="nama_lansia_id" :options="$nama_lansia" selected="{{{ old('nama_lansia_id') ?? ($data['nama_lansia_id'] ?? null) }}}" required />
        <label for="name">Nama Pemeriksa</label>
        <x-form.Dropdown name="nama_pemeriksa" :options="$kaderid" selected="{{{ old('nama_pemeriksa') ?? ($data['nama_pemeriksa'] ?? null) }}}" required />
        <label for="name">Tanggal Pemeriksaan</label>
        <input type="date" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_pemeriksaan ?? old('tanggal_pemeriksaan') }}}">
        <label for="name">Keluhan</label>
        <input type="text" id="keluhan" name="keluhan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->keluhan ?? old('keluhan') }}}">
        <label for="name">Tindakan</label>
        <input type="text" id="tindakan" name="tindakan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tindakan ?? old('tindakan') }}}"> 
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
