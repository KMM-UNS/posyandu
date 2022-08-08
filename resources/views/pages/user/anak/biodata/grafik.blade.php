@extends('layouts.user')

@section('title', 'Grafik')

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
    <li class="breadcrumb-item"><a href="javascript:;">Beranda</a></li>
    {{-- <li class="breadcrumb-item"><a href="javascript:;">Rujukan</a></li> --}}
    <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
{{-- <h1 class="page-header">Grafik Tumbuh Kembang Anak<small></small></h1> --}}
<div align="center">
	<h1 class="page-header"><strong> Grafik Tumbuh Kembang Anak </strong></h1>
    </div>
<!-- end page-header -->
<div class="col-lg-12">
    <!-- begin panel -->
    <div class="panel panel-inverse" data-sortable-id="table-basic-7">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <div class="panel-heading-btn">
                {{-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> --}}
            </div>
            <h4  style="text-align: left;" class="panel-title">Grafik Tumbuh Kembang Anak </h4>
        </div>
<div class="row">
    <div class="col-md-6">
    <body class="h-screen bg-gray-100">

        <div class="container px-4 mx-auto">

            <div class="p-6 m-20 bg-white rounded shadow">
            {!! $imunisasiChart->container() !!}
        </div>

    </div>

    <script src="{{ $imunisasiChart->cdn() }}"></script>

    {{ $imunisasiChart->script() }}
    </body>
</div>
{{-- </div>
<div class="row"> --}}
<div class="col-md-6">
    <body class="h-screen bg-gray-100">

        <div class="container px-4 mx-auto">

            <div class="p-6 m-20 bg-white rounded shadow">
            {!! $lingkarkepalaChart->container() !!}
        </div>

    </div>

    <script src="{{ $lingkarkepalaChart->cdn() }}"></script>

    {{ $lingkarkepalaChart->script() }}
    </body>
</div>
</div>
    </div>
<a href="javascript:history.back(-1);" class="btn btn-success">
    <i class="fa fa-arrow-circle-left"></i> Kembali
  </a>
@endsection
