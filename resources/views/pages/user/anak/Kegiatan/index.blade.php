@extends('layouts.user')

@section('title', 'Timeline')

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
    {{-- <li class="breadcrumb-item"><a href="javascript:;">Extra</a></li> --}}
    <li class="breadcrumb-item active">Timeline</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Informasi Kegiatan Posyandu</h1>
<!-- end page-header -->
<!-- begin timeline -->
<ul class="timeline">
    @foreach($jadwalimunisasis as $jadwalimunisasi)
    <li>
        <!-- begin timeline-time -->
        <div class="timeline-time">
            <span class="date">{{$jadwalimunisasi->tanggal}}</span>
            <span class="text">{{$jadwalimunisasi->tempat}}</span>
            {{-- <span class="text">{{$jadwalimunisasi->kader->nama}}</span> --}}
        </div>
        <!-- end timeline-time -->
        <!-- begin timeline-icon -->
        <div class="timeline-icon">
            <a href="javascript:;">&nbsp;</a>
        </div>
        <!-- end timeline-icon -->
        <!-- begin timeline-body -->
        <div class="timeline-body">
            <div class="timeline-header">
                <span class="username"><a href="javascript:;">Keterangan :  {{$jadwalimunisasi->keterangan}}</a> <small></small></span>
            </div>
            <div class="timeline-header">
                    <span class="username"><a href="javascript:;">Penanggung Jawab : {{$jadwalimunisasi->kader->nama}}</a> <small></small></span>
            </div>
        </div>
        <!-- end timeline-body -->
    </li>
    @endforeach
</ul>
<!-- end timeline -->
@endsection

@push('scripts')
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="/assets/js/demo/timeline.demo.js"></script>
@endpush
