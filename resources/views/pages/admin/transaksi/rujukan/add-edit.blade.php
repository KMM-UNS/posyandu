@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Data Rujukan' : 'Create Edit Data Rujukan' )

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
<form action="{{ isset($data) ? route('admin.data-transaksi.rujukan.update', $data->id) : route('admin.data-transaksi.rujukan.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
                                {{-- <label for="name">Kode Surat</label> --}}
                            </div>
                            <div class="col-md-8">
                                <input type="hidden" id="kode_surat" name="kode_surat" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->kode_surat ?? old('kode_surat') }}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name"> Tanggal Surat</label>
                            </div>
                            <div class="col-md-8">
                                <input type="date" id="tanggal_surat" name="tanggal_surat" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_surat ?? old('tanggal_surat') }}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name"> Kepada</label>
                            </div>
                            <div class="col-md-8">
                                <x-form.Dropdown name="kepada" :options="$instansi" selected="{{{ old('kepada') ?? ($data['kepada'] ?? null) }}}" required />
                                {{-- <input type="text" id="kepada" name="kepada" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->kepada ?? old('kepada') }}}"> --}}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name">Nama Anak</label>
                            </div>
                            <div class="col-md-8">
                                <x-form.Dropdown name="nama" :options="$dataanak" selected="{{{ old('nama') ?? ($data['nama'] ?? null) }}}" required />
                                {{-- <x-form.Dropdown name="nama" :options="$imunisasi" selected="{{{ old('nama') ?? ($data['nama'] ?? null) }}}" required /> --}}
                                {{-- <input type="text" id="nama" name="nama" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama ?? old('nama') }}}"> --}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name">Umur</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="umur" name="umur" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->umur ?? old('umur') }}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name">Alamat</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="alamat" name="alamat" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->alamat ?? old('alamat') }}}">
                            </div>
                        </div>
                    </div>

                    {{-- <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <label for="name">Keterangan Rujukan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="keterangan_rujukan" name="keterangan_rujukan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->keterangan_rujukan ?? old('keterangan_rujukan') }}}">
                            </div>
                        </div>
                    </div> --}}
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
                    <h4 class="panel-title">Status Imunisasi Anak</h4>
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
                            Evaluasi Imunisasi Anak
                        </h4>
                        <br>
                        <div class="row">
                            <div class="col-md-7 my-auto">
                                <label for="name">Berat Badan Balita Sangat Kurang </label>
                            </div>
                            <div class="col-md-5">
                                <x-form.sakitRadio name="bb_turun" selected="{{{ old('bb_turun') ?? ($data['bb_turun'] ?? null) }}}"/>
                                {{-- <input type="text" id="bb_turun" name="bb_turun" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->bb_turun ?? old('bb_turun') }}}"> --}}
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-7 my-auto">
                                <label for="name">Balita terlalu gemuk</label>
                            </div>
                            <div class="col-md-5">
                                <x-form.sakitRadio name="bb_naik" selected="{{{ old('bb_naik') ?? ($data['bb_naik'] ?? null) }}}"/>
                                {{-- <input type="text" id="bb_naik" name="bb_naik" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->bb_naik ?? old('bb_naik') }}}"> --}}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-7 my-auto">
                                <label for="name">Balita sakit (Batuk, Flu, Demam, Diare)</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="keluhan" name="keluhan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->keluhan ?? old('keluhan') }}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-7 my-auto">
                                <label for="name">Keterangan Rujukan</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="keterangan_rujukan" name="keterangan_rujukan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->keterangan_rujukan ?? old('keterangan_rujukan') }}}">
                            </div>
                        </div>
                    </div>

                    {{-- <div class="form-group">
                        <div class="row">
                            <div class="col-md-7 my-auto">
                                <label for="name">Keterangan Rujukan</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="keterangan_rujukan" name="keterangan_rujukan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->keterangan_rujukan ?? old('keterangan_rujukan') }}}">
                            </div>
                        </div>
                    </div>

                <div class="form-group">
                        <div class="row">
                            <div class="col-md-7 my-auto">
                                <label for="name">Tenaga Kesehatan</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="tenaga_kesehatan" name="tenaga_kesehatan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tenaga_kesehatan ?? old('tenaga_kesehatan') }}}">
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</form>






@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
@endpush

