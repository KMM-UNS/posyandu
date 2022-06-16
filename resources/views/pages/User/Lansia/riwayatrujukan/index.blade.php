@extends('layouts.user')

@push('css')
<!-- datatables -->
<link href="{{ asset('/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" />
<!-- end datatables -->
@endpush

@section('content')
<h1 class="page-header">Riwayat Rujukan Lansia<small> @yield('title')</small></h1>
<!-- begin panel -->
<div class="panel panel-inverse">
  <!-- begin panel-heading -->
  <div class="panel-heading">
    
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
    </div>
    
  </div>
  
  


  <div class="panel-body">
    
    {{ $dataTable->table() }}
  </div>
</div>

  {{-- <table class="table">
    
    <thead>
      <tr>
        <th scope="col">Tanggal Surat</th>
        <th scope="col">Nama Lansia</th>
        <th scope="col">Umur</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Alamat</th>
        <th scope="col">Keluhan</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
</div> --}}


@endsection

@push('scripts')
<!-- datatables -->
<script src="{{ asset('assets/js/custom/datatable-assets.js') }}"></script>
{{ $dataTable->scripts() }}
<!-- end datatables -->

<script src="{{ asset('assets/js/custom/delete-with-confirmation.js') }}"></script>
<script>
  $(document).on('delete-with-confirmation.success', function() {
    $('.buttons-reload').trigger('click')
  })
</script> 

@endpush