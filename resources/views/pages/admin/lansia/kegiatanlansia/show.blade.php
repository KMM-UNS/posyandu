@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Data Lansia' : 'Create Data Lansia')

@push('css')
    <link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/data-kegiatan/datakegiatanlansia">Kegiatan Lansia</a></li>
        <li class="breadcrumb-item active">Detail Kegaitan</li>
    </ol>
    <!-- end breadcrumb -->

    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">Detail Kegiatan</h4>
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
                                        <label>Nama Kegiatan</label>
                                        <p class="font-weight-bold">{{ $data['nama'] }}</p>
                                    </div>
                                    <div>
                                        <label>Deskripsi</label>
                                        <p class="font-weight-bold">{{ $data['deskripsi'] }}</p>
                                    </div>
                                    <div>
                                        <label>Lokasi</label>
                                        <p class="font-weight-bold">{{ $data['lokasi'] }}</p>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="panel-body" style="font-size: 14px">
                                        <div class="row mx-auto">
                                            <div class="col-md-6">
                                                <div>
                                                    <label>Tanggal Kegiatan</label>
                                                    <p class="font-weight-bold">{{ $data['tanggal_kegiatan'] }}</p>
                                                </div>
                                                <div>
                                                    <label>Waktu Mulai</label>
                                                    <p class="font-weight-bold">{{ $data['waktu_mulai'] }}</p>
                                                </div>
                                                <div>
                                                    <label>Waktu Selesai</label>
                                                    <p class="font-weight-bold">{{ $data['waktu_selesai'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <button class="btn btn-secondary float-right mr-4" data-toggle="modal"
                            data-target="#tambah{{ $data->id }}"> Tambah Peserta</button>
                        <div class="modal fade" id="tambah{{ $data->id }}" role="dialog" arialabelledby="modalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Data Peserta</h5>
                                        <button type="button" class="close" data-dismiss="modal" arial-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="/admin/data-kegiatan/create_peserta/{{ $data->id }}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <input type="hidden" name="kegiatan_lansia_id" value="{{ $data->id }}">
                                            <div class="form-group">
                                                <label for="name">Nama</label><br>
                                                <select name="lansia_id" class="selectpicker form-select" required
                                                aria-label=".form-select-sm example" data-live-search="true">
                                                @foreach ($data_lansia as $dl)
                                                    <option value="{{ $dl->id }}">
                                                        {{ $dl->nama_lansia }}</option>
                                                @endforeach
                                            </select><br>
                                            <label for="name">Iuran Wajib</label> <br>
                                            {{-- <input type="text"> --}}
                                            <input type="text" id="iuran_wajib" name="iuran_wajib" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->iuran_wajib ?? old('iuran_wajib') }}}">
                                            </div>
                                           
                                        
                                        
                                        </div>
                                        <button type="submit" class="btn btn-outline-primary me-1 mb-1">Tambah</button>
                                    </form>
                                </div>
                            </div>
                        </div>                   
                </div>       
    </div>
    </div>
    <div class="panel panel-inverse">
        <div class="panel-body">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="panel-body" style="font-size: 14px">
                            <table  class="table table-bordered my-5" align="center" rules="all" border="1px" style="width: 95%; margin-top: 1 rem;
    margin-bottom: 1 rem;">
                            <tr>
                                <th>No. </th>
                                <th>Nama Lansia</th>
                                <th>Status</th>
                                <th>Iuran Wajib</th>
                            </tr>
                            @foreach ($data_peserta as $dp)
                                @php
                                    $datalansia = App\Models\DataLansia::where('id', $dp->lansia_id)->first();
                                @endphp
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                <td> {{ $datalansia->nama_lansia }} </td>
                                <td> 
                                    @if($dp->status == '0')
                                    <a type="button" href="/admin/data-kegiatan/status_peserta/{{ $dp->id }}" class="btn btn-outline-primary me-1 mb-1">Hadir</a>
                                    @elseif($dp->status == '1')
                                    <a type="button"  href="/admin/data-kegiatan/status_peserta/{{ $dp->id }}"  class="btn btn-outline-primary me-1 mb-1">Tidak Hadir</a>
@endif
                                </td>
                                <td> {{ $dp->iuran_wajib }} </td>
                            </tr>

                                            {{-- <label>Nama Peserta</label>
                                            <p class="font-weight-bold">{{ $datalansia->nama_lansia }}</p> --}}
                            @endforeach        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




    <!-- end panel -->
@endsection
