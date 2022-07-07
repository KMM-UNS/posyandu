@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

@section('content')
    <div class="row">
        <div class="col-xl-12 col-md-6">
            <div class="panel panel-inverse ">
                <div class="panel-body">
                    <div class="container">
                        <table id="#example" class="table table-striped table-bordered table-sm" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Jumlah</th>
                                    <th>Rencana </th>
                                    <th>Status</th>
                                    <th>Bukti</th>
                                    <th>Kembali</th>
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
                                        <td> A </td>
                                        <td> A </td>
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
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
@endpush
