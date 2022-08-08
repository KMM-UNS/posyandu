@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Imunisasi' : 'Create Imunisasi' )

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
<form action="{{ isset($data) ? route('admin.anak-data.imunisasi.update', $data->id) : route('admin.anak-data.imunisasi.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
        <label for="name">Nama Anak</label>
        <x-form.Dropdown name="nama_anak_id" :options="$dataanak" selected="{{{ old('nama_anak_id') ?? ($data['nama_anak_id'] ?? null) }}}" required />
        {{-- <input type="text" id="nama_anak" name="nama_anak" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama_anak ?? old('nama_anak') }}}"> --}}
        {{-- <label for="name">Jenis Kelamin</label> --}}
        {{-- <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jenis_kelamin ?? old('jenis_kelamin') }}}"> --}}
        {{-- <x-form.genderRadio name="jenis_kelamin" selected="{{{ old('jenis_kelamin') ?? ($data['jenis_kelamin'] ?? null) }}}"/> --}}
        <label for="name">Tanggal Imunisasi</label>
        <input type="date" id="tanggal_imunisasi" name="tanggal_imunisasi" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_imunisasi ?? old('tanggal_imunisasi') }}}">
        <label for="name">Lingkar Kepala</label>
        <input type="text" id="lingkar_kepala" name="lingkar_kepala" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->lingkar_kepala ?? old('lingkar_kepala') }}}">
        <label for="name">Berat Badan (Kg) <i>(Gunakan titik untuk mengganti koma. Contoh : 6.5)</i></label>
        <input type="text" id="berat_badan" name="berat_badan" onkeyup="hitung();" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->berat_badan ?? old('berat_badan') }}}">
        <label for="name">Tinggi Badan (Cm) <i>(Gunakan titik untuk mengganti koma. Contoh : 60.5)</i></label>
        <input type="text" id="tinggi_badan" onkeyup="hitung();" name="tinggi_badan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tinggi_badan ?? old('tinggi_badan') }}}">
        <label for="name">Total Imt <i>( BB / TB(m).TB(m) )</i> </label>
        <input type="text" id="total_imt" name="total_imt" onkeyup="hitung();"class="form-control" autofocus data-parsley-required="true" value="{{{ $data->total_imt ?? old('total_imt') }}}">
        <label for="name">Keterangan Berat Masa Ideal </label>
        <input type="text" id="ket_imt" name="ket_imt" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->ket_imt ?? old('ket_imt') }}}">

        <label for="name">Umur <i>(Umur dalam bentuk bulan)</i></label>
        <input type="text" id="umur" name="umur" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->umur ?? old('umur') }}}">
        <label for="name">Jenis Vaksin</label>
        {{-- <input type="text" id="jenis_vaksin" name="jenis_vaksin" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jenis_vaksin ?? old('jenis_vaksin') }}}"> --}}
        <x-form.Dropdown name="jenis_vaksin" :options="$jenisvaksin" selected="{{{ old('jenis_vaksin') ?? ($data['jenis_vaksin'] ?? null) }}}" />
        <label for="name">Vitamin Anak</label>
        <x-form.Dropdown name="vitamin" :options="$vitaminanak" selected="{{{ old('vitamin') ?? ($data['vitamin'] ?? null) }}}" required />
        {{-- <input type="text" id="vitamin" name="vitamin" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->vitamin ?? old('vitamin') }}}"> --}}
        <label for="name">Keluhan</label>
        <input type="text" id="keluhan" name="keluhan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->keluhan ?? old('keluhan') }}}">
        <label for="name">Tindakan</label>
        <input type="text" id="tindakan" name="tindakan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tindakan ?? old('tindakan') }}}">
        <label for="name">Gizi Tambahan</label>
        {{-- <x-form.statusRadio name="status_gizi" selected="{{{ old('status_gizi') ?? ($data['status_gizi'] ?? null) }}}"/> --}}
        <input type="text" id="status_gizi" name="status_gizi" class="form-control" autofocus data-parsley-required="false" value="{{{ $data->status_gizi ?? old('status_gizi') }}}">
        <label for="name">Nama Kader</label>
        <x-form.Dropdown name="nama_kader" :options="$kader" selected="{{{ old('nama_kader') ?? ($data['nama_kader'] ?? null) }}}" required />
        {{-- <input type="text" id="nama_kader" name="nama_kader" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama_kader ?? old('nama_kader') }}}"> --}}
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
  <!-- end panel -->
</form>
<a href="javascript:history.back(-1);" class="btn btn-success">
  <i class="fa fa-arrow-circle-left"></i> Kembali
</a>

@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>

<script>
    function hitung(){

var txtFirstNumberValue = document.getElementById('tinggi_badan').value/100;
var txtSecondNumberValue = document.getElementById('berat_badan').value;
var result = Math.ceil((txtSecondNumberValue) / ((txtFirstNumberValue) * (txtFirstNumberValue)));
// var result = parseInt(txtSecondNumberValue) / ((txtFirstNumberValue)* (txtFirstNumberValue));
if (result<18.4) {
        ab = "Berat Badan Kurang";
      } else if (result >=18.5 && result <24.9) {
        ab = "Berat Badan Ideal";
      } else if (result >=25 && result <29.9) {
        ab = "Berat Badan Lebih";
      }else if (result >=30 && result <39.9) {
        ab= "Gemuk"
      } else {
        ab="Sangat Gemuk"
      }
document.getElementById('total_imt').value=result;
document.getElementById('ket_imt').value=ab;

}
</script>
@endpush
