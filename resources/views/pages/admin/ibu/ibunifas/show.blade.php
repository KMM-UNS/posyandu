@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Detail Evaluasi Kesehatan' : 'Detail Evaluasi Ke' )

@push('css')
<link href="{{ asset('/assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
    <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">@yield('title')</h1>
<!-- end page-header -->


<!-- begin panel -->
<form action="{{ isset($data) ? route('admin.data-ibu.ibuhamil.update', $data->id) : route('admin.data-ibu.ibuhamil.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
    @csrf
    @if(isset($data))
    {{ method_field('PUT') }}
    @endif
    <div class="row">
        <div class="col-xl-7 ui-sortable">
            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Form @yield('title')</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                </div>
                <!-- endp panel-heading -->
                <!-- begin panel-bpdy -->
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-1 my-auto">
                                <label for="name"><b>Nama</b></label>
                            </div>
                            <div class="col-md-5">
                                <x-form.Dropdown name="nama" :options="$dataibu" selected="{{{ old('nama') ?? ($data['nama'] ?? null) }}}" required />
                            </div>
                            <div class="col-md-1 my-auto">
                                <label for="name"><b>Tanggal Periksa</b></label>
                            </div>
                            <div class="col-md-5">
                                <input type="date" id="tanggal_periksa" name="tanggal_periksa" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_periksa ?? old('tanggal_periksa') }}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-1 my-auto">
                                <label for="name"><b>Tinggi Badan</b></label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="tinggi_badan" name="tinggi_badan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tinggi_badan ?? old('tinggi_badan') }}}">
                            </div>
                            <div class="col-md-1 my-auto">
                                <label for="name"><b>Berat Badan</b></label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="berat_badan" name="berat_badan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->berat_badan ?? old('berat_badan') }}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-1 my-auto">
                                <label for="name"><b>Riwayat Kesehatan</b></label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="riwayat_kesehatanibu" name="riwayat_kesehatanibu" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->riwayat_kesehatanibu ?? old('riwayat_kesehatanibu') }}}">
                            </div>
                            <div class="col-md-1 my-auto">
                                <label for="name"><b> Status Pemberian Vitamin</b></label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="status_pemberian_vitamin" name="status_pemberian_vitamin" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->status_pemberian_vitamin ?? old('status_pemberian_vitamin') }}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-1 my-auto">
                                <label for="name"><b>Golongan Darah</b></label>
                            </div>
                            <div class="col-md-5">
                                <x-form.Dropdown name="golongan_darah_id" :options="$golda" selected="{{{ old('golongan_darah_id') ?? ($data['golongan_darah_id'] ?? null) }}}" required />
                            </div>
                            <div class="col-md-1 my-auto">
                                <label for="name"><b>Riwayat Penyakit Keluarga</b></label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="riwayat_penyakit_keluarga" name="riwayat_penyakit_keluarga" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->riwayat_penyakit_keluarga ?? old('riwayat_penyakit_keluarga') }}}">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <div class="row">
                            <div class="col-md-1 my-auto">
                                <label for="name"><b>Riwayat Kehamilan dan Persalinan</b></label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="riwayat_kehamilan" name="riwayat_kehamilan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->riwayat_kehamilan ?? old('riwayat_kehamilan') }}}">
                            </div>

                        </div>
                    </div> -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-1">
                                <label for="name"><b>Kader</b></label>
                            </div>
                            <div class="col-md-5">
                                <x-form.Dropdown name="kader" :options="$kader" selected="{{{ old('kader') ?? ($data['kader'] ?? null) }}}" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="javascript:history.back(-1);" class="btn btn-success">
                        <i class="fa fa-arrow-circle-left"></i> Kembali
                    </a>
                </div>
                <!-- 
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </div> -->
                <!-- end panel-footer -->
            </div>
        </div>
        <!-- form satu end -->
        <!-- detail status imunisasi begin -->
        <div class="col-xl-5 ui-sortable">
            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Status Imunisasi</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <!-- panel body -->
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>


@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
<script src="{{ asset('/assets/js/custom/string-helper.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#from-datepicker").datepicker({
            format: 'yyyy-mm-dd'
        });
        $("#from-datepicker").on("change", function() {
            var fromdate = $(this).val();
            alert(fromdate);
        });
    });
</script>
@endpush