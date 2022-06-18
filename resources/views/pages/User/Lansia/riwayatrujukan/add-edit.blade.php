@extends('layouts.user')

@push('css')
    <link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
@endpush

@section('content')

    <h1 class="page-header">Riwayat Rujukan Lansia<small> @yield('title')</small></h1>
    <form action="{{ isset($data) ? route('user.userlansia.riwayatrujukan.update', $data->id):route('user.userlansia.riwayatrujukan.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
                <label for="name">No Surat</label>
                <input type="text" id="no_surat" name="no_surat" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->no_surat ?? old('no_surat') }}}">
                <label for="name">Kepada</label>
                <input type="text" id="kepada" name="kepada" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->kepada ?? old('kepada') }}}">
                <label for="name">Tanggal Surat</label>
                <input type="date" id="tanggal_surat" name="tanggal_surat" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_surat ?? old('tanggal_surat') }}}">
                {{-- <label for="name">Nama Lansia</label>
                <x-form.Dropdown name="namalansia" :options="$nama_lansia" selected="{{{ old('namalansia') ?? ($data['namalansia'] ?? null) }}}" required /> --}}
                <input type="hidden" id="namalansia" name="namalansia" class="form-control" autofocus data-parsley-required="true" value="{{{ $nama_lansia }}}">
                <label for="name">Umur</label>
                <input type="text" id="umur" name="umur" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->umur ?? old('umur') }}}">
                <label for="name">Jenis Kelamin</label>
                <input type="text" id="jeniskelamin" name="jeniskelamin" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jeniskelamin ?? old('jeniskelamin') }}}">
                <label for="name">Alamat</label>
                <input type="text" id="alamat" name="alamat" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->alamat ?? old('alamat') }}}">
                <label for="name">Keluhan</label>
                <input type="text" id="keluhan" name="keluhan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->keluhan ?? old('keluhan') }}}">
                {{-- <input type="hidden" id="status" name="status" class="form-control" autofocus data-parsley-required="true" value="{{{ 'Belum Dikonfirmasi' }}}"> --}}
            </div>
        </div>
        <!-- end panel-body -->
        <!-- begin panel-footer -->
        <div class="panel-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </div>
        <!-- end panel-footer -->
    </div>
  </form>
@endsection
@push('scripts')
    <script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
@endpush
