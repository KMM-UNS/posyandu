@extends('layouts.user')

@push('css')
    {{-- <!-- datatables -->
    <link href="{{ asset('/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" />
    <!-- end datatables --> --}}
@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Master Data</a></li>
        <li class="breadcrumb-item active">@yield('Riwayat Pantauan KMS')</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Riwayat KMS Lansia<small> </small></h1>
    <!-- end page-header -->


    <!-- begin panel -->
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">

            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                        class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
                        class="fa fa-minus"></i></a>
            </div>
        </div>
        <div class="panel-body">
            <h4> Catatan Pemantauan </h4>
            {{-- {{ $dataTable->table() }} --}}
            <div class="table-responsive">
                <table class="table table-bordered my-2" align="center" rules="all">
                    <thead>
                        <tr>
                            <th scope="col" width="180px">Kunjungan Ke</th>
                            @foreach ($pantauan as $kms)
                                <th scope="col">{{ $loop->iteration }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">Tanggal</th>
                            @foreach ($pantauan as $kms)
                                <th> {{ $kms->tanggal_pemeriksaan }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row"><br>Kegiatan Sehari-hari</th>
                        </tr>
                        <tr>
                            <th scope="row">Kategori A</th>
                            @foreach ($pantauan as $kms)
                                @if ($kms->kegiatan_harian == 'Kategori A')
                                    <th scope="col" style="background-color: #ffd700;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #ffd700;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Kategori B</th>
                            @foreach ($pantauan as $kms)
                                @if ($kms->kegiatan_harian == 'Kategori B')
                                    <th scope="col" style="background-color: #ff0;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #ff0;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Kategori C</th>
                            @foreach ($pantauan as $kms)
                                @if ($kms->kegiatan_harian == 'Kategori C')
                                    <th scope="col" style="background-color: #ffffe0;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #ffffe0;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                        <tr>
                            <th scope="row"><br>Status Mental</th>
                        </tr>
                        <tr>
                            <th scope="row">Ada</th>
                            @foreach ($pantauan as $kms)
                                @if ($kms->status_mental == 'Ada')
                                    <th scope="col" style="background-color: #ffff80;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #ffff80;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Tidak Ada</th>
                            @foreach ($pantauan as $kms)
                                @if ($kms->status_mental == 'Tidak Ada')
                                    <th scope="col" style="background-color: #ffffe0;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #ffffe0;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row"><br>Indeks Massa Tubuh</th>
                        </tr>
                        <tr>
                            <th scope="row">Lebih</th>
                            @foreach ($pantauan as $kms)
                                @if ($kms->indeks_massa_tubuh == 'Berat Lebih')
                                    <th scope="col" style="background-color: #f00;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #f00;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Normal</th>
                            @foreach ($pantauan as $kms)
                                @if ($kms->indeks_massa_tubuh == 'Normal')
                                    <th scope="col" style="background-color: #ffff80;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #ffff80;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Kurang</th>
                            @foreach ($pantauan as $kms)
                                @if ($kms->indeks_massa_tubuh == 'Berat Kurang')
                                    <th scope="col" style="background-color: #ff0;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #ff0;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Tinggi Badan (Kg)</th>
                            @foreach ($pantauan as $kms)
                                <th scope="col">{{ $kms->tb }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Berat Badan (cm)</th>
                            @foreach ($pantauan as $kms)
                                <th scope="col">{{ $kms->bb }}</th>
                            @endforeach

                        </tr>
                        <tr>
                            <th scope="row"><br>Tekanan Darah</th>
                        </tr>
                        <tr>
                            <th scope="row">Tinggi</th>
                            @foreach ($pantauan as $kms)
                                @if ($kms->tekanan_darah == 'Tinggi')
                                    <th scope="col" style="background-color: #973e95;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #973e95;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Normal</th>
                            @foreach ($pantauan as $kms)
                                @if ($kms->tekanan_darah == 'Normal')
                                    <th scope="col" style="background-color: #ecd8e9;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #ecd8e9;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Rendah</th>
                            @foreach ($pantauan as $kms)
                                @if ($kms->tekanan_darah == 'Rendah')
                                    <th scope="col" style="background-color: #d8b1d4;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #d8b1d4;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Sistole</th>
                            @foreach ($pantauan as $kms)
                                <th scope="col">{{ $kms->sistol }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Diastol</th>
                            @foreach ($pantauan as $kms)
                                <th scope="col">{{ $kms->diastol }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Dgn Obat</th>
                            @foreach ($pantauan as $kms)
                                <th scope="col">{{ $kms->dengan_obat }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Nadi</th>
                            @foreach ($pantauan as $kms)
                                <th scope="col">{{ $kms->nadi }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row"><br>Hemoglobin</th>

                        </tr>
                        <tr>
                            <th scope="row">Kurang</th>
                            @foreach ($pantauan as $kms)
                                @if ($kms->hemoglobin == 'Kurang')
                                    <th scope="col" style="background-color: #87CEFA;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #87CEFA;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Normal</th>
                            @foreach ($pantauan as $kms)
                                @if ($kms->hemoglobin == 'Normal')
                                    <th scope="col" style="background-color: #F0F8FF;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #F0F8FF;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">g% atau %</th>
                            @foreach ($pantauan as $kms)
                                <th scope="col">{{ $kms->g_hemoglobin }}</th>
                            @endforeach

                        </tr>
                        <tr>
                            <th scope="row"><br>Reduksi Urine</th>
                        </tr>
                        <tr>
                            <th scope="row">Positif</th>
                            @foreach ($pantauan as $kms)
                                @if ($kms->reduksi_urine == 'Positif')
                                    <th scope="col" style="background-color: #abce80;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #abce80;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Normal</th>
                            @foreach ($pantauan as $kms)
                                @if ($kms->reduksi_urine == 'Normal')
                                    <th scope="col" style="background-color: #ffffff;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #ffffff;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>

                            <th scope="row">Jumlah Tanda +</th>
                            @foreach ($pantauan as $kms)
                                <th scope="col">{{ $kms->jumlahtanda }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Dgn Obat</th>
                            @foreach ($pantauan as $kms)
                                <th scope="col">{{ $kms->dengan_obat_reduksi }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row"><br>Protein Urine</th>
                        </tr>
                        <tr>
                            <th scope="row">Positif</th>
                            @foreach ($pantauan as $kms)
                                @if ($kms->protein_urine == 'Positif')
                                    <th scope="col" style="background-color: #D2B48C;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #D2B48C;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Normal</th>
                            @foreach ($pantauan as $kms)
                                @if ($kms->protein_urine == 'Normal')
                                    <th scope="col" style="background-color: #FFF8DC;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #FFF8DC;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Jumlah Tanda +</th>
                            @foreach ($pantauan as $kms)
                                <th scope="col">{{ $kms->jumlah_tanda }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Dgn Obat</th>
                            @foreach ($pantauan as $kms)
                                <th scope="col">{{ $kms->dengan_obat_reduksi }}</th>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
            <p> Nilai-nilai Normal:<br>
                * Indeks Massa Tubuh : 18,5 -25<br>
                * Hemoglobin : L ≥ 13g% , P ≥ 12g%, Talquist ≥ 70%</p>
        </div>
        <!-- end panel-body -->
    </div>
    <!-- end panel -->


    <!-- begin page-header -->
    {{-- <h1 class="page-header">Riwayat Pantauan Kesehatan<small> @yield('title')</small></h1> --}}
    <!-- end page-header -->


    {{-- <!-- begin panel -->
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
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
                <table id="order-listing" class="table table-bordered my-3" align="center" border="1px"
                    style="width: 95%; margin-top: 1 rem; margin-bottom: 1 rem;">
                    <thead>
                        <tr>
                            <th scope="col"><strong> Tanggal Pemeriksaan </strong></th>
                            <th scope="col"><strong> Keluhan </strong></th>
                            <th scope="col"><strong> Tindakan </strong></th>
                            <th scope="col"><strong> Nama Pemeriksa </strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($keluhan_tindakans as $keluhan_tindakan)
                            <tr>

                                <td>{{ $keluhan_tindakan->tanggal_pemeriksaan }}</td>
                                <td>{{ $keluhan_tindakan->keluhan }}</td>
                                <td>{{ $keluhan_tindakan->tindakan }}</td>
                                <td>{{ $keluhan_tindakan->kader->nama }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end panel-body --> --}}

    <h1 class="page-header">Grafik Indeks Massa Tubuh<small> @yield('title') </small></h1>

    <!-- begin panel -->
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                        class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
                        class="fa fa-minus"></i></a>
            </div>
        </div>
        <div>

            <body class="h-screen bg-gray-100">
                <div class="container px-4 mx-auto">
                    <div class="p-6 m-20 bg-white rounded shadow">
                        {!! $chart->container() !!}
                    </div>
                </div>
                <script src="{{ $chart->cdn() }}"></script>
                {{ $chart->script() }}
            </body>
            <p>
                <center>Keterangan Indeks Masa Tubuh (IMT)</center>
            </p>
            {{-- <p>
                <center>
                    < 17 Berat Sangat Kurang &nbsp;&nbsp;&nbsp;&nbsp; 17 - 18,4 Berat Kurang &nbsp;&nbsp;&nbsp;&nbsp; 18,5 -
                        25,0 Normal &nbsp;&nbsp;&nbsp;&nbsp; 25,1 - 27 Obesitas Ringan &nbsp;&nbsp;&nbsp;&nbsp;>27 Obesitas
                        Berat
                </center>
            <p> --}}
        </div>
    </div>
@endsection

@push('scripts')
    {{-- <!-- datatables -->
    <script src="{{ asset('assets/js/custom/datatable-assets.js') }}"></script>
    {{ $dataTable->scripts() }}
    <!-- end datatables -->

    <script src="{{ asset('assets/js/custom/delete-with-confirmation.js') }}"></script>
    <script>
        $(document).on('delete-with-confirmation.success', function() {
            $('.buttons-reload').trigger('click')
        })
    </script> --}}
@endpush
