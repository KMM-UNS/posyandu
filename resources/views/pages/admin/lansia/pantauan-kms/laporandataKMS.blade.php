@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])


@push('css')


@section('content')
<!-- begin page-header -->
<h1 class="page-header"><center>Laporan KMS Lansia</center></h1>
<!-- end page-header -->
<div class="d-flex justify-content-center ">
  <div class="col-7 ui-sortable">
<div class="panel panel-inverse">
  <div class="panel-heading">
    <h4 class="panel-title">Laporan KMS Lansia</h4>
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
    </div>
  </div>
  <form action="/admin/data-lansia/laporandatakmslansia" method="post">
    @csrf
  <div class="panel-body">
    <div class="form-group">
    <div class="input-group mb-3">
      <label for="label"> Nama Lansia</label>
      <x-form.Dropdown name="nama_lansia1" :options="$nama_lansia" selected="{{{ old('nama_lansia1') ?? ($data['nama_lansia1'] ?? null) }}}" required />
    </div>
    <button class="btn btn-success" type="submit" name="submit" value="table">Search</button>
  </div>
</div>
</form>
  </div>
  </div>
</div>

  @if(session('data'))
  <div class="panel panel-inverse">
    <div class="panel-body">
      <center><h4> Laporan Data KMS Lansia</h4></center>
      <a href="/admin/data-lansia/cetaklaporandatakms/{{ session('data')->first()->lansia->id }}" class="btn btn-secondary btn-sm float-right mr-4"><i class="fa fa-print fa-fw"></i> Cetak Laporan </a>
      <br>
    <div class="form-group my-5">
    <table id="rekaps" class="table table-bordered my-5" align="center" rules="all" border="1px" style="width: 95%; margin-top: 1 rem;
    margin-bottom: 1 rem;">
      <tr>
        <th>No. </th>
        <th>Tanggal Pemeriksaan </th>
        <th>Nama Lansia</th>
        <th>Tekanan Darah</th>
        <th>Tinggi Badan</th>
        <th>Berat Badan</th>
        <th>Indeks Massa Tubuh</th>
      </tr>
      @foreach ( session('data') as $cetakkms)
      <tr>
        <td> {{ $loop->iteration }}</td>
        <td> {{ $cetakkms->tanggal_pemeriksaan }}</td>
        <td> {{ $cetakkms->lansia->nama_lansia }}</td>
        <td> {{ $cetakkms->tekanan_darah }}</td>
        <td> {{ $cetakkms->tb }}</td>
        <td> {{ $cetakkms->bb }}</td>
        <td> {{ $cetakkms->indeks_massa_tubuh }}</td>
      </tr> 
      @endforeach
    </div>

    </div>


</div>

@endif
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