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
    {{-- @foreach ($jadwalimunisasis as $jadwalimunisasi)
    {{ $jadwalimunisasi->tanggal }}
    @endforeach --}}
	<!-- end page-header -->
	<!-- begin timeline -->
	{{-- <ul class="timeline">
		<li> --}}
			<!-- begin timeline-time -->
			<div class="timeline-time">
				{{-- <span class="date">Tanggal</span> --}}
                @foreach ($jadwalimunisasis as $jadwalimunisasi)
                <div class="date">Tanggal
                         :{{ $jadwalimunisasi->tanggal }}
                </div>
                 {{-- @endforeach --}}
                {{-- {{$jadwalimunisasi->tanggal}} --}}
				{{-- <span class="time">Keterangan</span> --}}
                {{-- {{$jadwalimunisasi->keterangan}} --}}


			{{-- </div> --}}
			<!-- end timeline-time -->
			<!-- begin timeline-icon -->
			{{-- <div class="timeline-icon">
				<a href="javascript:;">&nbsp;</a>
			</div>
			<!-- end timeline-icon -->
			<!-- begin timeline-body -->
			<div class="timeline-body">
				<div class="timeline-header"> --}}
					{{-- <span > Keterangan </span> --}}
                    {{-- @foreach ($jadwalimunisasis as $jadwalimunisasi) --}}
                    <div class="date">Keterangan
                    :{{ $jadwalimunisasi->keterangan }}
                </div>
            </div>
            @endforeach
                {{-- </div> --}}
				{{-- <div class="timeline-content">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus turpis quis tincidunt luctus.
						Nam sagittis dui in nunc consequat, in imperdiet nunc sagittis.
					</p>
				</div> --}}
			{{-- <!-- end timeline-body -->
		</li>
		<li> --}}
			{{-- <!-- begin timeline-time -->
			<div class="timeline-time">
				<span class="date">yesterday</span>
				<span class="time">20:17</span>
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
					<span class="username">Darren Parrase</span>
				</div>
				<div class="timeline-content">
					<p>Location: United States</p>
				</div>
			<!-- end timeline-body -->
		</li>
		<li>
			<!-- begin timeline-time -->
			<div class="timeline-time">
				<span class="date">24 February 2014</span>
				<span class="time">08:17</span>
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
					<span class="userimage"><img src="/assets/img/user/user-6.jpg" alt="" /></span>
					<span class="username">Richard Leong</span>
					<span class="views">1,282 Views</span>
				</div>
				<div class="timeline-content">
					<p class="lead">
						<i class="fa fa-quote-left fa-fw pull-left"></i>
						Quisque sed varius nisl. Nulla facilisi. Phasellus consequat sapien sit amet nibh molestie placerat. Donec nulla quam, ullamcorper ut velit vitae, lobortis condimentum magna. Suspendisse mollis in sem vel mollis.
						<i class="fa fa-quote-right fa-fw pull-right"></i>
					</p> --}}
				{{-- </div>
				<div class="timeline-footer">
					<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
					<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
					<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
				</div>
			</div>
			<!-- end timeline-body -->
		</li>
		<li>
			<!-- begin timeline-time -->
			<div class="timeline-time">
				<span class="date">10 January 2014</span>
				<span class="time">20:43</span>
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
					<span class="userimage"><img src="/assets/img/user/user-7.jpg" alt="" /></span>
					<span class="username">Lelouch Wong</span>
					<span class="views">1,021,282 Views</span>
				</div>
				<div class="timeline-content">
					<h4 class="template-title">
						<i class="fa fa-map-marker-alt text-danger fa-fw"></i>
						795 Folsom Ave, Suite 600 San Francisco, CA 94107
					</h4>
					<p>In hac habitasse platea dictumst. Pellentesque bibendum id sem nec faucibus. Maecenas molestie, augue vel accumsan rutrum, massa mi rutrum odio, id luctus mauris nibh ut leo.</p>
					<p class="m-t-20">
						<img src="/assets/img/gallery/gallery-4.jpg" alt="" />
					</p>
				</div>
				<div class="timeline-footer">
					<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
					<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
					<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
				</div>
			</div>
			<!-- end timeline-body -->
		</li>
		<li>
			<!-- begin timeline-icon -->
			<div class="timeline-icon">
				<a href="javascript:;">&nbsp;</a>
			</div>
			<!-- end timeline-icon -->
			<!-- begin timeline-body -->
			<div class="timeline-body">
				Loading...
			</div>
			<!-- begin timeline-body -->
		</li>
	</ul> --}}
	<!-- end timeline -->
@endsection

@push('scripts')
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script src="/assets/js/demo/timeline.demo.js"></script>
@endpush
