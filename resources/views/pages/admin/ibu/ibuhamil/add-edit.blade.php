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
<form action="{{ isset($data) ? route('admin.data-ibu.ibunifas.update', $data->id) : route('admin.data-ibu.ibunifas.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
                <x-form.Dropdown name="nama" :options="$dataibu" selected="{{{ old('nama') ?? ($data['nama'] ?? null) }}}" required />
                <label for="name">Tanggal Periksa</label>
                <input type="date" id="tanggal_periksa" name="tanggal_periksa" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_periksa ?? old('tanggal_periksa') }}}">
                <label for="name">Tinggi Badan</label>
                <input type="text" id="tinggi_badan" name="tinggi_badan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tinggi_badan ?? old('tinggi_badan') }}}">
                <label for="name">Lila</label>
                <input type="text" id="lila_ibu" name="lila_ibu" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->lila_ibu ?? old('lila_ibu') }}}">
                <label for="name">Penyakit</label>
                <input type="text" id="riwayat_kesehatanibu_id" name="riwayat_kesehatanibu_id" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->riwayat_kesehatanibu_id ?? old('riwayat_kesehatanibu_id') }}}">
                <label for="name">Status Imunisasi</label>
                <input type="text" id="status_imunisasi" name="status_imunisasi" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->status_imunisasi ?? old('status_imunisasi') }}}">
                <label for="name">Perilaku Beresiko</label>
                <input type="text" id="riwayat_beresiko" name="riwayat_beresiko" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->riwayat_beresiko ?? old('riwayat_beresiko') }}}">
                <label for="name">Riwayat Kehamilan</label>
                <input type="text" id="riwayat_kehamilan" name="riwayat_kehamilan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->riwayat_kehamilan ?? old('riwayat_kehamilan') }}}">
                <label for="name">TT Ke-</label>
                <x-form.Dropdown name="tt_ke" :options="$dataimunisasi" selected="{{{ old('tt_ke') ?? ($data['tt_ke'] ?? null) }}}" required />
                <label for="name">Kader</label>
                <x-form.Dropdown name="kader" :options="$kader" selected="{{{ old('kader') ?? ($data['kader'] ?? null) }}}" required />
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