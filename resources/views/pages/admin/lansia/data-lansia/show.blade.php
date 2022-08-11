@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Data Lansia' : 'Create Data Lansia')

@push('css')
    <link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/data-lansia/datalansia">Data Lansia</a></li>
        <li class="breadcrumb-item active">Detail Data Lansia</li>
    </ol>
    <!-- end breadcrumb -->

    <!-- begin panel -->
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
        <div class="panel-body">

            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="panel-body" style="font-size: 14px">
                            <div class="row mx-auto">
                                <div class="col-md-6">
                                    <div>
                                        <label>Foto</label>
                                        <p class="font-weight-bold">
                                            <td>
                                                <img src="{{ asset('fotolansia/' . $data['foto_lansia']) }}"
                                                    style="width: 150px;" alt="...">
                                            </td>
                                        </p>
                                    </div>
                                    <div>
                                        <label>Nama</label>
                                        <p class="font-weight-bold">{{ $data['nama_lansia'] }}</p>
                                    </div>
                                    <div>
                                        <label>Email</label>
                                        <p class="font-weight-bold">{{ $data['email'] }}</p>
                                    </div>
                                    <div>
                                        <label>NIK</label>
                                        <p class="font-weight-bold">{{ $data['NIK'] }}</p>
                                    </div>
                                    <div>
                                        <label>No KMS</label>
                                        <p class="font-weight-bold">{{ $data['no_kms'] }}</p>
                                    </div>
                                    <div>
                                        <label>Jenis Kelamin</label>
                                        <p class="font-weight-bold">{{ $data['jenis_kelamin'] }}</p>
                                    </div>
                                    <div>
                                        <label>Tempat Tanggal Lahir</label>
                                        <p class="font-weight-bold">{{ $data['ttl'] }}</p>
                                    </div>
                                    <div>
                                        <label>Umur</label>
                                        <p class="font-weight-bold">{{ $data['umur'] }}</p>
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
                                                    <p class="font-weight-bold">{{ $data['alamat'] }}</p>
                                                </div>
                                                <div>
                                                    <label>Agama</label>
                                                    <p class="font-weight-bold">{{ $data->agama }}</p>
                                                </div>
                                                <div>
                                                    <label>Pendidikan Terakhir</label>
                                                    <p class="font-weight-bold">{{ $data->pendidikan->nama }}</p>
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
                                                    <p class="font-weight-bold">{{ $data['no_hp'] }}</p>
                                                </div>
                                                {{-- <a class="btn btn-secondary" href="/admin/data-lansia/datalansia/1/edit"
                                                    role="button">Edit Data</a> --}}



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end panel -->
@endsection
