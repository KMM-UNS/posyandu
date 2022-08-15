@extends('layouts.user')

@section('title', 'Biodata')

@push('css')
<!-- datatables -->
<link href="{{ asset('/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/css/isidatacss/style.css') }}" rel="stylesheet" />
<!-- end datatables -->
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
    {{-- <li class="breadcrumb-item"><a href="javascript:;">Master Data</a></li> --}}
    <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Master Data<small></small></h1>
<!-- end page-header -->


<!-- begin panel -->
<div class="panel panel-inverse">
    <!-- begin panel-heading -->
    <div class="panel-heading">
        <h4 class="panel-title"></h4>
        <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
        </div>
    </div>
    <!-- end panel-heading -->
    <!-- begin panel-body -->
    @if(empty($data) || $data->count()==0)
    <div class="panel-body">
        <h1 class="text-center">Anda Belum Melengkapi Biodata Anak !</h1>
    </div>
    <br>
    <div class="panel-footer">
        <a href="{{route('user.biodata.create')}}"><button type="submit" class="btn btn-primary">Lengkapi Biodata</button></a>
        <button type="reset" class="btn btn-default">Reset</button>
    </div>
    @else
    <!-- nanti isi table disini  -->
    @foreach ($data as $dataanak )

    <div class="container">
        <div class="row">
            <h2>Biodata Anak</h2>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="card kartu">
            <div class="row">
                <div class="col-md-4">
                    <div class="foto">
                        {{-- <img src="foto/bayuafrizatulrizki.jpg" class="img-thumbnail" alt="" width="150" height="auto"> --}}
                    </div>
                </div>
                <div class="col-md-8 kertas-biodata">
                    <div class="biodata">
                        <table width="100%" border="0">
                            <tbody>
                                <tr>
                                    <td valign="top">
                                        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                                            <tbody>
                                                <tr>
                                                    <td width="25%" valign="top" class="textt"><b>Nama Anak</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">{{$dataanak->nama_anak}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="textt"><b>NIK</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">{{$dataanak->NIK}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="textt"><b>Alamat</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">{{$dataanak->alamat}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="textt"><b>Tempat Lahir</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">{{$dataanak->tempat_lahir}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="textt"><b>Tanggal Lahir</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">{{$dataanak->tanggal_lahir}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="textt"><b>Berat Badan Lahir</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">{{$dataanak->berat_badan_lahir}} Kg</td>
                                                </tr>
                                                <tr>
                                                    <td class="textt"><b>Tinggi Badan Lahir</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">{{$dataanak->tinggi_badan_lahir}} Cm</td>
                                                </tr>
                                                <tr>
                                                    <td class="textt"><b>Umur</b></td>
                                                    <td width="2%"></td>
                                                    {{-- <td style="color: #158beb; font-weight:bold">{{$dataanak->umur}}</td> --}}
                                                    {{-- <td width="2%">:</td> --}}
                                                </tr>
                                                <tr>
                                                    <td class="textt"><b>Bulan</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">
                                                    {{$dataanak->umur}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="textt"><b>Tahun</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">
                                                    {{$dataanak->tahun}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="textt"><b>Jenis Kelamin</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">{{$dataanak->jenis_kelamin}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="textt"><b>Anak Ke</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">{{$dataanak->anak_ke}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="textt"><b>Nama Orangtua</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">{{$dataanak->nama_orangtua}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="textt"><b>No Handphone Orangtua</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">{{$dataanak->no_hp_orangtua}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="textt"><b>Golongan Darah</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">{{$dataanak->golongan_darah}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="textt"><b>Tinggi Badan Ibu</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">{{$dataanak->tinggi_ibu}} Cm</td>
                                                </tr>
                                                <tr>
                                                    <td class="textt"><b>Tinggi Badan Bapak</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">{{$dataanak->tinggi_bapak}} Cm</td>
                                                </tr>

                                                {{-- <tr>
                                                    <td class="textt"><b>Foto</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">{{$dataanak->foto}}</td>
                                                </tr> --}}
                                                <tr>
                                                    <td class="textt"><b>Foto Anak</b></td>
                                                    <td width="2%">:</td>
                                                    <td style="color: #158beb; font-weight:bold">{{$dataanak->foto}} </td>
                                                    {{-- <td>{{ asset('storea') }}</td> --}}
                                                    <td>
                                                        <img src="{{ asset('storage/fotoanak/'.$dataanak->foto)}}" alt="Image" style="width: 50%">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="panel-footer">
                        {{-- <a href="{{route('user.biodata.create')}}"><button type="submit" class="btn btn-primary">Tambah Anak</button></a> --}}
                            <a href="{{route('user.biodata.edit', $dataanak->id)}}"><button type="submit" class="btn btn-primary">Edit Biodata</button></a>
                            <a href="{{route('user.biodata.show', $dataanak->id)}}"><button type="submit" class="btn btn-primary mb1 bg-green">Riwayat Imunisasi</button></a>
                            <a href="{{route('user.biodata.rujukan', $dataanak->id)}}"><button type="submit" class="btn btn-primary mb1 bg-orange">Riwayat Rujukan</button></a>
                            <a href="{{route('user.biodata.kms', $dataanak->id)}}"><button type="submit" class="btn btn-primary mb1 bg-red">Grafik Pertumbuhan</button></a>
                            {{-- <button type="reset" class="btn btn-default">Reset</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <a href="{{route('user.biodata.create')}}"><button type="submit" class="btn btn-primary">+ Tambah Anak</button></a>
    </div>
    @endif
    <!-- end panel-body -->
    <br>
    {{-- <div class="panel-footer">
        <a href="{{route('user.biodata.create')}}"><button type="submit" class="btn btn-primary">Lengkapi Biodata</button></a>
        <button type="reset" class="btn btn-default">Reset</button>
    </div> --}}

</div>
</div>
<!-- end panel -->
@endsection

@push('scripts')
<!-- datatables -->
<script src="{{ asset('assets/js/custom/datatable-assets.js') }}"></script>

<!-- end datatables -->

<script src="{{ asset('assets/js/custom/delete-with-confirmation.js') }}"></script>
<script>
    $(document).on('delete-with-confirmation.success', function() {
        $('.buttons-reload').trigger('click')
    })
</script>
@endpush
