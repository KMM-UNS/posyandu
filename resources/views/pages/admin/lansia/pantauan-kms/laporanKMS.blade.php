@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])


@push('css')
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

@section('content')
    <div class="d-flex justify-content-center ">
        <div class="col-12 ui-sortable">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Laporan Pantauan KMS</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                                class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                            data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                            data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                            data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                </br>
                <h1 class="page-header">
                    <center>Laporan Pantauan KMS Lansia</center>
                </h1>

                <form action="/admin/data-lansia/laporankmslansia" method="post">
                    @csrf
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <label for="label"> Tanggal Awal</label>
                                <input type="date" name="tglawal" id="tglawal" class="form-control" />
                            </div>
                            <div class="input-group mb-3">
                                <label for="label"> Tanggal Akhir</label>
                                <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
                            </div>
                            <button class="btn btn-primary btn-md float-right " type="submit" name="submit"
                                value="table">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @isset($data)
        <div class="panel panel-inverse">
            <br>

            <div class="panel-body">
                <center>
                    <h4> Laporan KMS Lansia</h4>
                </center>
                <a href="/admin/data-lansia/cetaklaporankms/{{ $startDate }}/{{ $endDate }}"
                    class="btn btn-sm btn-white m-b-10 float-right mr-4"><i
                        class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Export
                    as PDF</a>
                {{-- <a href="/admin/data-lansia/cetaklaporankms/{{ $startDate }}/{{ $endDate }}"
                        class="btn btn-secondary btn-sm float-right mr-4"><i class="fa fa-print fa-fw"></i> Cetak Laporan </a> --}}
                <br>

                <div class="form-group my-5">

                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Tanggal Pemeriksaan </th>
                                <th>Nama Lansia</th>
                                <th>Tekanan Darah</th>
                                <th>Tinggi Badan</th>
                                <th>Berat Badan</th>
                                <th>Indeks Massa Tubuh</th>
                            </tr>
                        </thead>
                        @foreach ($data as $cetakkms)
                            <tbody>
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td> {{ $cetakkms->tanggal_pemeriksaan }}</td>
                                    <td> {{ $cetakkms->lansia->nama_lansia }}</td>
                                    <td> {{ $cetakkms->tekanan_darah }}</td>
                                    <td> {{ $cetakkms->tb }}</td>
                                    <td> {{ $cetakkms->bb }}</td>
                                    <td> {{ $cetakkms->indeks_massa_tubuh }}</td>
                                </tr>
                            </tbody>
                        @endforeach
                </div>

            </div>


        </div>
    @endisset
@endsection

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
    {{-- <script>
            $(document).ready(function() {
                var table = $('#rekaps').DataTable({
                    pageLength: 10,
                    processing: true,
                    serverSide: false,
                    dom: 'Blfrtip',
                });

            });
        </script> --}}
@endpush
