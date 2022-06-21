@extends('layouts.user')

@push('css')
<!-- datatables -->
<link href="{{ asset('/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" />
<!-- end datatables -->
@endpush

@section('content')


<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
  <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Master Data</a></li>
  <li class="breadcrumb-item active">@yield('Riwayat Pantauan KMS')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Riwayat KMS Lansia<small> </small></h1>
<!-- end page-header -->


<!-- begin panel -->
<div class="panel panel-inverse">
  <!-- begin panel-heading -->
  <div class="panel-heading">
    
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
    </div>
  </div>
  <!-- end panel-heading -->
  <!-- begin panel-body -->
  {{-- <table class="table " id="kmslansia">
	<thead>
		<tr>
			
			<th scope="col"><strong> Tanggal Pemeriksaan </strong></th>
			<th scope="col"><strong> Kegiatan Harian </strong></th>
			<th scope="col"><strong> Status Mental </strong></th>
			<th scope="col"><strong> Tinggi Badan </strong></th>
			<th scope="col"><strong> Berat Badan </strong></th>
			<th scope="col"><strong> Indeks Massa Tubuh </strong></th>
			<th scope="col"><strong>Tekanan Darah </strong></th>
			<th scope="col"><strong> Hemoglobin </strong></th>
			<th scope="col"><strong> Reduksi Urine </strong></th>
			<th scope="col"><strong> Protein Urine </strong></th>
		</tr>
	</thead>
	<tbody>
	</tbody>
  </table> --}}
  <div class="panel-body">
    {{ $dataTable->table() }}

  </div>
  <!-- end panel-body -->
</div>

<!-- end panel -->


  <!-- begin page-header -->
  <h1 class="page-header">Riwayat Pantauan Kesehatan<small> @yield('title')</small></h1>
  <!-- end page-header -->
  
  
  <!-- begin panel -->
  <div class="panel panel-inverse">
	<!-- begin panel-heading -->
	<div class="panel-heading">
	  
	  <div class="panel-heading-btn">
		<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
		<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
	  </div>
	</div>
	<!-- end panel-heading -->
	<!-- begin panel-body -->
	<table class="table " >
		<thead>
			<tr>
				
				<th scope="col"><strong> Tanggal Pemeriksaan </strong></th>
				<th scope="col"><strong> Keluhan </strong></th>
				<th scope="col"><strong> Tindakan </strong></th>
				<th scope="col"><strong> Nama Pemeriksa </strong></th>
				
			</tr>
		</thead> 
		<tbody>
			@foreach($keluhan_tindakans as $keluhan_tindakan)
			<tr>
				
				<td>{{ $keluhan_tindakan->tanggal_pemeriksaan }}</td>
				<td>{{ $keluhan_tindakan->keluhan}}</td>
				<td>{{ $keluhan_tindakan->tindakan}}</td>
				<td>{{ $keluhan_tindakan->kader->nama}}</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
{{-- </div> --}}
	<!-- end panel-body -->
  
	<h1 class="page-header">Grafik Indeks Massa Tubuh<small> @yield('title') </small></h1>

	 <!-- begin panel -->
	<div class="panel panel-inverse">
		<!-- begin panel-heading -->
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			  </div>
		</div>	
		<div>
				<body class="h-screen bg-gray-100">

					<div class="container px-4 mx-auto">
					
						<div class="p-6 m-20 bg-white rounded shadow">
							{!! $chart->container() !!}
						</div>
					
					</div>
					
					<script src="{{ $chart->cdn() }}"></script>
					{{ $chart->script() }}
				</body>
			</div>
	</div>

  
@endsection

@push('scripts')
<!-- datatables -->
<script src="{{ asset('assets/js/custom/datatable-assets.js') }}"></script>
{{ $dataTable->scripts() }}
<!-- end datatables -->
{{-- <script>
	var datatable = $('#kmslansia').DataTable({
		processing: true,
		serverSide: true,
		ordering: true,
		ajax: {
			url: '{!! url()->current() !!}',
		},
		columns: [
			
			{ data: 'tanggal_pemeriksaan', name: 'tanggal_pemeriksaan' },
			{ data: 'kegiatan_harian', name: 'kegiatan_harian' },
			{ data: 'status_mental', name: 'status_mental' },
			{ data: 'tb', name: 'tb' },
			{ data: 'bb', name: 'bb' },
			{ data: 'tekanan_darah', name: 'tekanan_darah' },
			{ data: 'hemoglobin', name: 'hemoglobin' },
			{ data: 'reduksi_urine', name: 'reduksi_urine' },
			{ data: 'protein_urine', name: 'protein_urine' },
			
			
			
		]
	})
</script> --}}

{{-- <script>
	var datatable = $('#keluhantindakan').DataTable({
		processing: true,
		serverSide: true,
		ordering: true,
		ajax: {
			url: '{!! url()->current() !!}',
		},
		columns: [
			{ data: 'id', name: 'id' },
			{ data: 'lansia.nama_lansia_id', name: 'lansia.nama_lansia_id' },
			{ data: 'tanggal_pemeriksaan', name: 'tanggal_pemeriksaan' },
			{ data: 'keluhan', name: 'keluhan' },
			{ data: 'tindakan', name: 'tindakan' },
			{ data: 'kader.nama_pemeriksa', name: 'kader.nama_pemeriksa' },
			
			
		]
	})
</script> --}}

<script src="{{ asset('assets/js/custom/delete-with-confirmation.js') }}"></script>
<script>
  $(document).on('delete-with-confirmation.success', function() {
    $('.buttons-reload').trigger('click')
  })
</script> 

@endpush