@extends('layouts.default')

@section('title', 'Morris Chart')

@push('css')
    <link href="/assets/plugins/morris.js/morris.css" rel="stylesheet" />
    <link href="/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
    <link href="/assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
    <link href="/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="/assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
@endpush


@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Chart</a></li>
        <li class="breadcrumb-item active">Morris Chart</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Dashboard Admin </h1>
    <!-- end page-header -->
    <div class="row">
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-teal">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
                <div class="stats-content">
                    <div class="stats-title">TODAY'S VISITS</div>
                    <div class="stats-number">7,842,900</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 70.1%;"></div>
                    </div>
                    <div class="stats-desc">Better than last week (70.1%)</div>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
                <div class="stats-content">
                    <div class="stats-title">TODAY'S PROFIT</div>
                    <div class="stats-number">180,200</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 40.5%;"></div>
                    </div>
                    <div class="stats-desc">Better than last week (40.5%)</div>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-indigo">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
                <div class="stats-content">
                    <div class="stats-title">NEW ORDERS</div>
                    <div class="stats-number">38,900</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 76.3%;"></div>
                    </div>
                    <div class="stats-desc">Better than last week (76.3%)</div>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-dark">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
                <div class="stats-content">
                    <div class="stats-title">NEW COMMENTS</div>
                    <div class="stats-number">3,988</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 54.9%;"></div>
                    </div>
                    <div class="stats-desc">Better than last week (54.9%)</div>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
    </div>

    <!-- begin row -->
    <div class="row">
        <!-- begin col-4 -->
        <div class="col-xl-6 col-md-6">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="index-2">
                <div class="panel-heading">
                    <h4 class="panel-title">Chat dengan Pengguna</h4>
                </div>
                @php
                    if (auth() != null) {
                        $h = auth()->user();
                    }
                @endphp
                @foreach ($data as $r)
                    <div class="panel-body bg-light">
                        <div class="chats" data-scrollbar="true" data-height="225px">
                            @if ($h != null)
                                @if ($r->user->name == $h['name'])
                                    <div class="right">
                                        <span class="date-time">{{ $r->jam }}</span>
                                        <a href="javascript:;" class="name"><span
                                                class="label label-primary">{{ $r->user->name }}</span> Me</a>
                                        <a href="javascript:;" class="image"><img alt=""
                                                src="/assets/img/user/user-13.jpg" /></a>
                                        <div class="message">
                                            {{ $r->komentar }}
                                        </div>
                                    </div>
                                @else
                                    <div class="left">
                                        <span class="date-time">{{ $r->jam }}</span>
                                        <a href="javascript:;" class="name">{{ $r->user->name }}</a>
                                        <a href="javascript:;" class="image"><img alt=""
                                                src="/assets/img/user/user-12.jpg" /></a>
                                        <div class="message">
                                            {{ $r->komentar }}
                                        </div>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="panel-footer">
                <form name="send_message_form" data-id="message-form" action="/user/tambahkomentar" method="POST">
                    @csrf
                    <div class="input-group">
                        <textarea class="form-control" id="komentar" name="komentar" class="form-control" autofocus
                            data-parsley-required="true" placeholder="Enter your message here."></textarea>
                        <span class="input-group-append">
                            <button class="btn btn-primary" type="submit">Kirim</i></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <!-- end panel -->

        <!-- end col-4 -->
    </div>
    <!-- end row -->
    </div>



@endsection



{{-- <div class="row">
		<!-- begin col-4 -->
		<div class="col-6 col-md-6">
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="index-2">
				<div class="panel-heading">
					<h4 class="panel-title">Forum Diskusi</h4>
					<span class="label label-teal"></span>
				</div>
				@php
					if(auth() != null){
						$h = auth()->user();
					}
				@endphp
				@foreach ($data as $r)
				<div class="panel-body bg-light">
					<div class="chats" data-scrollbar="true" data-height="225px">
						@if ($h != null)
						@if ($r->user->name == $h['name'])
						<div class="right">
							<span class="date-time">{{ $r->jam }}</span>
							<a href="javascript:;" class="name"><span class="label label-primary">{{ $r->user->name }}</span> Me</a>
							<a href="javascript:;" class="image"><img alt="" src="/assets/img/user/user-13.jpg" /></a>
							<div class="message">
								{{ $r->komentar }}
							</div>
						</div>
						@else
						<div class="left">
							<span class="date-time">{{ $r->jam }}</span>
							<a href="javascript:;" class="name">{{ $r->user->name }}</a>
							<a href="javascript:;" class="image"><img alt="" src="/assets/img/user/user-12.jpg" /></a>
							<div class="message">
								{{ $r->komentar }}
							</div>
						</div>
						@endif
						@endif
					</div>
				</div>
				@endforeach
				<div class="panel-footer">
					<form name="send_message_form" data-id="message-form" action="/user/tambahkomentar"  method="POST"> @csrf
						<div class="input-group">
							<textarea class="form-control" id="komentar" name="komentar" class="form-control" autofocus data-parsley-required="true" placeholder="Enter your message here."></textarea>
							<span class="input-group-append">
								<button class="btn btn-primary" type="submit">Kirim</i></button>
							</span>
						</div>
					</form>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-4 -->
</div> --}}


@push('scripts')
    <script src="/assets/plugins/raphael/raphael.min.js"></script>
    <script src="/assets/plugins/morris.js/morris.min.js"></script>
    <script src="/assets/js/demo/chart-morris.demo.js"></script>
    <script src="/assets/plugins/d3/d3.min.js"></script>
    <script src="/assets/plugins/nvd3/build/nv.d3.js"></script>
    <script src="/assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
    <script src="/assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js"></script>
    <script src="/assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
    <script src="/assets/plugins/gritter/js/jquery.gritter.js"></script>
    <script src="/assets/js/demo/dashboard-v2.js"></script>
@endpush
