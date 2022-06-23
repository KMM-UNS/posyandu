@extends('layouts.user')

@section('title', 'Timeline')

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
    {{-- <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Extra</a></li> --}}
    <li class="breadcrumb-item active">Timeline</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<div align="center">
<h1 class="page-header"><strong>Jadwal Imunisasi Anak</strong></h1>
</div>
<!-- end page-header -->
<!-- begin timeline -->
<ul class="timeline">
    @foreach($jadwalimunisasis as $jadwalimunisasi)
    <li>
        {{-- <div class="text"></div> --}}
            {{-- <div class="text">Tanggal --}}
            {{-- </div> --}}
            <div class="timeline-time">
            <span class="date">{{$jadwalimunisasi->tanggal}}</span>
        </div>
        <!-- end timeline-time -->
        <!-- begin timeline-icon -->
        <div class="timeline-icon">
            <a href="javascript:;">&nbsp;</a>
        </div>
        <!-- end timeline-icon -->
        <!-- begin timeline-body -->
        <div class="timeline-body">
            <div class="timeline-header"><strong>Keterangan </strong>
            </div>
            <div class="timeline-content">
                <p>
                    {{$jadwalimunisasi->keterangan}}
                </p>
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
