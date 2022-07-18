@extends('layouts.user')

@push('css')
    <link href="/assets/plugins/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media='print' />
    <link href="/assets/plugins/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
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
    <form
        action="{{ isset($data) ? route('user.userlansia.biodatalansia.update', $data->id) : route('user.userlansia.biodatalansia.store') }}"
        id="form" name="form" method="POST" data-parsley-validate="true" enctype="multipart/form-data">
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
                    <div class="row">
                        <div class="col-md-1">
                            <label for="name">Nama Lansia</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="nama_lansia" name="nama_lansia" class="form-control" autofocus
                                data-parsley-required="true" value="{{ $data->nama_lansia ?? old('nama_lansia') }}">
                        </div>
                        <div class="col-md-1">
                            <label for="name">Email</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="email" name="email" class="form-control" autofocus
                                data-parsley-required="true" value="{{ $data->email ?? old('email') }}">
                        </div>
                        <div class="col-md-1">
                            <label for="name">No HP</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="no_hp" name="no_hp" class="form-control" autofocus
                                data-parsley-required="true" value="{{ $data->no_hp ?? old('no_hp') }}">
                        </div>
                        <div class="col-md-1">
                            <label for="name">Foto</label>
                        </div>
                        <div class="col-md-3">
                            <input type="file" id="foto_lansia" name="foto_lansia" class="form-control" autofocus
                                data-parsley-required="true" value="{{ $data->foto_lansia ?? old('foto_lansia') }}">
                        </div>
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
                            $no_kms = 'LS-' . str_pad($kode, 3, '0', STR_PAD_LEFT);
                        } else {
                            $no_kms = 'LS-001';
                        }
                        ?>

                        {{-- <div class="col-md-1">
                            <label for="name">No KMS</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="no_kms" name="no_kms" class="form-control" autofocus
                                data-parsley-required="true" value="{{ $data->no_kms ?? old('no_kms') }}">
                </div> --}}
                        <div class="col-md-1">
                            <label for="name">NIK</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="NIK" name="NIK" class="form-control" autofocus
                                data-parsley-required="true" value="{{ $data->NIK ?? old('NIK') }}">
                        </div>
                        <div class="col-md-1">
                            <label for="name">Jenis Kelamin</label>
                        </div>
                        <div class="col-md-3">
                            <x-form.genderRadio name="jenis_kelamin"
                                selected="{{ old('jenis_kelamin') ?? ($data['jenis_kelamin'] ?? null) }}" />
                        </div>
                        <div class="col-md-1">
                            <label for="name">No KMS</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="no_kms" class="form-control" value="<?php echo $no_kms; ?>" readonly
                                class="form-control" name="no_kms" required="">
                        </div>
                        <div class="col-md-1">
                            <label for="name">TTL</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="ttl" name="ttl" class="form-control" autofocus
                                data-parsley-required="true" value="{{ $data->ttl ?? old('ttl') }}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-1">
                            <label for="name">Umur</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="umur" name="umur" class="form-control" autofocus
                                data-parsley-required="true" value="{{ $data->umur ?? old('umur') }}">

                        </div>
                        <div class="col-md-1">
                            <label for="name">Status Perkawinan</label>
                        </div>
                        <div class="col-md-3">
                            <x-form.Dropdown name="status_perkawinan" :options="$statuskawins"
                                selected="{{ old('status_perkawinan') ?? ($data['status_perkawinan'] ?? null) }}"
                                required />
                        </div>
                        <div class="col-md-1">
                            <label for="name">Alamat</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="alamat" name="alamat" class="form-control" autofocus
                                data-parsley-required="true" value="{{ $data->alamat ?? old('alamat') }}">
                        </div>
                        <div class="col-md-1">
                            <label for="name">Agama</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="agama" name="agama" class="form-control" autofocus
                                data-parsley-required="true" value="{{ $data->agama ?? old('agama') }}">
                        </div>
                        <div class="col-md-1">
                            <label for="name">Pendidikan Terakhir</label>
                        </div>
                        <div class="col-md-3">
                            <x-form.Dropdown name="pendidikan_terakhir" :options="$pendidikans"
                                selected="{{ old('pendidikan_terakhir') ?? ($data['pendidikan_terakhir'] ?? null) }}"
                                required />
                        </div>
                        <div class="col-md-1">
                            <label for="name">Golongan Darah</label>
                        </div>
                        <div class="col-md-3">
                            <x-form.Dropdown name="golongan_darah" :options="$goldas"
                                selected="{{ old('golongan_darah') ?? ($data['golongan_darah'] ?? null) }}" required />
                        </div>
                        <div class="col-md-1">
                            <label for="name">Jaminan Kesehatan</label>
                        </div>
                        <div class="col-md-3">
                            <x-form.Dropdown name="jaminan_kesehatan" :options="$jaminankesehatans"
                                selected="{{ old('jaminan_kesehatan') ?? ($data['jaminan_kesehatan'] ?? null) }}"
                                required />
                        </div>

                    </div>
                </div>
                {{-- <div class="form-group">
          <div class="row">
            <div class="col-md-3">
                <input type="text" id="golongan_darah" name="golongan_darah" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->golongan_darah ?? old('golongan_darah') }}}">
    </div>
    <div class="col-md-1">
        <label for="name">Jaminan Kesehatan</label>
    </div>
    <div class="col-md-3">
        <input type="text" id="jaminan_kesehatan" name="jaminan_kesehatan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jaminan_kesehatan ?? old('jaminan_kesehatan') }}}">
    </div>
    </div>
    </div> --}}
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
    <script src="/assets/plugins/moment/moment.js"></script>
    <script src="/assets/plugins/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="/assets/js/demo/calendar.demo.js"></script>
@endpush
