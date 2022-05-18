@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Periksa Ibu Hamil' : 'Create Edit Periksa Ibu Hamil' )

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
<form action="{{ isset($data) ? route('admin.data-ibu.ibuhamilperiksa.update', $data->id) : route('admin.data-ibu.ibuhamilperiksa.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
                <label for="name"><b>Nama</b></label>
                <x-form.Dropdown name="nama_id" :options="$dataibu" selected="{{{ old('nama_id') ?? ($data['nama_id'] ?? null) }}}" required />
                <label for="int"><b>Nomor Periksa</b></label>
                <input type="text" id="nomor_periksa" name="nomor_periksa" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nomor_periksa ?? old('nomor_periksa') }}}">
                <label for="name"><b>Keluhan</b></label>
                <input type="text" id="keluhan" name="keluhan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->keluhan ?? old('keluhan') }}}">
                <label for="name"><b>Tanggal Kembali</b></label>
                <input type="date" id="tanggal_kembali" name="tanggal_kembali" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_kembali ?? old('tanggal_kembali') }}}">
                <label for="name"><b>Tanggal Periksa</b></label>
                <input type="date" id="tanggal_periksa" name="tanggal_periksa" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_periksa ?? old('tanggal_periksa') }}}">
                <label for="name"><b>Tenaga Kesehatan</b></label>
                <x-form.Dropdown name="tenaga_kesehatan" :options="$datatenaga" selected="{{{ old('tenaga_kesehatan') ?? ($data['nama_id'] ?? null) }}}" required />
            </div>
        </div>
        <!-- end panel-body -->
        <!-- begin panel-footer -->
        <div class="panel-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-default">Reset</button>
            <a href="javascript:history.back(-1);" class="btn btn-success">
                <i class="fa fa-arrow-circle-left"></i> Kembali
            </a>
        </div>
        <!-- end panel-footer -->

    </div>
    <!-- end panel -->

</form>

@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
@endpush