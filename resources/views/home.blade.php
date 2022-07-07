@extends('layouts.user')

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
        <li class="breadcrumb-item active">Dashboard v2</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Dashboard v2 <small>header small text goes here...</small></h1>
    <!-- end page-header -->
    <!-- begin row -->
    <div class="row">
        <!-- begin col-3 -->
        <div class="col-xl-4 col-md-6">
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
        <div class="col-xl-4 col-md-6">
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
        <div class="col-xl-4 col-md-6">
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

    </div>
    <!-- end row -->
    <!-- begin tabs -->
    {{-- <div class="row">
	<div class="col-xl-9 col-md-6">
	<ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile" data-sortable-id="index-2">
		<li class="nav-item"><a href="#latest-post" data-toggle="tab" class="nav-link active"><i class="fa fa-camera fa-lg m-r-5"></i> <span class="d-none d-md-inline">Latest Post</span></a></li>
		<li class="nav-item"><a href="#purchase" data-toggle="tab" class="nav-link"><i class="fa fa-archive fa-lg m-r-5"></i> <span class="d-none d-md-inline">Purchase</span></a></li>
		<li class="nav-item"><a href="#email" data-toggle="tab" class="nav-link"><i class="fa fa-envelope fa-lg m-r-5"></i> <span class="d-none d-md-inline">Email</span></a></li>
	</ul>
	<div class="tab-content" data-sortable-id="index-3">
		<div class="tab-pane fade active show" id="latest-post">
			<div class="height-sm" data-scrollbar="true">
				<ul class="media-list media-list-with-divider">
					<li class="media media-lg">
						<a href="javascript:;" class="pull-left">

						</a>
						<div class="media-body">
							<h5 class="media-heading">Aenean viverra arcu nec pellentesque ultrices. In erat purus, adipiscing nec lacinia at, ornare ac eros.</h5>
							Nullam at risus metus. Quisque nisl purus, pulvinar ut mauris vel, elementum suscipit eros. Praesent ornare ante massa, egestas pellentesque orci convallis ut. Curabitur consequat convallis est, id luctus mauris lacinia vel. Nullam tristique lobortis mauris, ultricies fermentum lacus bibendum id. Proin non ante tortor. Suspendisse pulvinar ornare tellus nec pulvinar. Nam pellentesque accumsan mi, non pellentesque sem convallis sed. Quisque rutrum erat id auctor gravida.
						</div>
					</li>
					<li class="media media-lg">
						<a href="javascript:;" class="pull-left">
							<img class="media-object rounded" src="/assets/img/gallery/gallery-10.jpg" alt="" />
						</a>
						<div class="media-body">
							<h5 class="media-heading">Vestibulum vitae diam nec odio dapibus placerat. Ut ut lorem justo.</h5>
							Fusce bibendum augue nec fermentum tempus. Sed laoreet dictum tempus. Aenean ac sem quis nulla malesuada volutpat. Nunc vitae urna pulvinar velit commodo cursus. Nullam eu felis quis diam adipiscing hendrerit vel ac turpis. Nam mattis fringilla euismod. Donec eu ipsum sit amet mauris iaculis aliquet. Quisque sit amet feugiat odio. Cras convallis lorem at libero lobortis, placerat lobortis sapien lacinia. Duis sit amet elit bibendum sapien dignissim bibendum.
						</div>
					</li>
					<li class="media media-lg">
						<a href="javascript:;" class="pull-left">
							<img class="media-object rounded" src="/assets/img/gallery/gallery-7.jpg" alt="" />
						</a>
						<div class="media-body">
							<h5 class="media-heading">Maecenas eget turpis luctus, scelerisque arcu id, iaculis urna. Interdum et malesuada fames ac ante ipsum primis in faucibus.</h5>
							Morbi placerat est nec pharetra placerat. Ut laoreet nunc accumsan orci aliquam accumsan. Maecenas volutpat dolor vitae sapien ultricies fringilla. Suspendisse vitae orci sed nibh ultrices tristique. Aenean in ante eget urna semper imperdiet. Pellentesque sagittis a nulla at scelerisque. Nam augue nulla, accumsan quis nisi a, facilisis eleifend nulla. Praesent aliquet odio non imperdiet fringilla. Morbi a porta nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
						</div>
					</li>
					<li class="media media-lg">
						<a href="javascript:;" class="pull-left">
							<img class="media-object rounded" src="/assets/img/gallery/gallery-8.jpg" alt="" />
						</a>
						<div class="media-body">
							<h5 class="media-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor accumsan rutrum.</h5>
							Fusce augue diam, vestibulum a mattis sit amet, vehicula eu ipsum. Vestibulum eu mi nec purus tempor consequat. Vestibulum porta non mi quis cursus. Fusce vulputate cursus magna, tincidunt sodales ipsum lobortis tincidunt. Mauris quis lorem ligula. Morbi placerat est nec pharetra placerat. Ut laoreet nunc accumsan orci aliquam accumsan. Maecenas volutpat dolor vitae sapien ultricies fringilla. Suspendisse vitae orci sed nibh ultrices tristique. Aenean in ante eget urna semper imperdiet. Pellentesque sagittis a nulla at scelerisque.
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="tab-pane fade" id="purchase">
			<div class="height-sm" data-scrollbar="true">
				<table class="table">
					<thead>
						<tr>
							<th>Date</th>
							<th class="hidden-sm text-center">Product</th>
							<th></th>
							<th>Amount</th>
							<th>User</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="f-w-600 text-muted">13/02/2013</td>
							<td class="hidden-sm text-center">
								<a href="javascript:;">
									<img src="/assets/img/product/product-1.png" alt="" width="32px"  />
								</a>
							</td>
							<td class="text-nowrap">
								<h6><a href="javascript:;" class="text-inverse">Nunc eleifend lorem eu velit eleifend, <br />eget faucibus nibh placerat.</a></h6>
							</td>
							<td class="text-blue f-w-600">$349.00</td>
							<td class="text-nowrap"><a href="javascript:;" class="text-inverse">Derick Wong</a></td>
						</tr>
						<tr>
							<td class="f-w-600 text-muted">13/02/2013</td>
							<td class="hidden-sm text-center">
								<a href="javascript:;">
									<img src="/assets/img/product/product-2.png" alt="" width="32px" />
								</a>
							</td>
							<td class="text-nowrap">
								<h6><a href="javascript:;" class="text-inverse">Nunc eleifend lorem eu velit eleifend, <br />eget faucibus nibh placerat.</a></h6>
							</td>
							<td class="text-blue f-w-600">$399.00</td>
							<td class="text-nowrap"><a href="javascript:;" class="text-inverse">Derick Wong</a></td>
						</tr>
						<tr>
							<td class="f-w-600 text-muted">13/02/2013</td>
							<td class="hidden-sm text-center">
								<a href="javascript:;">
									<img src="/assets/img/product/product-3.png" alt="" width="32px" />
								</a>
							</td>
							<td class="text-nowrap">
								<h6><a href="javascript:;" class="text-inverse">Nunc eleifend lorem eu velit eleifend, <br />eget faucibus nibh placerat.</a></h6>
							</td>
							<td class="text-blue f-w-600">$499.00</td>
							<td class="text-nowrap"><a href="javascript:;" class="text-inverse">Derick Wong</a></td>
						</tr>
						<tr>
							<td class="f-w-600 text-muted">13/02/2013</td>
							<td class="hidden-sm text-center">
								<a href="javascript:;">
									<img src="/assets/img/product/product-4.png" alt="" width="32px" />
								</a>
							</td>
							<td class="text-nowrap">
								<h6><a href="javascript:;" class="text-inverse">Nunc eleifend lorem eu velit eleifend, <br />eget faucibus nibh placerat.</a></h6>
							</td>
							<td class="text-blue f-w-600">$230.00</td>
							<td class="text-nowrap"><a href="javascript:;" class="text-inverse">Derick Wong</a></td>
						</tr>
						<tr>
							<td class="f-w-600 text-muted">13/02/2013</td>
							<td class="hidden-sm text-center">
								<a href="javascript:;">
									<img src="/assets/img/product/product-5.png" alt="" width="32px" />
								</a>
							</td>
							<td class="text-nowrap">
								<h6><a href="javascript:;" class="text-inverse">Nunc eleifend lorem eu velit eleifend, <br />eget faucibus nibh placerat.</a></h6>
							</td>
							<td class="text-blue f-w-600">$500.00</td>
							<td class="text-nowrap"><a href="javascript:;" class="text-inverse">Derick Wong</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="tab-pane fade" id="email">
			<div class="height-sm" data-scrollbar="true">
				<ul class="media-list media-list-with-divider">
					<li class="media media-sm">
						<a href="javascript:;" class="pull-left">
							<img src="/assets/img/user/user-1.jpg" alt="" class="media-object rounded-corner" />
						</a>
						<div class="media-body">
							<a href="javascript:;" class="text-inverse"><h5 class="media-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5></a>
							<p class="m-b-5">
								Aenean mollis arcu sed turpis accumsan dignissim. Etiam vel tortor at risus tristique convallis. Donec adipiscing euismod arcu id euismod. Suspendisse potenti. Aliquam lacinia sapien ac urna placerat, eu interdum mauris viverra.
							</p>
							<span class="text-muted f-s-11 f-w-600">Received on 04/16/2013, 12.39pm</span>
						</div>
					</li>
					<li class="media media-sm">
						<a href="javascript:;" class="pull-left">
							<img src="/assets/img/user/user-2.jpg" alt="" class="media-object rounded-corner" />
						</a>
						<div class="media-body">
							<a href="javascript:;" class="text-inverse"><h5 class="media-heading">Praesent et sem porta leo tempus tincidunt eleifend et arcu.</h5></a>
							<p class="m-b-5">
								Proin adipiscing dui nulla. Duis pharetra vel sem ac adipiscing. Vestibulum ut porta leo. Pellentesque orci neque, tempor ornare purus nec, fringilla venenatis elit. Duis at est non nisl dapibus lacinia.
							</p>
							<span class="text-muted f-s-11 f-w-600">Received on 04/16/2013, 12.39pm</span>
						</div>
					</li>
					<li class="media media-sm">
						<a href="javascript:;" class="pull-left">
							<img src="/assets/img/user/user-3.jpg" alt="" class="media-object rounded-corner" />
						</a>
						<div class="media-body">
							<a href="javascript:;" class="text-inverse"><h5 class="media-heading">Ut mi eros, varius nec mi vel, consectetur convallis diam.</h5></a>
							<p class="m-b-5">
								Ut mi eros, varius nec mi vel, consectetur convallis diam. Nullam eget hendrerit eros. Duis lacinia condimentum justo at ultrices. Phasellus sapien arcu, fringilla eu pulvinar id, mattis quis mauris.
							</p>
							<span class="text-muted f-s-11 f-w-600">Received on 04/16/2013, 12.39pm</span>
						</div>
					</li>
					<li class="media media-sm">
						<a href="javascript:;" class="pull-left">
							<img src="/assets/img/user/user-4.jpg" alt="" class="media-object rounded-corner" />
						</a>
						<div class="media-body">
							<a href="javascript:;" class="text-inverse"><h5 class="media-heading">Aliquam nec dolor vel nisl dictum ullamcorper.</h5></a>
							<p class="m-b-5">
								Aliquam nec dolor vel nisl dictum ullamcorper. Duis vel magna enim. Aenean volutpat a dui vitae pulvinar. Nullam ligula mauris, dictum eu ullamcorper quis, lacinia nec mauris.
							</p>
							<span class="text-muted f-s-11 f-w-600">Received on 04/16/2013, 12.39pm</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	</div>
</div> --}}



    <!-- end tabs -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-4 -->
        <div class="col-6 col-md-6">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="index-2">
                <div class="panel-heading">
                    <h4 class="panel-title">Forum Diskusi</h4>
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
        </div>
        <!-- end col-4 -->
        <!-- begin col-4 -->

        <div class="col-6 col-md-6">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="index-3">
                <div class="panel-heading">
                    <h4 class="panel-title">Today's Schedule</h4>
                </div>
                <div id="schedule-calendar" class="bootstrap-calendar"></div>
                <div class="list-group">
                    <a href="javascript:;"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center text-ellipsis">
                        Sales Reporting
                        <span class="badge bg-teal f-s-10">9:00 am</span>
                    </a>
                    <a href="javascript:;"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center text-ellipsis">
                        Have a meeting with sales team
                        <span class="badge bg-blue f-s-10">2:45 pm</span>
                    </a>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-4 -->

    </div>
    <!-- end row -->
