@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', 'Data Lansia')

@push('css')
<!-- datatables -->
{{-- <link href="{{ asset('/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" /> --}}
<!-- end datatables -->
@endpush

@section('content')

<!-- begin page-header -->
<h1 class="page-header">Laporan Kematian Lansia</h1>
<!-- end page-header -->

<div class="panel panel-inverse">
  <div class="panel-heading">
    <h4 class="panel-title">Cetak Laporan Kematian</h4>
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
    </div>
  </div>
  <div class="panel-body">
    <div class="input-group mb-3">
      <label for="label"> Tanggal Awal</label>
      <input type="date" name="tglawal" id="tglawal" class="form-control"/>
    </div>
    <div class="input-group mb-3">
      <label for="label"> Tanggal Akhir</label>
      <input type="date" name="tglakhir" id="tglakhir" class="form-control"/>
    </div>
    <div class="input-group mb-3">
      <a href="" onclick="this.href='/admin/data-lansia/cetak-laporankematian/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value" target="_blank" class="btn btn-primary col-md-12">Cetak Laporan Pertanggal<i class="fas fa-print"></i></a>
    </div>
    {{-- <div class="input-group mb-3">
      <a href="" onclick="this.href='/cetak-laporankematian/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value" target="_blank" class="btn btn-primary col-md-12">Cetak Laporan Pertanggal<i class="fas fa-print"></i></a>
    </div> --}}
  </div>
</div>

<!-- begin panel -->
{{-- <div class="panel panel-inverse">
  <!-- begin panel-heading -->
  <div class="panel-heading">
    <h4 class="panel-title">DataTable - @yield('title')</h4>
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
    </div>
  </div>
  <!-- end panel-heading -->
  <!-- begin panel-body -->
  <div class="panel-body">
    {{ $dataTable->table() }}
  </div>
  <!-- end panel-body -->
</div> --}}
<!-- end panel -->
@endsection

@push('scripts')
<!-- datatables -->
{{-- <script src="{{ asset('assets/js/custom/datatable-assets.js') }}"></script>
{{ $dataTable->scripts() }} --}}
<!-- end datatables -->

<script src="{{ asset('assets/js/custom/delete-with-confirmation.js') }}"></script>
<script>
  $(document).on('delete-with-confirmation.success', function() {
    $('.buttons-reload').trigger('click')
  })
</script>
@endpush
