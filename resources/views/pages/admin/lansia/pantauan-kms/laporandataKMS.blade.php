@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@push('css')
    <link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="{{ asset('dashboard2') }}/vendors/feather/feather.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('dashboard2') }}/vendors/ti-icons/css/themify-icons.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('dashboard2') }}/vendors/css/vendor.bundle.base.css"> --}}
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('dashboard2') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    {{-- <link rel="stylesheet" href="{{ asset('dashboard2') }}/css/vertical-layout-light/style.css"> --}}
    <!-- endinject -->
    {{-- <link rel="shortcut icon" href="{{ asset('dashboard2') }}/images/favicon.png" /> --}}
@endpush
{{-- @section('content')
    <!-- begin page-header -->
   
    <!-- end page-header -->
    <div class="d-flex justify-content-center ">
        <div class="col-12 ui-sortable">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Laporan KMS Lansia</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                            data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                            data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                            data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                            data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <br>
                <h1 class="page-header">
                    <center>Laporan KMS Lansia</center>
                </h1>
                <form action="/admin/data-lansia/laporandatakmslansia" method="post">
                    @csrf
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <label for="label"> Nama Lansia</label>
                                <x-form.Dropdown name="nama_lansia1" :options="$nama_lansia" />
                            </div>
                            <button class="btn btn-primary btn-md float-right " type="submit" name="submit"
                                value="table">Search</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if (session('data'))
        <div class="panel panel-inverse">
            <div class="panel-body">
                <center>
                    <h4> Laporan Data KMS Lansia</h4>
                </center>
                <a href="/admin/data-lansia/cetaklaporandatakms/{{ session('data')->first()->lansia->id }}"
                    class="btn btn-sm btn-white m-b-10 float-right mr-4"><i
                        class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Export
                    as PDF</a>
                <br>
                <div class="form-group my-5">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th>No. Urut</th>
                                <th>No. KMS</th>
                                <th>Nama</th>
                                <th>Tanggal Pemeriksaan</th>
                                <th>Kemandirian</th>
                                <th>Emosional Mental</th>
                                <th>IMT</th>
                                <th>Tekanan Darah</th>
                                <th>Hemoglobin</th>
                                <th>Reduksi Urine</th>
                                <th>Protein Urine</th>
                                <th>Keluhan</th>
                                <th>Penanganan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (session('data') as $cetakkms)
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td> {{ $cetakkms->lansia->no_kms }}</td>
                                    <td> {{ $cetakkms->lansia->nama_lansia }}</td>
                                    <td> {{ $cetakkms->tanggal_pemeriksaan }}</td>
                                    <td> {{ $cetakkms->kegiatan_harian }}</td>
                                    <td> {{ $cetakkms->status_mental }}</td>
                                    <td> {{ $cetakkms->indeks_massa_tubuh }}</td>
                                    <td> {{ $cetakkms->tekanan_darah }}</td>
                                    <td> {{ $cetakkms->hemoglobin }}</td>
                                    <td> {{ $cetakkms->reduksi_urine }}</td>
                                    <td> {{ $cetakkms->protein_urine }}</td>
                                    <td> {{ $cetakkms->keluhan }}</td>
                                    <td> {{ $cetakkms->tindakan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>


        </div>
    @endif
@endsection --}}
@section('content')
    <div class="d-flex justify-content-center ">
        <div class="col-12 ui-sortable">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Riwayat KMS Lansia</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                            data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                            data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                            data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                            data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <br>
                <h1 class="page-header">
                    <center>Riwayat KMS Lansia</center>
                </h1>
                <form action="/admin/data-lansia/laporandatakmslansia" method="post">
                    @csrf
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <label for="label"> Nama Lansia</label>
                                <x-form.Dropdown name="nama_lansia1" :options="$nama_lansia" />
                            </div>
                            <button class="btn btn-primary btn-md float-right " type="submit" name="submit"
                                value="table">Search</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if (session('data'))
        <div class="panel panel-inverse">
            <div class="panel-body">
                <center>
                    <h4> Riwayat KMS Lansia</h4>
                </center>
                <a href="/admin/data-lansia/cetaklaporandatakms/{{ session('data')->first()->lansia->id }}"
                    class="btn btn-sm btn-white m-b-10 float-right mr-4"><i
                        class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Export
                    as PDF</a>
                <br>
                <div class="form-group my-5">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th>No. Urut</th>
                                <th>No. KMS</th>
                                <th>Nama</th>
                                <th>Tanggal Pemeriksaan</th>
                                <th>Kemandirian</th>
                                <th>Emosional Mental</th>
                                <th>IMT</th>
                                <th>Tekanan Darah</th>
                                <th>Hemoglobin</th>
                                <th>Reduksi Urine</th>
                                <th>Protein Urine</th>
                                <th>Keluhan</th>
                                <th>Penanganan</th>
                                <th>Penanggung jawab</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach (session('data') as $cetakkms)
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td> {{ $cetakkms->lansia->no_kms }}</td>
                                    <td> {{ $cetakkms->lansia->nama_lansia }}</td>
                                    <td> {{ $cetakkms->tanggal_pemeriksaan }}</td>
                                    <td> {{ $cetakkms->kegiatan_harian }}</td>
                                    <td> {{ $cetakkms->status_mental }}</td>
                                    <td> {{ $cetakkms->indeks_massa_tubuh }}</td>
                                    <td> {{ $cetakkms->tekanan_darah }}</td>
                                    <td> {{ $cetakkms->hemoglobin }}</td>
                                    <td> {{ $cetakkms->reduksi_urine }}</td>
                                    <td> {{ $cetakkms->protein_urine }}</td>
                                    <td> {{ $cetakkms->keluhan }}</td>
                                    <td> {{ $cetakkms->tindakan }}</td>
                                    <td> {{ $cetakkms->kaderposyandu->nama }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>


        </div>
        <div class="panel panel-inverse">
            <div class="panel-body">
                <h4> KMS Lansia </h4>
                <a href="/admin/data-lansia/cetakkms/{{ session('data')->first()->lansia->id }}"
                    class="btn btn-sm btn-white m-b-10 float-right mr-4"><i
                        class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Export
                    as PDF</a>
                <table class="table table-bordered my-2" align="center" rules="all">
                    <thead>
                        <tr>
                            <th scope="col" width="180px">Kunjungan Ke</th>
                            @foreach (session('data') as $cetakkms)
                                <th scope="col">{{ $loop->iteration }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"> Tanggal</th>
                            @foreach (session('data') as $cetakkms)
                                <th> {{ $cetakkms->tanggal_pemeriksaan }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row"><br>Kegiatan Sehari-hari</th>
                        </tr>
                        <tr>
                            <th scope="row">Kategori A</th>
                            @foreach (session('data') as $cetakkms)
                                @if ($cetakkms->kegiatan_harian == 'Kategori A')
                                    <th scope="col" style="background-color: #ffd700;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #ffd700;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Kategori B</th>
                            @foreach (session('data') as $cetakkms)
                                @if ($cetakkms->kegiatan_harian == 'Kategori B')
                                    <th scope="col" style="background-color: #ff0;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #ff0;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Kategori C</th>
                            @foreach (session('data') as $cetakkms)
                                @if ($cetakkms->kegiatan_harian == 'Kategori C')
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
                            @foreach (session('data') as $cetakkms)
                                @if ($cetakkms->status_mental == 'Ada')
                                    <th scope="col" style="background-color: #ffff80;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #ffff80;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Tidak Ada</th>
                            @foreach (session('data') as $cetakkms)
                                @if ($cetakkms->status_mental == 'Tidak Ada')
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
                            @foreach (session('data') as $cetakkms)
                                @if ($cetakkms->indeks_massa_tubuh == 'Berat Lebih')
                                    <th scope="col" style="background-color: #f00;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #f00;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Normal</th>
                            @foreach (session('data') as $cetakkms)
                                @if ($cetakkms->indeks_massa_tubuh == 'Normal')
                                    <th scope="col" style="background-color: #ffff80;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #ffff80;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Kurang</th>
                            @foreach (session('data') as $cetakkms)
                                @if ($cetakkms->indeks_massa_tubuh == 'Berat Kurang')
                                    <th scope="col" style="background-color: #ff0;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #ff0;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Tinggi Badan (Kg)</th>
                            @foreach (session('data') as $cetakkms)
                                <th scope="col">{{ $cetakkms->tb }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Berat Badan (cm)</th>
                            @foreach (session('data') as $cetakkms)
                                <th scope="col">{{ $cetakkms->bb }}</th>
                            @endforeach

                        </tr>
                        <tr>
                            <th scope="row"><br>Tekanan Darah</th>
                        </tr>
                        <tr>
                            <th scope="row">Tinggi</th>
                            @foreach (session('data') as $cetakkms)
                                @if ($cetakkms->tekanan_darah == 'Tinggi')
                                    <th scope="col" style="background-color: #973e95;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #973e95;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Normal</th>
                            @foreach (session('data') as $cetakkms)
                                @if ($cetakkms->tekanan_darah == 'Normal')
                                    <th scope="col" style="background-color: #ecd8e9;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #ecd8e9;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Rendah</th>
                            @foreach (session('data') as $cetakkms)
                                @if ($cetakkms->tekanan_darah == 'Rendah')
                                    <th scope="col" style="background-color: #d8b1d4;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #d8b1d4;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Sistole</th>
                            @foreach (session('data') as $cetakkms)
                                <th scope="col">{{ $cetakkms->sistol }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Diastol</th>
                            @foreach (session('data') as $cetakkms)
                                <th scope="col">{{ $cetakkms->diastol }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Dgn Obat</th>
                            @foreach (session('data') as $cetakkms)
                                <th scope="col">{{ $cetakkms->dengan_obat }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Nadi</th>
                            @foreach (session('data') as $cetakkms)
                                <th scope="col">{{ $cetakkms->nadi }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row"><br>Hemoglobin</th>

                        </tr>
                        <tr>
                            <th scope="row">Kurang</th>
                            @foreach (session('data') as $cetakkms)
                                @if ($cetakkms->hemoglobin == 'Kurang')
                                    <th scope="col" style="background-color: #87CEFA;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #87CEFA;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Normal</th>
                            @foreach (session('data') as $cetakkms)
                                @if ($cetakkms->hemoglobin == 'Normal')
                                    <th scope="col" style="background-color: #F0F8FF;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #F0F8FF;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">g% atau %</th>
                            @foreach (session('data') as $cetakkms)
                                <th scope="col">{{ $cetakkms->g_hemoglobin }}</th>
                            @endforeach

                        </tr>
                        <tr>
                            <th scope="row"><br>Reduksi Urine</th>
                        </tr>
                        <tr>
                            <th scope="row">Positif</th>
                            @foreach (session('data') as $cetakkms)
                                @if ($cetakkms->reduksi_urine == 'Positif')
                                    <th scope="col" style="background-color: #abce80;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #abce80;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Normal</th>
                            @foreach (session('data') as $cetakkms)
                                @if ($cetakkms->reduksi_urine == 'Normal')
                                    <th scope="col" style="background-color: #ffffff;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #ffffff;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>

                            <th scope="row">Jumlah Tanda +</th>
                            @foreach (session('data') as $cetakkms)
                                <th scope="col">{{ $cetakkms->jumlahtanda }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Dgn Obat</th>
                            @foreach (session('data') as $cetakkms)
                                <th scope="col">{{ $cetakkms->dengan_obat_reduksi }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row"><br>Protein Urine</th>
                        </tr>
                        <tr>
                            <th scope="row">Positif</th>
                            @foreach (session('data') as $cetakkms)
                                @if ($cetakkms->protein_urine == 'Positif')
                                    <th scope="col" style="background-color: #D2B48C;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #D2B48C;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Normal</th>
                            @foreach (session('data') as $cetakkms)
                                @if ($cetakkms->protein_urine == 'Normal')
                                    <th scope="col" style="background-color: #FFF8DC;">✓</th>
                                @else
                                    <th scope="col" style="background-color: #FFF8DC;"></th>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Jumlah Tanda +</th>
                            @foreach (session('data') as $cetakkms)
                                <th scope="col">{{ $cetakkms->jumlah_tanda }}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Dgn Obat</th>
                            @foreach (session('data') as $cetakkms)
                                <th scope="col">{{ $cetakkms->dengan_obat_reduksi }}</th>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
                <p> Nilai-nilai Normal:<br>
                    * Indeks Massa Tubuh : 18,5 -25<br>
                    * Hemoglobin : L ≥ 13g% , P ≥ 12g%, Talquist ≥ 70%</p>
            </div>
        </div>
    @endif
@endsection
{{-- coba --}}


@push('scripts')
    {{-- <script src="{{ asset('dashboard2') }}/vendors/js/vendor.bundle.base.js"></script> --}}
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('dashboard2') }}/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="{{ asset('dashboard2') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('dashboard2') }}/js/off-canvas.js"></script>
    <script src="{{ asset('dashboard2') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('dashboard2') }}/js/template.js"></script>
    <script src="{{ asset('dashboard2') }}/js/settings.js"></script>
    <script src="{{ asset('dashboard2') }}/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('dashboard2') }}/js/data-table.js"></script>
@endpush
