{{-- @extends('layouts.default') --}}
@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', 'Dashboard Admin')

@push('css')
<link href="/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
<link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
<link href="/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
  <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item active">Dashboard</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Dashboard Admin <small></small></h1>
<!-- end page-header -->

@if (auth()->user()->hasRole('petugas_kesehatan'))
<div class="row">
    <div class="col-xl-3 col-md-6">
      <div class="widget widget-stats bg-orange">
        <div class="stats-icon"><i class="fa fa-users"></i></div>
        <div class="stats-info">
          <h4>JUMLAH ANAK</h4>
          <p>{{ $anak }}</p>
        </div>
        <div class="stats-link">
          {{-- <a>Jumlah Anak di Posyandu<i class=""></i></a> --}}
          <a href="admin/anak-data/dataanak">View Detail </a>
        </div>
      </div>
    </div>
</div>

  <div class="row">
  <div class="col-md-6">
  <body class="h-screen bg-gray-100">

      <div class="container px-4 mx-auto">

          <div class="p-6 m-20 bg-white rounded shadow">
              {!! $dataanakChart->container() !!}
          </div>

      </div>

      <script src="{{ $dataanakChart->cdn() }}"></script>

      {{ $dataanakChart->script() }}
      </body>
  </div>

  <div class="col-md-6">
      <body class="h-screen bg-gray-100">

          <div class="container px-4 mx-auto">

              <div class="p-6 m-20 bg-white rounded shadow">
                  {!! $umurChart->container() !!}
              </div>

          </div>

          <script src="{{ $umurChart->cdn() }}"></script>

          {{ $umurChart->script() }}
          </body>
  </div>
  </div>
  <div class="row">
      <div class="col-md-6">
      <body class="h-screen bg-gray-100">

          <div class="container px-4 mx-auto">

              <div class="p-6 m-20 bg-white rounded shadow">
                  {!! $periksaChart->container() !!}
              </div>

          </div>

          <script src="{{ $periksaChart->cdn() }}"></script>

          {{ $periksaChart->script() }}
          </body>
      </div>

      <div class="col-md-6">
          <body class="h-screen bg-gray-100">

              <div class="container px-4 mx-auto">

                  <div class="p-6 m-20 bg-white rounded shadow">
                      {!! $rujukanChart->container() !!}
                  </div>

              </div>

              <script src="{{ $rujukanChart->cdn() }}"></script>

              {{ $rujukanChart->script() }}
              </body>
          </div>

@elseif (auth()->user()->hasRole('admin'))
<!-- begin row -->
<div class="row">
  <div class="col-xl-3 col-md-6">
    <div class="widget widget-stats bg-orange">
      <div class="stats-icon"><i class="fa fa-users"></i></div>
      <div class="stats-info">
        <h4>JUMLAH ANAK</h4>
        <p>{{ $anak }}</p>
      </div>
      <div class="stats-link">
        {{-- <a>Jumlah Anak di Posyandu<i class=""></i></a> --}}
        <a href="admin/anak-data/dataanak">View Detail </a>
      </div>
    </div>
  </div>


  <div class="col-xl-3 col-md-6">
    <div class="widget widget-stats bg-red">
      <div class="stats-icon"><i class="fa fa-users"></i></div>
      <div class="stats-info">
        <h4>JUMLAH KADER</h4>
         <p>{{ $kader }}</p>
      </div>
      <div class="stats-link">
        {{-- <a>Jumlah Kader di Posyandu<i class=""></i></a> --}}
        <a href="admin/master-data/kader">View Detail </a>
      </div>
    </div>
  </div>


  <div class="col-xl-3 col-md-6">
    <div class="widget widget-stats bg-green">
      <div class="stats-icon"><i class="fa fa-users"></i></div>
      <div class="stats-info">
        <h4>JUMLAH RUJUKAN</h4>
         <p>{{ $rujukan }}</p>
      </div>
      <div class="stats-link">
        {{-- <a>Jumlah Rujukan Anak dari Posyandu<i class=""></i></a> --}}
        <a href="admin/data-transaksi/rujukan">View Detail </a>
    </div>
    </div>
  </div>

<div class="col-xl-3 col-md-6">
    <div class="widget widget-stats bg-blue">
      <div class="stats-icon"><i class="fa fa-users"></i></div>
      <div class="stats-info">
        <h4>JUMLAH PEMERIKSAAN IMUNISASI</h4>
         <p>{{ $imunisasi }}</p>
      </div>
      <div class="stats-link">
        {{-- <a>Jumlah Pemeriksaan Imunisasi Anak di Posyandu<i class=""></i></a> --}}
        <a href="admin/anak-data/imunisasi">View Detail </a>
      </div>
    </div>
  </div>
</div>


<div class="row">
<div class="col-md-6">
<body class="h-screen bg-gray-100">

    <div class="container px-4 mx-auto">

        <div class="p-6 m-20 bg-white rounded shadow">
            {!! $dataanakChart->container() !!}
        </div>

    </div>

    <script src="{{ $dataanakChart->cdn() }}"></script>

    {{ $dataanakChart->script() }}
    </body>
</div>

<div class="col-md-6">
    <body class="h-screen bg-gray-100">

        <div class="container px-4 mx-auto">

            <div class="p-6 m-20 bg-white rounded shadow">
                {!! $umurChart->container() !!}
            </div>

        </div>

        <script src="{{ $umurChart->cdn() }}"></script>

        {{ $umurChart->script() }}
        </body>
</div>
</div>
<div class="row">
    <div class="col-md-6">
    <body class="h-screen bg-gray-100">

        <div class="container px-4 mx-auto">

            <div class="p-6 m-20 bg-white rounded shadow">
                {!! $periksaChart->container() !!}
            </div>

        </div>

        <script src="{{ $periksaChart->cdn() }}"></script>

        {{ $periksaChart->script() }}
        </body>
    </div>

    <div class="col-md-6">
        <body class="h-screen bg-gray-100">

            <div class="container px-4 mx-auto">

                <div class="p-6 m-20 bg-white rounded shadow">
                    {!! $rujukanChart->container() !!}
                </div>

            </div>

            <script src="{{ $rujukanChart->cdn() }}"></script>

            {{ $rujukanChart->script() }}
            </body>
        </div>

        @endif
@endsection

@push('scripts')
<!-- genderChart script -->
{{-- <script src="{{ $dataanakChart->cdn() }}"></script>
{{ $dataanakChart->script() }} --}}
<!-- Umur -->
{{-- <script src="{{ $umurChart->cdn() }}"></script>
{{ $umurChart->script() }} --}}

<script src="/assets/plugins/gritter/js/jquery.gritter.js"></script>
<script src="/assets/plugins/flot/jquery.flot.js"></script>
<script src="/assets/plugins/flot/jquery.flot.time.js"></script>
<script src="/assets/plugins/flot/jquery.flot.resize.js"></script>
<script src="/assets/plugins/flot/jquery.flot.pie.js"></script>
<script src="/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="/assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
<script src="/assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js"></script>
<script src="/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
<script src="/assets/js/demo/dashboard.js"></script>

@endpush


