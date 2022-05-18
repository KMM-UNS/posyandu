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
<form action="{{ isset($data) ? route('admin.data-ibu.ibuhamilperiksa.update', $data->id) : route('admin.data-ibu.ibuhamilperiksa.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
                                <input type="text" id="nama" name="nama" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama ?? old('nama') }}}">
                            </div>
                            <div class="col-md-1 my-auto">
                                <label for="name"><b>Keluhan</b></label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="keluhan" name="keluhan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->keluhan ?? old('keluhan') }}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-1 my-auto">
                                <label for="name"><b>Tanggal Kembali</b></label>
                            </div>
                            <div class="col-md-5">
                                <input type="date" id="tanggal_kembali" name="tanggal_kembali" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_kembali ?? old('tanggal_kembali') }}}">
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
                                <label for="name"><b>Tenaga Kesehatan</b></label>
                            </div>
                            <div class="col-md-5">
                                <x-form.Dropdown name="tenaga_kesehatan" :options="$datatenaga" selected="{{{ old('tenaga_kesehatan') ?? ($data['nama_id'] ?? null) }}}" required />
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