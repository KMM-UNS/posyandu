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
<h1 class="page-header">Master Data<small></small></h1>
<!-- end page-header -->


<!-- begin panel -->
<div class="panel panel-inverse">
    <!-- begin panel-heading -->
    <div class="panel-heading">
        <h4 class="panel-title"></h4>
        <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
        </div>
    </div>
    <!-- end panel-heading -->
    <!-- begin panel-body -->
    {{-- @if(empty($dataanak) || $dataanak->count()==0)
    <div class="panel-body">
        <h1 class="text-center">Tidak Ada Rujukan !</h1>
    </div>
    @else --}}
    <div class="container">
        @foreach ($rujukans as $rujukan )
        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size: 14px; font-family: "Times New Roman", "serif";'><strong>Pemerintah Kota Surakarta</strong></span></p>
        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size: 14px; font-family: "Times New Roman", "serif";'><strong>Dinas kesehatan</strong></span></p>
        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size: 14px; font-family: "Times New Roman", "serif";'><strong>Puskesmas Surakarta</strong></span></p>
        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size: 14px; font-family: "Times New Roman", "serif";'><strong>Alamat : Surakarta</strong></span></p>
        <hr>
        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Surat Rujukan Dari Posyandu</span></strong></p>
        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Kodesurat :{{ $rujukan->kode_surat }}</span></p>
        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Tanggal surat :{{ $rujukan->tanggal_surat }}</span></p>
        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Kepada :{{ $rujukan->kepada }}</span></p>
        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Dengan hormat, diberikan surat rujukan pasien sebagai berikut :</span></p>
        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Nama :{{ $rujukan->data_anak->nama_anak }}</span></p>
        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Umur :{{ $rujukan->umur }}</span></p>
        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Alamat :{{ $rujukan->alamat }}</span></p>
        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Balita terlalu kurus :{{ $rujukan->bb_turun }}</span></p>
        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Balita terlalu gemuk :{{ $rujukan->bb_naik }}</span></p>
        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Keluhan :{{ $rujukan->keluhan }}</span></p>
        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Keterangan Rujukan :{{ $rujukan->keterangan_rujukan }}</span></p>
        @endforeach
    </div>
    {{-- @endif --}}
    <div class="panel-footer">
        {{-- <td class="text-center"><a href="{{ route('user.rujuk.cetak', $rujukan->id) }}" class=" 'btn btn-default disabled' : 'btn btn-aqua' }}"><i class="fas fa-download"></i></a></td> --}}

        {{-- <a href="{{route('user.rujuk.cetak')}} . '" class="btn btn-info buttons-show"><i class="fa fa-download fa-fw"></i></a> --}}
        <a class="btn btn-info buttons-show"><i class="fas fa-download"> Download</i></a>
    </div>

@endsection
