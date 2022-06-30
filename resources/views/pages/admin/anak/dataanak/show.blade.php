@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', 'Detail Data Anak' )

@push('css')
<link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
  <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Master Data</a></li>
  <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Master Data<small> @yield('title')</small></h1>
<!-- end page-header -->


<!-- begin panel -->
<form action="{{ isset($data) ? route('admin.anak-data.dataanak.update', $data->id) : route('admin.anak-data.dataanak.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
  @csrf
  @if(isset($data))
  {{ method_field('PUT') }}
  @endif

  <div class="panel panel-inverse">
    <!-- begin panel-heading -->
    <div class="panel-heading">
      <h4 class="panel-title">Form @yield('title')</h4>
      <div class="panel-heading-btn">
        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
      </div>
    </div>
    <!-- end panel-heading -->
    <!-- begin panel-body -->
    <div class="panel-body">
      <div class="form-group">
        <div class="row">
            <div class="col-md-1">
                <label for="name">Nama Anak</label>
            </div>
            <div class="col-md-3">
                : {{ $data->nama_anak }}
                {{-- <input type="text" id="nama_anak" name="nama_anak" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama_anak ?? old('nama_anak') }}}"> --}}
            </div>
            <div class="col-md-1">
                <label for="name">NIK</label>
            </div>
            <div class="col-md-3">
                : {{ $data->NIK }}
                {{-- <input type="text" id="NIK" name="NIK" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->NIK ?? old('NIK') }}}"> --}}
            </div>
            <div class="col-md-1">
                <label for="name">Tempat Lahir</label>
            </div>
            <div class="col-md-3">
                : {{ $data->tempat_lahir }}
                {{-- <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tempat_lahir ?? old('tempat_lahir') }}}"> --}}
            </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
            <div class="col-md-1">
                <label for="name">Tanggal Lahir</label>
            </div>
            <div class="col-md-3">
                : {{ $data->tanggal_lahir }}
                {{-- <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_lahir ?? old('tanggal_lahir') }}}"> --}}
            </div>
            <div class="col-md-1">
                <label for="name">Berat Badan Lahir</label>
            </div>
            <div class="col-md-3">
                : {{ $data->berat_badan_lahir }}
                {{-- <input type="text" id="berat_badan_lahir" name="berat_badan_lahir" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->berat_badan_lahir ?? old('berat_badan_lahir') }}}"> --}}
            </div>
            <div class="col-md-1">
                <label for="name">Tinggi Badan Lahir</label>
            </div>
            <div class="col-md-3">
                : {{ $data->tinggi_badan_lahir }}
                {{-- <input type="text" id="tinggi_badan_lahir" name="tinggi_badan_lahir" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tinggi_badan_lahir ?? old('tinggi_badan_lahir') }}}"> --}}
    </div>
    </div>

        <div class="form-group">
          <div class="row">
              <div class="col-md-1">
                  <label for="name">Umur</label>
              </div>
              <div class="col-md-3">
               : {{ $data->umur }}
                {{-- <input type="text" id="umur" name="umur" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->umur ?? old('umur') }}}"> --}}
              </div>
              <div class="col-md-1">
                  <label for="name">Jenis Kelamin</label>
              </div>
              <div class="col-md-3">
                : {{ $data->jenis_kelamin }}
                  {{-- <x-form.genderRadio name="jenis_kelamin" selected="{{{ old('jenis_kelamin') ?? ($data['jenis_kelamin'] ?? null) }}}"/> --}}
                  {{-- <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jenis_kelamin ?? old('jenis_kelamin') }}}"> --}}
              </div>
              <div class="col-md-1">
                  <label for="name">Anak Ke</label>
              </div>
              <div class="col-md-3">
                  : {{ $data->anak_ke }}
                  {{-- <input type="text" id="anak_ke" name="anak_ke" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->anak_ke ?? old('anak_ke') }}}"> --}}
              </div>
        </div>
        </div>
        <div class="form-group">
          <div class="row">
              <div class="col-md-1">
                  <label for="name">Nama Orangtua</label>
              </div>
              <div class="col-md 3">
               : {{ $data->nama_orangtua }}
              </div>
              <div class="col-md-1">
                  <label for="name">No Handphone Orangtua</label>
              </div>
              <div class="col-md-3">
                : {{ $data->no_hp_orangtua }}
              </div>
              <div class="col-md-1">
              <label for="name">Alamat</label>
              </div>
              <div class="col-md-3">
                : {{ $data->alamat }}
              </div>




     </div>
    </div>
    <table class="table table-primary table-striped">
        <thead>
            <tr>
                <th scope="col"><strong> No </strong></th>
                <th scope="col"><strong> Nama Anak </strong></th>
                <th scope="col"><strong> Tanggal Imunisasi </strong></th>
                <th scope="col"><strong> Berat Badan (kg) </strong></th>
                <th scope="col"><strong> Tinggi Badan (Cm) </strong></th>
                <th scope="col"><strong> Umur </strong></th>
                <th scope="col"><strong> Vaksin </strong></th>
                <th scope="col"><strong> Vitamin Anak </strong></th>
                <th scope="col"><strong> Keluhan </strong></th>
                <th scope="col"><strong> Tindakan </strong></th>
                <th scope="col"><strong> Status Gizi </strong></th>
                <th scope="col"><strong> Nama Kader </strong></th>
            </tr>
        </thead>
        <tbody>
            @foreach($imunisasis as $imunisasi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $imunisasi->data_anak->nama_anak }}</td>
                <td>{{ $imunisasi->tanggal_imunisasi }}</td>
                <td>{{ $imunisasi->berat_badan}}</td>
                <td>{{ $imunisasi->tinggi_badan}}</td>
                <td>{{ $imunisasi->umur ?? old('umur') }}</td>
                <td>{{ $imunisasi->jenisvaksin->vaksin}}</td>
                <td>{{ $imunisasi->vitamin_anak->nama_vitamin }}</td>
                <td>{{ $imunisasi->keluhan }}</td>
                <td>{{ $imunisasi->tindakan }}</td>
                <td>{{ $imunisasi->status_gizi}}</td>
                <td>{{ $imunisasi->kader->nama }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>
          {{-- <input type="text" id="nama_anak" name="nama_anak" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama_anak ?? old('nama_anak') }}}"> --}}
          {{-- <label for="name">Jenis Kelamin</label> --}}
          {{-- <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jenis_kelamin ?? old('jenis_kelamin') }}}"> --}}
          {{-- <x-form.genderRadio name="jenis_kelamin" selected="{{{ old('jenis_kelamin') ?? ($data['jenis_kelamin'] ?? null) }}}"/> --}}
          {{-- <label for="name">Berat Badan (Kg)</label>
          {{ $imunisasi->berat_badan}}
          <label for="name">Tinggi Badan (Cm)</label>
          {{ $imunisasi->tinggi_badan}}
          <label for="name">Umur</label>
          {{ $imunisasi->umur ?? old('umur') }}
          <label for="name">Jenis Vaksin</label>
          {{-- <input type="text" id="jenis_vaksin" name="jenis_vaksin" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jenis_vaksin ?? old('jenis_vaksin') }}}"> --}}
          {{-- {{ $imunisasi->jenisvaksin->vaksin}}
          <label for="name">Vitamin Anak</label>
          {{ $imunisasi->vitamin_anak->nama_vitamin }}
          {{-- <input type="text" id="vitamin" name="vitamin" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->vitamin ?? old('vitamin') }}}"> --}}
          {{-- <label for="name">Keluhan</label>
          {{ $imunisasi->keluhan }}
          <label for="name">Tindakan</label>
          {{ $imunisasi->tindakan }}
          <label for="name">Status Gizi</label>
          {{$imunisasi->status_gizi}}
          {{-- <input type="text" id="status_gizi" name="status_gizi" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->status_gizi ?? old('status_gizi') }}}"> --}}
          {{-- <label for="name">Nama Kader</label>
          {{ $imunisasi->nama_kader }} --}}
         {{-- </div>
      </div>
    @endforeach --}}
    <!-- end panel-body -->
    <!-- begin panel-footer -->
    {{-- <div class="panel-footer">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-default">Reset</button>
    </div> --}}
    <!-- end panel-footer -->
    </div>
  <!-- end panel -->
</form>
<a href="javascript:history.back(-1);" class="btn btn-success">
  <i class="fa fa-arrow-circle-left"></i> Kembali
</a>

@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
@endpush