@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Data Lansia' : 'Create Data Lansia')

@push('css')
    <style>
        .scrollpengajuan {
            height: 143px;
            overflow: scroll;
        }
    </style>
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
    <!-- begin row -->
    <div class="row">
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-info">
                <div class="stats-icon"><i class="fa fa-link"></i></div>
                <div class="stats-info">
                    <h4>Total Dana</h4>
                    <p>{{ $totaldana }}</p>
                </div>

            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-green">
                <div class="stats-icon"><i class="fa fa-arrow-circle-down"></i></div>
                <div class="stats-info">
                    <h4> Dana Masuk</h4>
                    {{-- <p>{{ $total }}</p> --}}
                    <p>{{ $total->jumlah_iuran }}</p>
                </div>

            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-orange">
                <div class="stats-icon"><i class="fa fa-link"></i></div>
                <div class="stats-info">
                    <h4>Menunggu</h4>
                    <p>{{ $menunggu }}</p>
                </div>
            </div>
        </div>
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fas fa-arrow-circle-up"></i></div>
                <div class="stats-info">
                    <h4>Dana Keluar</h4>
                    <p>{{ $danakeluar }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end col-3 -->


    <div class="row">
        <div class="col-xl-6 col-md-6">
            <form action="/admin/data-kegiatan/pengajuan" method="post">
                @csrf
                <div class="panel panel-inverse">
                    <!-- begin panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Form Pengajuan</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                                data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                                data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <!-- end panel-heading -->
                    <div class="panel-body">



                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1">
                                    <label for="name">Nama Kader</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="nama_kader">
                                </div>
                                <div class="col-md-1">
                                    <label for="name">Tanggal Ajuan</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" name="tgl_ajuan">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1">
                                    <label for="name">Jumlah Ajuan</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="jumlah_ajuan">
                                </div>
                                <div class="col-md-1">
                                    <label for="name">Rencana Ajuan</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="rencana_ajuan">
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-secondary float-right me-1 mb-1 mr-4">Tambah</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>

    <!-- History Pengajuan -->
    <div class="col-xl-6 col-md-6">
        <div class="panel panel-inverse">
            @isset($data)
                <div class="panel-body">
                    <h4> History Pemasukan</h4><br>

                    <!-- isi -->
                    <div class="scrollpengajuan">
                        <table class="table table-sm">
                            <tr>
                                <th>No. </th>
                                <th>Nama Kegiatan </th>
                                <th>Jumlah Iuran</th>
                            </tr>
                            @foreach ($data as $riwayat)
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td> {{ $riwayat->nama }}</td>
                                    <td> {{ $riwayat->jumlah_iuran }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            @endisset
        </div>
    </div>

    {{-- end row --}}
    </div>
    @isset($dataa)
        <div class="row">
            <div class="col-xl-12 col-md-6">
                <div class="panel panel-inverse ">
                    <div class="panel-body">
                        <div class="container">
                            <br>
                            <h4> Riwayat Pengajuan</h4>
                            <br>
                            <h6>Status Pengajuan bisa dilihat disini</h6><br>
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
                                        @foreach ($dataa as $dp)
                                            <tr>
                                                <td> {{ $loop->iteration }}</td>
                                                <td> {{ $dp->tgl_ajuan }} </td>
                                                <td> {{ $dp->jumlah_ajuan }} </td>
                                                <td> {{ $dp->rencana_ajuan }} </td>
                                                <td>
                                                    @if ($dp->status == '0')
                                                        <a type="button" class="btn btn-warning btn-xs me-1 mb-1">Menunggu</a>
                                                    @elseif($dp->status == '1')
                                                        <a type="button" class="btn btn-success btn-xs me-1 mb-1">Disetujui</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($dp->status == '1')
                                                        <button class="btn btn-outline-danger" data-toggle="modal"
                                                            data-target="#bukti{{ $dp->id }}"><i
                                                                class="	far fa-arrow-alt-circle-up"></i> Upload
                                                            Bukti</i>
                                                        </button>
                                                        <div class="modal fade" id="bukti{{ $dp->id }}" role="dialog"
                                                            arialabelledby="modalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Bukti</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" arial-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form
                                                                        action="/admin/data-kegiatan/create_bukti/{{ $dp->id }}"
                                                                        method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <label for="name">Terpakai</label><br>
                                                                                <input type="file" id="bukti"
                                                                                    name="bukti">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="name">Bukti
                                                                                    Angka</label><br>
                                                                                <input type="text" id="bukti_angka"
                                                                                    name="bukti_angka">
                                                                            </div>
                                                                        </div>
                                                                        <button type="submit"
                                                                            class="btn btn-secondary float-right me-1 mb-1 mr-4">Tambah</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td>{{ $dp->bukti_angka }} </td>
                                                <td>{{ $dp->kembali }} </td>
                                                <td>
                                                    @if ($dp->statusakhir == '0')
                                                        <a type="button"
                                                            class="btn btn-warning btn-xs me-1 mb-1">Menunggu</a>
                                                    @elseif ($dp->statusakhir == '1')
                                                        <a type="button" class="btn btn-success btn-xs me-1 mb-1">Selesai</a>
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
    @endisset
@endsection

@push('scripts')
    <script src="/assets/plugins/moment/moment.js"></script>
    <script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>

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
