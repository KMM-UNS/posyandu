@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Data Ibu' : 'Create Data Ibu' )

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
<form action="{{ isset($data) ? route('admin.data-ibu.dataibu.update', $data->id) : route('admin.data-ibu.dataibu.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
                <label for="name">NIK</label>
                <input type="text" id="nik" name="nik" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nik ?? old('nik') }}}">
                <label for="name">Pembiayaan</label>
                <input type="text" id="pembiayaan" name="pembiayaan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->pembiayaan ?? old('pembiayaan') }}}">
                <label for="name">Golongan Darah</label>
                <x-form.Dropdown name="golongan_darah" :options="$golda" selected="{{{ old('golongan_darah') ?? ($data['golongan_darah'] ?? null) }}}" required />
                <label for="name">TTL</label>
                <input type="text" id="ttl" name="ttl" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->ttl ?? old('ttl') }}}">
                <label for="name">Pendidikan</label>
                <input type="text" id="pendidikan" name="pendidikan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->pendidikan ?? old('pendidikan') }}}">
                <label for="name">Pekerjaan</label>
                <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->pekerjaan ?? old('pekerjaan') }}}">
                <label for="name">Alamat Rumah</label>
                <input type="text" id="alamat_rumah" name="alamat_rumah" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->alamat_rumah ?? old('alamat_rumah') }}}">
                <label for="name">Nomor Telepon</label>
                <input type="text" id="no_telepon" name="no_telepon" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->no_telepon ?? old('no_telepon') }}}">
                <label for="name">Status</label>
                <input type="text" id="status" name="status" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->status ?? old('status') }}}">
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