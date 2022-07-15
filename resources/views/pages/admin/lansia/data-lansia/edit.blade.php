@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Data Lansia' : 'Create Data Lansia')

@push('css')
    <link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
    <link href="/assets/plugins/@danielfarrell/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="/admin/data-lansia/datalansia">Edit Data Lansia</a></li>
        <li class="breadcrumb-item active">@yield('title')</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Data Lansia</h1>
    <!-- end page-header -->


    <!-- begin panel -->
    <form
        action="{{ isset($data) ? route('admin.data-lansia.datalansia.update', $data->id) : route('admin.data-lansia.datalansia.store') }}"
        id="form" name="form" method="POST" data-parsley-validate="true">
        @csrf
        @if (isset($data))
            {{ method_field('PUT') }}
        @endif

        <div class="panel panel-inverse">
            <!-- begin panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Form @yield('title')</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                </div>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->

            <div class="panel-body">
                <div class="form-group">
                    <label for="name">Nama Lansia</label>
                    <input type="text" id="nama_lansia" name="nama_lansia" class="form-control" autofocus
                        data-parsley-required="true" value="{{ $data->nama_lansia ?? old('nama_lansia') }}">
                    <label for="name">Email</label>
                    <input type="text" id="email" name="email" class="form-control" autofocus
                        data-parsley-required="true" value="{{ $data->email ?? old('email') }}">
                    <label for="name">No HP</label>
                    <input type="text" id="no_hp" name="no_hp" class="form-control" autofocus
                        data-parsley-required="true" value="{{ $data->no_hp ?? old('no_hp') }}">

                    <?php
                    error_reporting(0);
                    $conn = mysqli_connect('localhost', 'root', 'root', 'posyandu');
                    $carikode = mysqli_query($conn, 'SELECT no_kms from data_lansia');
                    $datakode = mysqli_fetch_array($carikode);
                    $jumlah_data = mysqli_num_rows($carikode);
                    if ($datakode) {
                        $nilaikode = substr($jumlah_data[0], 3);
                        $kode = (int) $nilaikode;
                        $kode = $jumlah_data + 1;
                        $nokms = 'LS-' . str_pad($kode, 3, '0', STR_PAD_LEFT);
                    } else {
                        $nokms = 'LS-001';
                    }
                    ?>

                    <label for="name">No KMS</label>
                    <input type="text" name="no_kms" class="form-control" value="{{ $data->no_kms }} " readonly
                        class="form-control" name="no_kms" required="">

                    <label for="name">NIK</label>
                    <input type="text" id="NIK" name="NIK" class="form-control" autofocus
                        data-parsley-required="true" value="{{ $data->NIK ?? old('NIK') }}">
                    <label for="name">Jenis Kelamin</label>
                    <x-form.genderRadio name="jenis_kelamin"
                        selected="{{ old('jenis_kelamin') ?? ($data['jenis_kelamin'] ?? null) }}" />
                    <label for="name">ttl</label>
                    <input type="text" id="ttl" name="ttl" class="form-control" autofocus
                        data-parsley-required="true" value="{{ $data->ttl ?? old('ttl') }}">
                    <label for="name">Umur</label>
                    <input type="text" id="umur" name="umur" class="form-control" autofocus
                        data-parsley-required="true" value="{{ $data->umur ?? old('umur') }}">
                    <label for="name">Status Perkawinan</label>
                    <x-form.Dropdown name="status_perkawinan" :options="$statuskawins"
                        selected="{{ old('status_perkawinan') ?? ($data['status_perkawinan'] ?? null) }}" required />
                    <label for="name">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="form-control" autofocus
                        data-parsley-required="true" value="{{ $data->alamat ?? old('alamat') }}">
                    <label for="name">Agama</label>
                    {{-- <div class="col-lg-8">
                        <select class="combobox">
                            <option value="{{ $data->agama ?? old('agama') }}">Islam</option>
                            <option value="{{ $data->agama ?? old('agama') }}">Kristen</option>
                            <option value="{{ $data->agama ?? old('agama') }}">Hindu</option>
                            <option value="{{ $data->agama ?? old('agama') }}">Budha</option>
                            <option value="{{ $data->agama ?? old('agama') }}">Katolik</option>

                        </select>
                    </div> --}}
                    <input type="text" id="agama" name="agama" class="form-control" autofocus
                        data-parsley-required="true" value="{{ $data->agama ?? old('agama') }}">
                    <label for="name">Pendidikan Terakhir</label>
                    <x-form.Dropdown name="pendidikan_terakhir" :options="$pendidikans"
                        selected="{{ old('pendidikan_terakhir') ?? ($data['pendidikan_terakhir'] ?? null) }}"
                        required />
                    <label for="name">Golongan Darah</label>
                    <x-form.Dropdown name="golongan_darah" :options="$goldas"
                        selected="{{ old('golongan_darah') ?? ($data['golongan_darah'] ?? null) }}" required />
                    <label for="name">Jaminan Kesehatan</label>
                    <x-form.Dropdown name="jaminan_kesehatan" :options="$jaminankesehatans"
                        selected="{{ old('jaminan_kesehatan') ?? ($data['jaminan_kesehatan'] ?? null) }}" required />
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
    <script src="/assets/plugins/@danielfarrell/bootstrap-combobox/js/bootstrap-combobox.js"></script>
@endpush
