@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Daftar Penyakit' : 'Create Daftar Penyakit' )

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
<form action="{{ isset($data) ? route('admin.master-data.detailimunisasi.update', $data->id) : route('admin.master-data.detailimunisasi.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
                <label for="name">TT Ke-</label>
                <input type="text" id="tt_ke" name="tt_ke" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tt_ke ?? old('tt_ke') }}}">
                <label for="name">Selang Waktu</label>
                <input type="text" id="selang_waktu" name="selang_waktu" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->selang_waktu ?? old('selang_waktu') }}}">
                <label for="name">Perlindungan</label>
                <input type="text" id="perlindungan" name="perlindungan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->perlindungan ?? old('perlindungan') }}}">
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