@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])



@section('content')
    <!-- begin panel -->
    <div class="panel panel-inverse" data-sortable-id="index-5">
        <div class="panel-heading">
            <h4 class="panel-title">Message</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                        class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i
                        class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
                        class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i
                        class="fa fa-times"></i></a>
            </div>

        </div>
        @php
            if (auth() != null) {
                $h = auth()->user();
            }
        @endphp
        <div class="panel-body" style="overflow:scroll; height:400px;">
            @foreach ($data as $r)
                @if ($h != null)
                    <div class="height-sm" data-scrollbar="true">
                        <ul class="media-list media-list-with-divider media-messaging">
                            <li class="media media-sm">
                                <div class="media-body">
                                    <h5 class="media-heading">{{ $r->user->name }}</h5>
                                    <p>{{ $r->komentar }}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                @endif
            @endforeach
            < </div>
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
@endsection
