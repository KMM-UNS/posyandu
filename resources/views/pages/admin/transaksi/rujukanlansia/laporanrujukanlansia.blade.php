@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])


@push('css')

@endpush

@section('content')

<!-- begin page-header -->
<h1 class="page-header"><center>Laporan Rujukan Lansia</center></h1>
<!-- end page-header -->
<div class="d-flex justify-content-center ">
  <div class="col-7 ui-sortable">
<div class="panel panel-inverse">
  <div class="panel-heading">
    <h4 class="panel-title">Laporan Rujukan Lansia</h4>
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
    </div>
  </div>
  <form action="/admin/data-transaksi/laporanrujukanlansia" method="post">
    @csrf
  <div class="panel-body">
    <div class="form-group">
    <div class="input-group mb-3">
      <label for="label"> Tanggal Awal</label>
      <input type="date" name="tglawal" id="tglawal" class="form-control"/>
    </div>
    <div class="input-group mb-3">
      <label for="label"> Tanggal Akhir</label>
      <input type="date" name="tglakhir" id="tglakhir" class="form-control"/>
    </div>
    <button class="btn btn-success" type="submit" name="submit" value="table">Search</button>
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
      <center><h4> Laporan Rujukan Lansia</h4></center>
      <a href="/admin/data-transaksi/cetaklaporanrujukanlansia/{{ $startDate }}/{{ $endDate }}" class="btn btn-secondary btn-sm float-right mr-4"><i class="fa fa-print fa-fw"></i> Cetak Laporan </a>
      <br>
      
    <div class="form-group my-5">
    
    <table id="rekaps" class="table table-bordered my-5" align="center" rules="all" border="1px" style="width: 95%; margin-top: 1 rem;
    margin-bottom: 1 rem;">
       <tr>
        <th>No. </th>
        <th>Nama Lansia</th>
        <th>Tanggal Pemeriksaan</th>
        <th>Umur</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Keluhan</th>
      </tr>
      @foreach ( $data as $cetakrl)
      <tr>
        <td> {{ $loop->iteration }}</td>
        <td> {{ $cetakrl->rujukan->nama_lansia }}</td>
        <td> {{ $cetakrl->tanggal_surat }}</td>
        <td> {{ $cetakrl->umur }}</td>
        <td> {{ $cetakrl->jeniskelamin }}</td>
        <td> {{ $cetakrl->alamat }}</td>
        <td> {{ $cetakrl->keluhan }}</td>
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