@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Data Ibu Hamil' : 'Create Edit Data Ibu Hamil' )

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
<form action="{{ isset($data) ? route('admin.data-ibu.ibuhamil.update', $data->id) : route('admin.data-ibu.ibuhamil.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
                <label for="name">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama ?? old('nama') }}}">
                <label for="name">Golongan Darah</label>
                <x-form.Dropdown name="golongan_darah" :options="$golda" selected="{{{ old('golongan_darah') ?? ($data['golongan_darah'] ?? null) }}}" required />
                <label for="name">Tanggal Periksa</label>
                <input type="text" id="tanggal_periksa" name="tanggal_periksa" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_periksa ?? old('tanggal_periksa') }}}">
                <label for="name">Tinggi Badan</label>
                <input type="text" id="tinggi_badan" name="tinggi_badan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tinggi_badan ?? old('tinggi_badan') }}}">
                <label for="name">Berat Badan</label>
                <input type="text" id="berat_badan" name="berat_badan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->berat_badan ?? old('berat_badan') }}}">
                <label for="name">Riwayat Kesehatan</label>
                <input type="text" id="riwayat_kesehatanibu" name="riwayat_kesehatanibu" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->riwayat_kesehatanibu ?? old('riwayat_kesehatanibu') }}}">
                <label for="name">Status Pemberian Vitamin</label>
                <x-form.Dropdown name="status_pemberian_vitamin" :options="$vitamin" selected="{{{ old('status_pemberian_vitamin') ?? ($data['status_pemberian_vitamin'] ?? null) }}}" required />
                <label for="name">Riwayat Penyakit Keluarga</label>
                <input type="text" id="riwayat_penyakit_keluarga" name="riwayat_penyakit_keluarga" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->riwayat_penyakit_keluarga ?? old('riwayat_penyakit_keluarga') }}}">
                <label for="name">Keluhan Ibu Hamil</label>
                <input type="text" id="keluhan_ibu_hamil" name="keluhan_ibu_hamil" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->keluhan_ibu_hamil ?? old('keluhan_ibu_hamil') }}}">
                <label for="name">Tenaga Kesehatan</label>
                <input type="text" id="tenaga_kesehatan" name="tenaga_kesehatan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tenaga_kesehatan ?? old('tenaga_kesehatan') }}}">
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