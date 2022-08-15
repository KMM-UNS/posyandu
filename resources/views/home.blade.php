@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}

                    {{-- <body class="h-screen bg-gray-100">

                        <div class="container px-4 mx-auto">

                            <div class="p-6 m-20 bg-white rounded shadow">
                                {!! $imunisasiChart->container() !!}
                            </div>

                        </div>

                        <script src="{{ $imunisasiChart->cdn() }}"></script>

                        {{ $imunisasiChart->script() }}
                </div> --}}
                <div class="card-body">
                <div align="center" class="text"><strong>Selamat Datang di Posyandu Balita</strong></div>
                </div>
                {{-- <div class="col-xl-6 col-md-6">
                    <div class="widget widget-stats bg-purple">
                      <div class="stats-icon"><i class="fa fa-users"></i></div>
                      <div class="stats-info">
                        <h4>JUMLAH ANAK</h4>
                         <p></p>
                      </div>
                      <div class="stats-link"> --}}
                        {{-- <a>Jumlah Kader di Posyandu<i class=""></i></a> --}}
                        {{-- <a href="user/biodata">View Detail </a>
                      </div>
                    </div>
                  </div> --}}
                {{-- <div class="text">
                    <p align="justify">Grafik diatas menunjukkan tumbuh kembang anak sesuai dengan berat badan dan tinggi badan anak.
                        Apabila garis naik maka berat badan anak dan tinggi badan anak meningkat. Sedangan garis turun maka berat badan dan tinggi badan anak menurun.
                    </p>
                </div>
                <div class="text"><strong>1. Grafik Warna Biru</strong></div>
                <div class="text">
                    <p align="justify">Grafik warna biru menunjukkan grafik berat badan anak</p>
                 </div>
                 <div class="text"><strong>2. Grafik Warna Hijau </strong></div>
                <div class="text">
                    <p align="justify">Grafik warna hijau menunjukkan grafik tinggi badan anak</p>
                </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
