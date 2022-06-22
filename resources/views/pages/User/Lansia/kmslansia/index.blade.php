@extends('layouts.user')

@push('css')
    <!-- datatables -->
    <link href="{{ asset('/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
        rel="stylesheet" />
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
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                        class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
                        class="fa fa-minus"></i></a>
            </div>
        </div>
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
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                        class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
                        class="fa fa-minus"></i></a>
            </div>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body">
            <div class="form-group">
                <table class="table table-bordered my-3" align="center" border="1px"
                    style="width: 95%; margin-top: 1 rem; margin-bottom: 1 rem;">
                    <thead>
                        <tr>
                            <th scope="col"><strong> Tanggal Pemeriksaan </strong></th>
                            <th scope="col"><strong> Keluhan </strong></th>
                            <th scope="col"><strong> Tindakan </strong></th>
                            <th scope="col"><strong> Nama Pemeriksa </strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($keluhan_tindakans as $keluhan_tindakan)
                            <tr>

                                <td>{{ $keluhan_tindakan->tanggal_pemeriksaan }}</td>
                                <td>{{ $keluhan_tindakan->keluhan }}</td>
                                <td>{{ $keluhan_tindakan->tindakan }}</td>
                                <td>{{ $keluhan_tindakan->kader->nama }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end panel-body -->

    <h1 class="page-header">Grafik Indeks Massa Tubuh<small> @yield('title') </small></h1>

    <!-- begin panel -->
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                        class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
                        class="fa fa-minus"></i></a>
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

    <script src="{{ asset('assets/js/custom/delete-with-confirmation.js') }}"></script>
    <script>
        $(document).on('delete-with-confirmation.success', function() {
            $('.buttons-reload').trigger('click')
        })
    </script>
@endpush
