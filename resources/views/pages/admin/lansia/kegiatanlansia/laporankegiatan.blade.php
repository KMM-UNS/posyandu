@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Data Lansia' : 'Create Data Lansia')

@push('css')
    <style>
        .scrollpengajuan {
            height: 200px;
            overflow: scroll;
        }
    </style>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/dataTables/datatables.min.css" rel="stylesheet">
    {{-- <style>
        .scroll {
            height: 200px;
            overflow: scroll;
        }
    </style>
    <link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables.net-scroller-bs4/css/scroller.bootstrap4.min.css" rel="stylesheet" /> --}}
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
                    <h4>Dana Masuk</h4>
                    <p>{{ $total->jumlah_iuran }}</p>
                    {{-- <button class="btn float-right mr-1" data-toggle="modal" data-target="#tambah"> <i
                            class="fa fa-arrow-alt-circle-right"></i></button>
                    <div class="modal fade" id="tambah" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">History Pemasukkan</h5>
                                    <button type="button" class="close" data-dismiss="modal" arial-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @isset($data)
                                    <div class="panel-body">

                                        <!-- isi -->

                                        <table class="table table-bordered my-2" align="center" rules="all" border="1px"
                                            style="width: 95%; margin-top: 1 rem;
                                                margin-bottom: 1 rem;">
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
                                @endisset
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-orange">
                <div class="stats-icon"><i class="fa fa-clock-o"></i></div>
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

        <!-- pemasukan -->
        {{-- @isset($data)
    <div class="col-xl-6 col-md-6">
    <div class="panel panel-inverse">
        <div class="panel-body">
            <h4><center> History Pemasukan</center></h4>
            <!-- isi -->
            <div class="form-group my-5">
                <table class="table table-bordered my-5" align="center" rules="all" border="1px" style="width: 95%; margin-top: 1 rem;
                margin-bottom: 1 rem;">
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
    </div>
    </div>
@endisset --}}
        <!-- pengajuan -->

        <div class="col-xl-6 col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <h4> Pengajuan</h4>
                    {{-- <form action="/admin/data-kegiatan/pengajuan" method="post"> --}}
                    <form action="/admin/data-kegiatan/pengajuan" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Nama Kader</label>
                                        <input type="text" name="nama_kader">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Tanggal Ajuan</label>
                                        <input type="date" name="tgl_ajuan">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Jumlah Ajuan</label>
                                        <input type="text" name="jumlah_ajuan">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Rencana Ajuan</label>
                                        <input type="text" name="rencana_ajuan">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-secondary float-right me-1 mb-1 mr-4">Tambah</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- History Pengajuan -->
        <div class="col-xl-6 col-md-6">
            <div class="panel panel-inverse">
                @isset($data)
                    <div class="panel-body">

                        <!-- isi -->
                        <div class="scrollpengajuan">
                            <table class="table table-bordered my-2" align="center" rules="all" border="1px"
                                style="width: 95%; margin-top: 1 rem;
                                                margin-bottom: 1 rem;">
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
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered  table-td-valign-middle" id="datatables">
                                    {{-- <table class="table table-stripped table-hover datatab"> --}}
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
                                                                class="	far fa-arrow-alt-circle-up"></i> Upload Bukti</i>
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
                                                                                <label for="name">Bukti Angka</label><br>
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
                            {{-- <div class="row">
                                <div class="col-sm">
                                    <div class="panel-body" style="font-size: 14px">

                                        <table id="#example" class="table table-striped table-bordered table-sm"
                                            cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No. </th>
                                                    <th>Tanggal Pengajuan</th>
                                                    <th>Jumlah</th>
                                                    <th>Rencana </th>
                                                    <th>Status</th>
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
                                                    </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endisset


@endsection
@push('script')
    <script src="/assets/dataTables/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatables').DataTable();
        });
    </script>
    {{-- <script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="/assets/plugins/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="/assets/plugins/datatables.net-scroller-bs4/js/scroller.bootstrap4.min.js"></script>
    <script>
        if ($('#data-table-scroller').length !== 0) {
            $('#data-table-scroller').DataTable({
                ajax: "/assets/js/demo/json/scroller_demo.json",
                deferRender: true,
                scrollY: 300,
                scrollCollapse: true,
                scroller: true,
                responsive: true
            });
        }
    </script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script> --}}
    {{-- <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.datatab').DataTable();
        });
    </script> --}}
@endpush
