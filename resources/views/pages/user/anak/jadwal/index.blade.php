@extends('layouts.user')

@section('title', 'Jadwal Imunisasi')

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Extra</a></li>
        <li class="breadcrumb-item active">Jadwal Imunisasi</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Jadwal Imunisasi </h1>
                <table class="table table-danger table-striped">
                    <thead>
                        <tr>
                            <th scope="col"><strong> Tanggal </strong></th>
                            <th scope="col"><strong> Keterangan </strong></th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($jadwalimunisasis as $jadwalimunisasi)
                     <tr>
                        <td>{{ $jadwalimunisasi->tanggal }}</td>
                        <td>{{ $jadwalimunisasi->keterangan }}</td>
                     </tr>
                    @endforeach
                    </tbody>
                    </table>

@endsection

@push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="/assets/js/demo/timeline.demo.js"></script>
@endpush
