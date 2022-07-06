@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', 'Data Rujukan Anak')

@push('css')

@endpush

@section('content')

<!-- begin page-header -->
<h1 class="page-header">Laporan Rujukan Anak</h1>
<!-- end page-header -->

<div class="panel panel-inverse">
  <div class="panel-heading">
    <h4 class="panel-title">Laporan Rujukan Anak</h4>
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
    </div>
  </div>
  <form action="/admin/data-transaksi/laporanrujukananak" method="post">
    @csrf
  <div class="panel-body">
    <div class="form-group">
        <label for="name">Tanggal Awal</label>
        <input type="date" id="tglawal" name="tglawal" class="form-control"/>
        <label for="name">Tanggal Akhir</label>
        <input type="date" id="tglakhir" name="tglakhir" class="form-control"/>
    </div>
    <button class="btn btn-success" type="submit" name="submit" value="table">Search</button>
  </div>
</div>
</form>
  </div>

  @isset($data)
  <div class="panel panel-inverse">
    <br>

    <div class="panel-body">
      <center><h4> Laporan Rujukan</h4></center>
      <a href="/admin/data-transaksi/cetaklaporanrujukan/{{ $startDate }}/{{ $endDate }}" class="btn btn-secondary btn-sm float-right mr-4"><i class="fa fa-print fa-fw"></i> Cetak Laporan </a>
      <br>

    <div class="form-group my-5">

    <table id="rekaps" class="table table-bordered my-5" align="center" rules="all" border="1px" style="width: 95%; margin-top: 1 rem;
    margin-bottom: 1 rem;">
      <tr>
        <th>No. </th>
        <th>Nama Anak</th>
        <th>Kepada</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Sakit</th>
        <th>Keterangan Rujukan</th>
        {{-- <th>Jenis Vaksin</th>
        <th>Vitamin Anak</th>
        <th>Keluhan</th>
        <th>Tindakan</th>
        <th>Status Gizi</th>
        <th>Kader</th> --}}
      </tr>
      @foreach ( $data as $cetak)
      <tr>
        <td> {{ $loop->iteration }}</td>
        <td> {{ $cetak->data_anak->nama_anak }}</td>
        <td> {{ $cetak->kepada}}</td>
        <td> {{ $cetak->umur}}</td>
        <td> {{ $cetak->alamat}}</td>
        <td> {{ $cetak->keluhan }}</td>
        <td> {{ $cetak->keterangan_rujukan}}</td>
        {{-- <td> {{ $cetak->vitamin_anak->nama_vitamin}}</td>
        <td> {{ $cetak->keluhan}}</td>
        <td> {{ $cetak->tindakan}}</td>
        <td> {{ $cetak->status_gizi}}</td>
        <td> {{ $cetak->kader->nama}}</td> --}} --}}
      </tr>
      @endforeach
    </div>

    </div>


</div>

@endisset
@endsection

@push('scripts')

<script>

  $(document).ready(function(){
      var table = $('#rekaps').DataTable({
      pageLength: 10,
      processing: true,
      serverSide: false,
      dom: 'Blfrtip',
      });

  });
</script>
@endpush
