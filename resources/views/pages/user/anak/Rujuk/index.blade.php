@extends('layouts.user')

@section('title', 'Rujuk')

@push('css')
<!-- datatables -->
<link href="{{ asset('/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/css/isidatacss/style.css') }}" rel="stylesheet" />
<!-- end datatables -->
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
<h1 class="page-header">Data Surat Rujukan<small></small></h1>
<!-- end page-header -->
<div class="col-lg-12">
    <!-- begin panel -->
    <div class="panel panel-inverse" data-sortable-id="table-basic-7">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
            <h4  style="text-align: right;" class="panel-title">Data Surat Rujukan</h4>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
<div class="panel-body">
    <!-- begin table-responsive -->
    <div class="table-responsive">
        <table class="table table-striped m-b-0">
            <thead>
                <tr>
                    <th><b>No</b></th>
                    <th><b>Tanggal Surat</b></th>
                    <th><b>Nama</b></th>
                    <th><b>Keterangan Rujukan</b></th>
                    <th><b> Status</b></th>
                    <th width="1%"></th>
                </tr>
            </thead>
            @foreach ($rujukans as $rujukan )
            <tbody>
                <tr>
                    {{-- @foreach ($rujukans as $rujukan ) --}}
                    <td>{{ $loop->iteration }}</td>
                    <td >{{ $rujukan->tanggal_surat }}</td>
                    <td>{{ $rujukan->data_anak->nama_anak }}</td>
                    <td>{{ $rujukan->keterangan_rujukan }}</td>
                    <td>
                        {{-- <a href="{{ route('user.rujuk.cetak', $rujukan->id) }}" class="btn btn-sm btn-primary width-60 m-r-2">Detail</a> --}}
                        {{-- <a href="{{ route('user.rujuk.cetak', $rujukan->id) }}" class="btn btn-sm btn-white width-60">Unduh</a> --}}
                        {{-- <a href class="btn btn-sm btn-white width-60">Konfirmasi</a> --}}
                        @if($rujukan->status == '0')
                        <a href="{{ route('user.rujuk.index', $rujukan->id) }}" class="btn btn-secondary buttons-edit">Belum Disetujui</a>
                        @else
                        <a href="{{ route('user.rujuk.index', $rujukan->id) }}" class="btn btn-info buttons-edit">Disetujui</a>
                        <a href=" {{ route('user.rujuk.cetak', $rujukan->id) }}" class="btn btn-info buttons-show"><i class="fa fa-print fa-fw"></i></a>

                        @endif
                        {{-- @return $btn;
                           $btn = $btn . '</div>';

                            return $btn; --}}
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <!-- end table-responsive -->
</div>
<!-- end panel-body -->
<!-- begin hljs-wrapper -->
@endsection
