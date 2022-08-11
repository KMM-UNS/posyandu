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

@section('content')
    <div class="alert alert-success" role="alert">
        Rekapitulasi Hasil Kegiatan Posyandu Lansia dapat <a href="/admin/data-kegiatan/rekapitulasi/{{ $data->id }}"
            class="alert-link">
            Download disini.</a>
    </div>
    <div class="panel panel-inverse">
        <br>

        <div class="panel-body">
            <center>
                <h4> Laporan KMS Lansia</h4>
            </center>
            <a href="/admin/data-kegiatan/rekaplansia/{{ $data->id }}"
                class="btn btn-sm btn-white m-b-10 float-right mr-4"><i
                    class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Export
                as PDF</a>
            <br>

            <div class="table-responsive">

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
                            <th>Penanggungjawab</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datakms as $kms)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                <td> {{ $kms->lansia->no_kms }}</td>
                                <td> {{ $kms->lansia->nama_lansia }}</td>
                                <td> {{ $kms->tanggal_pemeriksaan }}</td>
                                <td> {{ $kms->kegiatan_harian }}</td>
                                <td> {{ $kms->status_mental }}</td>
                                <td> {{ $kms->indeks_massa_tubuh }}</td>
                                <td> {{ $kms->tekanan_darah }}</td>
                                <td> {{ $kms->hemoglobin }}</td>
                                <td> {{ $kms->reduksi_urine }}</td>
                                <td> {{ $kms->protein_urine }}</td>
                                <td> {{ $kms->keluhan }}</td>
                                <td> {{ $kms->tindakan }}</td>
                                <td> {{ $kms->kaderposyandu->nama }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
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
@endpush
