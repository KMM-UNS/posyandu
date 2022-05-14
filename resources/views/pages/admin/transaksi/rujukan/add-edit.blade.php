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
    <div class="row">
        <div class="col-xl-6 ui-sortable">
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
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name">Kode Surat</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="kode_surat" name="kode_surat" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->kode_surat ?? old('kode_surat') }}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name"> Tanggal Surat</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="tanggal_surat" name="tanggal_surat" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_surat ?? old('tanggal_surat') }}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name"> Kode Pemeriksaan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="kode_pemeriksaan" name="kode_pemeriksaan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->kode_pemeriksaan ?? old('kode_pemeriksaan') }}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name"> Kepada</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="kepada" name="kepada" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->kepada ?? old('kepada') }}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name">Penyakit</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="penyakit" name="penyakit" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->penyakit ?? old('penyakit') }}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name">Tempat Rujukan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="tempat_rujukan" name="tempat_rujukan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tempat_rujukan ?? old('tempat_rujukan') }}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name">Alamat Penerima</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="alamat_penerima" name="alamat_penerima" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->alamat_penerima ?? old('alamat_penerima') }}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name">Keterangan Rujukan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="keterangan_rujukan" name="keterangan_rujukan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->keterangan_rujukan ?? old('keterangan_rujukan') }}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <a href="javascript:history.back(-1);" class="btn btn-success">
                        <i class="fa fa-arrow-circle-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-6 ui-sortable">
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
                        <h4>
                            Evaluasi Pemeriksaan Ibu Hamil
                        </h4>
                        <br>
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name">Nomor Pemeriksaan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="nomor_periksa" name="nomor_periksa" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nomor_periksa ?? old('nomor_periksa') }}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name">Nama Ibu</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="nama_id" name="nama_id" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama_id ?? old('nama_id') }}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name">Tanggal Pemeriksaan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="tanggal_periksa" name="tanggal_periksa" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_periksa ?? old('tanggal_periksa') }}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name">Hasil Pemeriksaan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="keluhan" name="keluhan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->keluhan ?? old('keluhan') }}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name">Tenaga Kesehatan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="tenaga_kesehatan" name="tenaga_kesehatan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tenaga_kesehatan ?? old('tenaga_kesehatan') }}}">
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
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
@endpush