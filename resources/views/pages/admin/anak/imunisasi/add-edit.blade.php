@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Imunisasi' : 'Create Imunisasi' )

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
<form action="{{ isset($data) ? route('admin.anak-data.imunisasi.update', $data->id) : route('admin.anak-data.imunisasi.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
        <label for="name">Nama Anak</label>
        <input type="text" id="nama_anak" name="nama_anak" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama_anak ?? old('nama_anak') }}}">
        <label for="name">Jenis Kelamin</label>
        {{-- <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jenis_kelamin ?? old('jenis_kelamin') }}}"> --}}
        <x-form.genderRadio name="jenis_kelamin" selected="{{{ old('jenis_kelamin') ?? ($data['jenis_kelamin'] ?? null) }}}"/>
        <label for="name">Tanggal Imunisasi</label>
        <input type="text" id="tanggal_imunisasi" name="tanggal_imunisasi" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_imunisasi ?? old('tanggal_imunisasi') }}}">
        <label for="name">Berat Badan (Kg)</label>
        <input type="text" id="berat_badan" name="berat_badan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->berat_badan ?? old('berat_badan') }}}">
        <label for="name">Tinggi Badan (Cm)</label>
        <input type="text" id="tinggi_badan" name="tinggi_badan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tinggi_badan ?? old('tinggi_badan') }}}">
        <label for="name">Umur</label>
        <input type="text" id="umur" name="umur" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->umur ?? old('umur') }}}">
        <label for="name">Jenis Vaksin</label>
        {{-- <input type="text" id="jenis_vaksin" name="jenis_vaksin" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jenis_vaksin ?? old('jenis_vaksin') }}}"> --}}
        <x-form.Dropdown name="jenis_vaksin" :options="$jenisvaksin" selected="{{{ old('jenis_vaksin') ?? ($data['jenis_vaksin'] ?? null) }}}" required />
        <label for="name">Jadwal Vaksin</label>
        <input type="text" id="jadwal_vaksin" name="jadwal_vaksin" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jadwal_vaksin ?? old('jadwal_vaksin') }}}">
        <label for="name">Nama Kader</label>
        <input type="text" id="nama_kader" name="nama_kader" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama_kader ?? old('nama_kader') }}}">
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
