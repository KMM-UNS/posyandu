@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Pantauan KMS' : 'Create Pantauan KMS' )

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
<form action="{{ isset($data) ? route('admin.data-lansia.pantauankms.update', $data->id) : route('admin.data-lansia.pantauankms.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
        <label for="name">Tanggal Pemeriksaan</label>
        <input type="date" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_pemeriksaan ?? old('tanggal_pemeriksaan') }}}">
        <label for="name">Nama Lansia</label>
        <x-form.Dropdown name="nama_lansia1" :options="$nama_lansia" selected="{{{ old('nama_lansia1') ?? ($data['nama_lansia1'] ?? null) }}}" required />
        <label for="name">Kegiatan Sehari-hari</label>
        <input type="text" id="kegiatan_harian" name="kegiatan_harian" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->kegiatan_harian ?? old('kegiatan_harian') }}}">
        <label for="name">Status Mental</label>
        <input type="text" id="status_mental" name="status_mental" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->status_mental ?? old('status_mental') }}}">
        <label for="name">Indeks Massa Tubuh</label>
        <input type="text" id="indeks_massa_tubuh" name="indeks_massa_tubuh" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->indeks_massa_tubuh ?? old('indeks_massa_tubuh') }}}">
        <label for="name">Tekanan Darah</label>
        <input type="text" id="tekanan_darah" name="tekanan_darah" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tekanan_darah ?? old('tekanan_darah') }}}">
        <label for="name">Hemoglobin</label>
        <input type="text" id="hemoglobin" name="hemoglobin" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->hemoglobin ?? old('hemoglobin') }}}">
        <label for="name">Reduksi Urine</label>
        <input type="text" id="reduksi_urine" name="reduksi_urine" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->reduksi_urine ?? old('reduksi_urine') }}}">
        <label for="name">Protein Urine</label>
        <input type="text" id="protein_urine" name="protein_urine" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->protein_urine ?? old('protein_urine') }}}">
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