@endsection

{{-- @section('content')
<!-- begin tabs -->
<ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile" data-sortable-id="index-2">
	<li class="nav-item"><a href="#latest-post" data-toggle="tab" class="nav-link active"><i class="fa fa-camera fa-lg m-r-5"></i> <span class="d-none d-md-inline">Latest Post</span></a></li>
	<li class="nav-item"><a href="#purchase" data-toggle="tab" class="nav-link"><i class="fa fa-archive fa-lg m-r-5"></i> <span class="d-none d-md-inline">Purchase</span></a></li>
	<li class="nav-item"><a href="#email" data-toggle="tab" class="nav-link"><i class="fa fa-envelope fa-lg m-r-5"></i> <span class="d-none d-md-inline">Email</span></a></li>
</ul>
<div class="tab-content" data-sortable-id="index-3">
	<div class="tab-pane fade active show" id="latest-post">
		<div class="height-sm" data-scrollbar="true">
			<ul class="media-list media-list-with-divider">
				<li class="media media-lg">
					<a href="javascript:;" class="pull-left">
						<img class="media-object rounded" src="/assets/img/gallery/gallery-1.jpg" alt="" />
					</a>
					<div class="media-body">
						<h5 class="media-heading">Aenean viverra arcu nec pellentesque ultrices. In erat purus, adipiscing nec lacinia at, ornare ac eros.</h5>
						Nullam at risus metus. Quisque nisl purus, pulvinar ut mauris vel, elementum suscipit eros. Praesent ornare ante massa, egestas pellentesque orci convallis ut. Curabitur consequat convallis est, id luctus mauris lacinia vel. Nullam tristique lobortis mauris, ultricies fermentum lacus bibendum id. Proin non ante tortor. Suspendisse pulvinar ornare tellus nec pulvinar. Nam pellentesque accumsan mi, non pellentesque sem convallis sed. Quisque rutrum erat id auctor gravida.
					</div>
				</li>
				<li class="media media-lg">
					<a href="javascript:;" class="pull-left">
						<img class="media-object rounded" src="/assets/img/gallery/gallery-10.jpg" alt="" />
					</a>
					<div class="media-body">
						<h5 class="media-heading">Vestibulum vitae diam nec odio dapibus placerat. Ut ut lorem justo.</h5>
						Fusce bibendum augue nec fermentum tempus. Sed laoreet dictum tempus. Aenean ac sem quis nulla malesuada volutpat. Nunc vitae urna pulvinar velit commodo cursus. Nullam eu felis quis diam adipiscing hendrerit vel ac turpis. Nam mattis fringilla euismod. Donec eu ipsum sit amet mauris iaculis aliquet. Quisque sit amet feugiat odio. Cras convallis lorem at libero lobortis, placerat lobortis sapien lacinia. Duis sit amet elit bibendum sapien dignissim bibendum.
					</div>
				</li>
				<li class="media media-lg">
					<a href="javascript:;" class="pull-left">
						<img class="media-object rounded" src="/assets/img/gallery/gallery-7.jpg" alt="" />
					</a>
					<div class="media-body">
						<h5 class="media-heading">Maecenas eget turpis luctus, scelerisque arcu id, iaculis urna. Interdum et malesuada fames ac ante ipsum primis in faucibus.</h5>
						Morbi placerat est nec pharetra placerat. Ut laoreet nunc accumsan orci aliquam accumsan. Maecenas volutpat dolor vitae sapien ultricies fringilla. Suspendisse vitae orci sed nibh ultrices tristique. Aenean in ante eget urna semper imperdiet. Pellentesque sagittis a nulla at scelerisque. Nam augue nulla, accumsan quis nisi a, facilisis eleifend nulla. Praesent aliquet odio non imperdiet fringilla. Morbi a porta nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
					</div>
				</li>
				<li class="media media-lg">
					<a href="javascript:;" class="pull-left">
						<img class="media-object rounded" src="/assets/img/gallery/gallery-8.jpg" alt="" />
					</a>
					<div class="media-body">
						<h5 class="media-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor accumsan rutrum.</h5>
						Fusce augue diam, vestibulum a mattis sit amet, vehicula eu ipsum. Vestibulum eu mi nec purus tempor consequat. Vestibulum porta non mi quis cursus. Fusce vulputate cursus magna, tincidunt sodales ipsum lobortis tincidunt. Mauris quis lorem ligula. Morbi placerat est nec pharetra placerat. Ut laoreet nunc accumsan orci aliquam accumsan. Maecenas volutpat dolor vitae sapien ultricies fringilla. Suspendisse vitae orci sed nibh ultrices tristique. Aenean in ante eget urna semper imperdiet. Pellentesque sagittis a nulla at scelerisque.
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="tab-pane fade" id="purchase">
		<div class="height-sm" data-scrollbar="true">
			<table class="table">
				<thead>
					<tr>
						<th>Date</th>
						<th class="hidden-sm text-center">Product</th>
						<th></th>
						<th>Amount</th>
						<th>User</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="f-w-600 text-muted">13/02/2013</td>
						<td class="hidden-sm text-center">
							<a href="javascript:;">
								<img src="/assets/img/product/product-1.png" alt="" width="32px"  />
							</a>
						</td>
						<td class="text-nowrap">
							<h6><a href="javascript:;" class="text-inverse">Nunc eleifend lorem eu velit eleifend, <br />eget faucibus nibh placerat.</a></h6>
						</td>
						<td class="text-blue f-w-600">$349.00</td>
						<td class="text-nowrap"><a href="javascript:;" class="text-inverse">Derick Wong</a></td>
					</tr>
					<tr>
						<td class="f-w-600 text-muted">13/02/2013</td>
						<td class="hidden-sm text-center">
							<a href="javascript:;">
								<img src="/assets/img/product/product-2.png" alt="" width="32px" />
							</a>
						</td>
						<td class="text-nowrap">
							<h6><a href="javascript:;" class="text-inverse">Nunc eleifend lorem eu velit eleifend, <br />eget faucibus nibh placerat.</a></h6>
						</td>
						<td class="text-blue f-w-600">$399.00</td>
						<td class="text-nowrap"><a href="javascript:;" class="text-inverse">Derick Wong</a></td>
					</tr>
					<tr>
						<td class="f-w-600 text-muted">13/02/2013</td>
						<td class="hidden-sm text-center">
							<a href="javascript:;">
								<img src="/assets/img/product/product-3.png" alt="" width="32px" />
							</a>
						</td>
						<td class="text-nowrap">
							<h6><a href="javascript:;" class="text-inverse">Nunc eleifend lorem eu velit eleifend, <br />eget faucibus nibh placerat.</a></h6>
						</td>
						<td class="text-blue f-w-600">$499.00</td>
						<td class="text-nowrap"><a href="javascript:;" class="text-inverse">Derick Wong</a></td>
					</tr>
					<tr>
						<td class="f-w-600 text-muted">13/02/2013</td>
						<td class="hidden-sm text-center">
							<a href="javascript:;">
								<img src="/assets/img/product/product-4.png" alt="" width="32px" />
							</a>
						</td>
						<td class="text-nowrap">
							<h6><a href="javascript:;" class="text-inverse">Nunc eleifend lorem eu velit eleifend, <br />eget faucibus nibh placerat.</a></h6>
						</td>
						<td class="text-blue f-w-600">$230.00</td>
						<td class="text-nowrap"><a href="javascript:;" class="text-inverse">Derick Wong</a></td>
					</tr>
					<tr>
						<td class="f-w-600 text-muted">13/02/2013</td>
						<td class="hidden-sm text-center">
							<a href="javascript:;">
								<img src="/assets/img/product/product-5.png" alt="" width="32px" />
							</a>
						</td>
						<td class="text-nowrap">
							<h6><a href="javascript:;" class="text-inverse">Nunc eleifend lorem eu velit eleifend, <br />eget faucibus nibh placerat.</a></h6>
						</td>
						<td class="text-blue f-w-600">$500.00</td>
						<td class="text-nowrap"><a href="javascript:;" class="text-inverse">Derick Wong</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="tab-pane fade" id="email">
		<div class="height-sm" data-scrollbar="true">
			<ul class="media-list media-list-with-divider">
				<li class="media media-sm">
					<a href="javascript:;" class="pull-left">
						<img src="/assets/img/user/user-1.jpg" alt="" class="media-object rounded-corner" />
					</a>
					<div class="media-body">
						<a href="javascript:;" class="text-inverse"><h5 class="media-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5></a>
						<p class="m-b-5">
							Aenean mollis arcu sed turpis accumsan dignissim. Etiam vel tortor at risus tristique convallis. Donec adipiscing euismod arcu id euismod. Suspendisse potenti. Aliquam lacinia sapien ac urna placerat, eu interdum mauris viverra.
						</p>
						<span class="text-muted f-s-11 f-w-600">Received on 04/16/2013, 12.39pm</span>
					</div>
				</li>
				<li class="media media-sm">
					<a href="javascript:;" class="pull-left">
						<img src="/assets/img/user/user-2.jpg" alt="" class="media-object rounded-corner" />
					</a>
					<div class="media-body">
						<a href="javascript:;" class="text-inverse"><h5 class="media-heading">Praesent et sem porta leo tempus tincidunt eleifend et arcu.</h5></a>
						<p class="m-b-5">
							Proin adipiscing dui nulla. Duis pharetra vel sem ac adipiscing. Vestibulum ut porta leo. Pellentesque orci neque, tempor ornare purus nec, fringilla venenatis elit. Duis at est non nisl dapibus lacinia.
						</p>
						<span class="text-muted f-s-11 f-w-600">Received on 04/16/2013, 12.39pm</span>
					</div>
				</li>
				<li class="media media-sm">
					<a href="javascript:;" class="pull-left">
						<img src="/assets/img/user/user-3.jpg" alt="" class="media-object rounded-corner" />
					</a>
					<div class="media-body">
						<a href="javascript:;" class="text-inverse"><h5 class="media-heading">Ut mi eros, varius nec mi vel, consectetur convallis diam.</h5></a>
						<p class="m-b-5">
							Ut mi eros, varius nec mi vel, consectetur convallis diam. Nullam eget hendrerit eros. Duis lacinia condimentum justo at ultrices. Phasellus sapien arcu, fringilla eu pulvinar id, mattis quis mauris.
						</p>
						<span class="text-muted f-s-11 f-w-600">Received on 04/16/2013, 12.39pm</span>
					</div>
				</li>
				<li class="media media-sm">
					<a href="javascript:;" class="pull-left">
						<img src="/assets/img/user/user-4.jpg" alt="" class="media-object rounded-corner" />
					</a>
					<div class="media-body">
						<a href="javascript:;" class="text-inverse"><h5 class="media-heading">Aliquam nec dolor vel nisl dictum ullamcorper.</h5></a>
						<p class="m-b-5">
							Aliquam nec dolor vel nisl dictum ullamcorper. Duis vel magna enim. Aenean volutpat a dui vitae pulvinar. Nullam ligula mauris, dictum eu ullamcorper quis, lacinia nec mauris.
						</p>
						<span class="text-muted f-s-11 f-w-600">Received on 04/16/2013, 12.39pm</span>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- end tabs -->
@endsection --}}
