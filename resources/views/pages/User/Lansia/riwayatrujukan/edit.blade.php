@extends('layouts.user')

@push('css')
    <link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <h1 class="page-header">Riwayat Rujukan Lansia<small> @yield('title')</small></h1>
    <form
        action="{{ isset($data) ? route('user.userlansia.riwayatrujukan.update', $data->id) : route('user.userlansia.riwayatrujukan.store') }}"
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
                    <?php
                    error_reporting(0);
                    $conn = mysqli_connect('localhost', 'root', 'root', 'posyandu');
                    $carikode = mysqli_query($conn, 'SELECT no_surat from rujukan_lansia');
                    $datakode = mysqli_fetch_array($carikode);
                    $jumlah_data = mysqli_num_rows($carikode);
                    if ($datakode) {
                        $nilaikode = substr($jumlah_data[0], 3);
                        $kode = (int) $nilaikode;
                        $kode = $jumlah_data + 1;
                        $no_surat = 'RJ2022' . str_pad($kode, 3, '0', STR_PAD_LEFT);
                    } else {
                        $no_surat = 'RJ2022001';
                    }
                    ?>

                    <label for="name">No Surat</label>
                    <input type="text" name="no_surat" class="form-control" value="{{ $data->no_surat }}" readonly
                        class="form-control" name="no_surat" required="">
                    {{-- <label for="name">No KMS</label>
                    <input type="text" id="no_kms" name="no_kms" class="form-control" autofocus
                        data-parsley-required="true" value="{{ $data->no_kms ?? old('no_kms') }}"> --}}
                    <label for="name">Kepada</label>
                    <x-form.Dropdown name="kepada" :options="$instansi"
                        selected="{{ old('kepada') ?? ($data['kepada'] ?? null) }}" required />
                    <label for="name">Tanggal Surat</label>
                    <input type="date" id="tanggal_surat" name="tanggal_surat" class="form-control" autofocus
                        data-parsley-required="true" value="{{ $data->tanggal_surat ?? old('tanggal_surat') }}">
                    <input type="hidden" id="namalansia" name="namalansia" class="form-control" autofocus
                        data-parsley-required="true" value="{{ $nama_lansia }}">
                    <label for="name">Umur</label>
                    <input type="text" id="umur" name="umur" class="form-control" autofocus
                        data-parsley-required="true" value="{{ $data->umur ?? old('umur') }}">
                    <label for="name">Jenis Kelamin</label>
                    <div class="col-md-3">
                        <x-form.genderRadio name="jeniskelamin"
                            selected="{{ old('jeniskelamin') ?? ($data['jeniskelamin'] ?? null) }}" />
                    </div>
                    <label for="name">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="form-control" autofocus
                        data-parsley-required="true" value="{{ $data->alamat ?? old('alamat') }}">
                    <label for="name">Keluhan</label>
                    <input type="text" id="keluhan" name="keluhan" class="form-control" autofocus
                        data-parsley-required="true" value="{{ $data->keluhan ?? old('keluhan') }}">
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
    </form>
@endsection
@push('scripts')
    <script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
@endpush
