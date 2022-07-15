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
    <div class="row">
        <div class="col-xl-12 col-md-6">
            <div class="panel panel-inverse ">
                <div class="panel-body">
                    <div class="container">
                        <br>
                        <h4>Pengajuan Penggunaan Dana</h4>
                        <br>

                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>No. </th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Jumlah</th>
                                        <th>Rencana </th>
                                        <th>Status</th>
                                        <th>Bukti</th>
                                        <th>Bukti Angka</th>
                                        <th>Sisa</th>
                                        <th>Status Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $dp)
                                        <tr>
                                            <td> {{ $loop->iteration }}</td>
                                            <td> {{ $dp->tgl_ajuan }} </td>
                                            <td> {{ $dp->jumlah_ajuan }} </td>
                                            <td> {{ $dp->rencana_ajuan }} </td>
                                            <td>
                                                @if ($dp->status == '0')
                                                    <a type="button"
                                                        href="/admin/data-kegiatan/status_pengajuan/{{ $dp->id }}"
                                                        class="btn btn-danger btn-xs me-1 mb-1">Belum
                                                        diverifikasi</a>
                                                @elseif($dp->status == '1')
                                                    <a type="button"
                                                        href="/admin/data-kegiatan/status_pengajuan/{{ $dp->id }}"
                                                        class="btn btn-success btn-xs me-1 mb-1">Sudah
                                                        diverifikasi</a>
                                                @endif
                                            </td>
                                            <td> <a href="{{ asset('buktipengajuan') }}/{{ $dp->bukti }}"
                                                    class="btn btn-outline-primary btn-sm"><i
                                                        class="fa fa-eye"></i>Lihat</a>

                                            </td>
                                            <td> {{ $dp->bukti_angka }} </td>
                                            <td> {{ $dp->kembali }} </td>
                                            <td>
                                                @if ($dp->statusakhir == '0')
                                                    <a type="button"
                                                        href="/admin/data-kegiatan/statusakhir_pengajuan/{{ $dp->id }}"
                                                        class="btn btn-secondary btn-xs me-1 mb-1">Belum
                                                        Selesai</a>
                                                @elseif($dp->statusakhir == '1')
                                                    <a type="button"
                                                        href="/admin/data-kegiatan/statusakhir_pengajuan/{{ $dp->id }}"
                                                        class="btn btn-success btn-xs me-1 mb-1">Selesai</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
