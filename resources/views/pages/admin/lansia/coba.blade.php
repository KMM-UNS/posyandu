@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])
@push('css')
    <link href="/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
    <link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
@endpush




@section('content')
    <!-- begin tabs -->
    <ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile" data-sortable-id="index-2">
        <li class="nav-item"><a href="#latest-post" data-toggle="tab" class="nav-link active"><i
                    class="fa fa-camera fa-lg m-r-5"></i> <span class="d-none d-md-inline">Latest Post</span></a></li>
        <li class="nav-item"><a href="#purchase" data-toggle="tab" class="nav-link"><i
                    class="fa fa-archive fa-lg m-r-5"></i> <span class="d-none d-md-inline">Purchase</span></a></li>
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
                            <h5 class="media-heading">Aenean viverra arcu nec pellentesque ultrices. In erat purus,
                                adipiscing nec lacinia at, ornare ac eros.</h5>
                            Nullam at risus metus. Quisque nisl purus, pulvinar ut mauris vel, elementum suscipit eros.
                            Praesent ornare ante massa, egestas pellentesque orci convallis ut. Curabitur consequat
                            convallis est, id luctus mauris lacinia vel. Nullam tristique lobortis mauris, ultricies
                            fermentum lacus bibendum id. Proin non ante tortor. Suspendisse pulvinar ornare tellus nec
                            pulvinar. Nam pellentesque accumsan mi, non pellentesque sem convallis sed. Quisque rutrum erat
                            id auctor gravida.
                        </div>
                    </li>
                    <li class="media media-lg">
                        <a href="javascript:;" class="pull-left">
                            <img class="media-object rounded" src="/assets/img/gallery/gallery-10.jpg" alt="" />
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading">Vestibulum vitae diam nec odio dapibus placerat. Ut ut lorem justo.
                            </h5>
                            Fusce bibendum augue nec fermentum tempus. Sed laoreet dictum tempus. Aenean ac sem quis nulla
                            malesuada volutpat. Nunc vitae urna pulvinar velit commodo cursus. Nullam eu felis quis diam
                            adipiscing hendrerit vel ac turpis. Nam mattis fringilla euismod. Donec eu ipsum sit amet mauris
                            iaculis aliquet. Quisque sit amet feugiat odio. Cras convallis lorem at libero lobortis,
                            placerat lobortis sapien lacinia. Duis sit amet elit bibendum sapien dignissim bibendum.
                        </div>
                    </li>
                    <li class="media media-lg">
                        <a href="javascript:;" class="pull-left">
                            <img class="media-object rounded" src="/assets/img/gallery/gallery-7.jpg" alt="" />
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading">Maecenas eget turpis luctus, scelerisque arcu id, iaculis urna.
                                Interdum et malesuada fames ac ante ipsum primis in faucibus.</h5>
                            Morbi placerat est nec pharetra placerat. Ut laoreet nunc accumsan orci aliquam accumsan.
                            Maecenas volutpat dolor vitae sapien ultricies fringilla. Suspendisse vitae orci sed nibh
                            ultrices tristique. Aenean in ante eget urna semper imperdiet. Pellentesque sagittis a nulla at
                            scelerisque. Nam augue nulla, accumsan quis nisi a, facilisis eleifend nulla. Praesent aliquet
                            odio non imperdiet fringilla. Morbi a porta nunc. Vestibulum ante ipsum primis in faucibus orci
                            luctus et ultrices posuere cubilia Curae.
                        </div>
                    </li>
                    <li class="media media-lg">
                        <a href="javascript:;" class="pull-left">
                            <img class="media-object rounded" src="/assets/img/gallery/gallery-8.jpg" alt="" />
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor
                                accumsan rutrum.</h5>
                            Fusce augue diam, vestibulum a mattis sit amet, vehicula eu ipsum. Vestibulum eu mi nec purus
                            tempor consequat. Vestibulum porta non mi quis cursus. Fusce vulputate cursus magna, tincidunt
                            sodales ipsum lobortis tincidunt. Mauris quis lorem ligula. Morbi placerat est nec pharetra
                            placerat. Ut laoreet nunc accumsan orci aliquam accumsan. Maecenas volutpat dolor vitae sapien
                            ultricies fringilla. Suspendisse vitae orci sed nibh ultrices tristique. Aenean in ante eget
                            urna semper imperdiet. Pellentesque sagittis a nulla at scelerisque.
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
                                    <img src="/assets/img/product/product-1.png" alt="" width="32px" />
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <h6><a href="javascript:;" class="text-inverse">Nunc eleifend lorem eu velit eleifend,
                                        <br />eget faucibus nibh placerat.</a></h6>
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
                                <h6><a href="javascript:;" class="text-inverse">Nunc eleifend lorem eu velit eleifend,
                                        <br />eget faucibus nibh placerat.</a></h6>
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
                                <h6><a href="javascript:;" class="text-inverse">Nunc eleifend lorem eu velit eleifend,
                                        <br />eget faucibus nibh placerat.</a></h6>
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
                                <h6><a href="javascript:;" class="text-inverse">Nunc eleifend lorem eu velit eleifend,
                                        <br />eget faucibus nibh placerat.</a></h6>
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
                                <h6><a href="javascript:;" class="text-inverse">Nunc eleifend lorem eu velit eleifend,
                                        <br />eget faucibus nibh placerat.</a></h6>
                            </td>
                            <td class="text-blue f-w-600">$500.00</td>
                            <td class="text-nowrap"><a href="javascript:;" class="text-inverse">Derick Wong</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- end tabs -->
@endsection

@push('scripts')
    <script src="/assets/plugins/gritter/js/jquery.gritter.js"></script>
    <script src="/assets/plugins/flot/jquery.flot.js"></script>
    <script src="/assets/plugins/flot/jquery.flot.time.js"></script>
    <script src="/assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/assets/plugins/flot/jquery.flot.pie.js"></script>
    <script src="/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="/assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
    <script src="/assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js"></script>
    <script src="/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
    <script src="/assets/js/demo/dashboard.js"></script>
@endpush
