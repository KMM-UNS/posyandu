@extends('layouts.user')

@section('title', 'Biodata')


@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Master Data</a></li>
        <li class="breadcrumb-item active">@yield('title')</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Master Data<small></small></h1>
    <!-- end page-header -->

    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">Detail Data</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                        class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i
                        class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
                        class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i
                        class="fa fa-times"></i></a>
            </div>
        </div>

        {{-- @foreach ($data as $datas) --}}
        @if (empty($data) || $data->count() == 0)
            <div class="panel-body">
                <h1 class="text-center">Anda Belum Mengisi Biodata !</h1>
            </div>
        @else
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="panel-body" style="font-size: 14px">
                            <div class="row mx-auto">
                                <div class="col-md-6">
                                    <div>
                                        <div>
                                            <label>Foto</label>
                                            <p class="font-weight-bold">
                                                <td>
                                                    <img src="{{ asset('fotolansia/' . $data->foto_lansia) }}"
                                                        style="width: 150px;" alt="...">
                                                </td>
                                            </p>
                                        </div>
                                        <div>
                                            <label>Nama</label>
                                            <p class="font-weight-bold">{{ $data->nama_lansia }}</p>
                                        </div>
                                        <label>Email</label>
                                        <p class="font-weight-bold">{{ $data->email }}</p>
                                    </div>
                                    <div>
                                        <label>NIK</label>
                                        <p class="font-weight-bold">{{ $data->NIK }}</p>
                                    </div>
                                    <div>
                                        <label>No KMS</label>
                                        <p class="font-weight-bold">{{ $data->no_kms }}</p>
                                    </div>
                                    <div>
                                        <label>Jenis Kelamin</label>
                                        <p class="font-weight-bold">{{ $data->jenis_kelamin }}</p>
                                    </div>
                                    <div>
                                        <label>Tempat Tanggal Lahir</label>
                                        <p class="font-weight-bold">{{ $data->ttl }}</p>
                                    </div>
                                    <div>
                                        <label>Umur</label>
                                        <p class="font-weight-bold">{{ $data->umur }}</p>
                                    </div>
                                    <div>
                                        <label>Status Perkawinan</label>
                                        <p class="font-weight-bold">{{ $data->statuskawin->nama }}</p>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="panel-body" style="font-size: 14px">
                                        <div class="row mx-auto">
                                            <div class="col-md-6">
                                                <div>
                                                    <label>Alamat</label>
                                                    <p class="font-weight-bold">{{ $data->alamat }}</p>
                                                </div>
                                                <div>
                                                    <label>Agama</label>
                                                    <p class="font-weight-bold">{{ $data->agama }}</p>
                                                </div>
                                                <div>
                                                    <label>Pendidikan Terakhir</label>
                                                    <p class="font-weight-bold">{{ $data->pendidikan->nama }}
                                                    </p>
                                                </div>
                                                <div>
                                                    <label>Golongan Darah</label>
                                                    <p class="font-weight-bold">{{ $data->golongandarah->nama }}</p>
                                                </div>
                                                <div>
                                                    <label>Jaminan Kesehatan</label>
                                                    <p class="font-weight-bold">
                                                        {{ $data->jaminankesehatan->jaminan_kesehatan_id }}</p>
                                                </div>
                                                <div>
                                                    <label>No HP</label>
                                                    <p class="font-weight-bold">{{ $data->no_hp }}</p>
                                                    {{-- </div>
                                                    <a class="btn btn-secondary" role="button">Edit Data</a>
                                                </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endif
        {{-- @endforeach --}}
        <br>
        <div class="panel-footer">
            <a href="{{ route('user.userlansia.biodatalansia.create') }}"><button type="submit"
                    class="btn btn-primary">Isi
                    Biodata</button></a>
            <button type="reset" class="btn btn-default">Reset</button>
        </div>
    @endsection
