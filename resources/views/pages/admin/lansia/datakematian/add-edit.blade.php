@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Data Kematian Lansia' : 'Create Kematian Data Lansia' )

@push('css')
<link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
@endpush

@section('content')

<!-- begin page-header -->
<h1 class="page-header">Data KematianLansia<small> @yield('title')</small></h1>
<!-- end page-header -->

<!-- begin panel -->
<form action="{{ isset($data) ? route('admin.data-lansia.datakematianlansia.update', $data->id) : route('admin.data-lansia.datakematianlansia.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
        <div class="panel-body">
            <div class="form-group">
              <label for="name">Nama Lansia</label>
              <x-form.Dropdown name="nama_jenazah" :options="$nama_lansia" selected="{{{ old('nama_jenazah') ?? ($data['nama_jenazah'] ?? null) }}}" required />
              <label for="name">Jenis Kelamin</label>
              <x-form.genderRadio name="jenis_kelamin" selected="{{{ old('jenis_kelamin') ?? ($data['jenis_kelamin'] ?? null) }}}"/>
              <label for="name">Tanggal Lahir</label>
              <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tgl_lahir ?? old('tgl_lahir') }}}">
              <label for="name">Tanggal Kematian</label>
              <input type="date" id="tgl_meninggal" name="tgl_meninggal" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tgl_meninggal ?? old('tgl_meninggal') }}}">
            
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
