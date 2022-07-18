@extends('layouts.user')

@push('css')
    <style>
        .chats-scrollbar {
            height: 200px;
        }
    </style>
@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    {{-- <div class="container">

        <h1 class="page-header">Hai {{ Auth::user()->name }}!!</h1>

    </div> --}}
    <!-- end page-header -->
    <!-- begin row -->
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">

                <h1 class="page-header">
                    <center>Hai {{ Auth::user()->name }}!!</center>
                </h1>
            </div>
        </div>
        <!-- begin col-3 -->
        {{-- <div class="col-xl-4 col-md-6">
            <div class="card text-white border-0 bg-teal text-center m-b-10">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p class="mb-2">Make it so that <br />everything becomes your<br /> spiritual advisor</p>
                        <footer class="blockquote-footer text-white-transparent-8">Someone famous in <cite
                                title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-4 col-md-6">
            <div class="card text-white border-0 bg-teal text-center m-b-10">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p class="mb-2"></p>
                        <footer class="blockquote-footer text-white-transparent-8">KMS LANSIA</footer>
                    </blockquote>
                </div>
            </div>
        </div> --}}
        <!-- end col-3 -->
        <!-- begin col-3 -->

        <!-- end col-3 -->

    </div>
    <!-- end row -->
    <br>

    <!-- begin row -->
    <div class="row">
        <!-- begin col-4 -->
        <div class="col-7">
            <!-- begin panel -->
            <div class="card ">
                <div class="card-heading bg-dark ">
                    <h6 class="card-title text-white my-2 ml-3">Forum Diskusi</h6>
                </div>
                @php
                    if (auth() != null) {
                        $h = auth()->user();
                    }
                @endphp
                <div class="card-body bg-light" style="overflow:auto; height:350px;">
                    @foreach ($data as $r)
                        @if ($h != null)
                            <div class="card-body bg-light">
                                <div class="chats">
                                    @if ($r->user->name == $h['name'])
                                        <div class="right">
                                            <span class="date-time">{{ $r->jam }}</span>
                                            <a href="javascript:;" class="name"><span
                                                    class="label label-primary">{{ $r->user->name }}</span> Me</a>
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
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="card-footer">
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
                <!-- end panel -->
            </div>
            <!-- end col-4 -->
        </div>


        <div class="col-5">
            <!-- begin panel -->
            <div class="card " data-sortable-id="index-3">
                <div class="card-heading bg-black">
                    <h6 class="card-title text-white my-2 ml-3">Jadwal Kegiatan</h6>
                </div>
                @foreach ($kegiatanlansia as $k)
                    <div id="schedule-calendar" class="bootstrap-calendar"></div>
                    <div class="list-group">
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center text-ellipsis">
                            {{ $k->nama }}<br>
                            Lokasi: {{ $k->lokasi }}
                            <span class="badge bg-teal f-s-10"> ({{ $k->waktu_mulai }}-{{ $k->waktu_selesai }})
                                -
                                {{ $k->tanggal_kegiatan }} </span>
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- end panel -->
        </div>
    </div>
    <!-- end row -->
@endsection
