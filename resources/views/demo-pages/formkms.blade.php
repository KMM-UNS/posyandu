@extends('layouts.default')

@section('title', 'Wizards')

@push('css')
    <link href="/assets/plugins/smartwizard/dist/css/smart_wizard.css" rel="stylesheet" />
@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Form Stuff</a></li>
        <li class="breadcrumb-item active">Wizards</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Wizards <small>header small text goes here...</small></h1>
    <!-- end page-header -->
    <!-- begin wizard-form -->
    <form
        action="{{ isset($data) ? route('admin.data-lansia.pantauankms.update', $data->id) : route('admin.data-lansia.pantauankms.store') }}"
        id="form" name="form" method="POST" data-parsley-validate="true" class="form-control-with-bg">
        @csrf
        @if (isset($data))
            {{ method_field('PUT') }}
        @endif
        <!-- begin wizard -->
        <div id="wizard">
            <!-- begin wizard-step -->
            <ul>
                <li>
                    <a href="#step-1">
                        <span class="number">1</span>
                        <span class="info">
                            KMS LANSIA
                            <small>Tanggal Pemeriksaan, Nama Lansia, Penanggungjawab</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#step-2">
                        <span class="number">2</span>
                        <span class="info">
                            KMS LANSIA
                            <small>Kegiatan Sehari-Hari & Status Mental</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#step-3">
                        <span class="number">3</span>
                        <span class="info">
                            KMS LANSIA
                            <small>Indeks Masa Tubuh & Tekanan Darah</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#step-4">
                        <span class="number">4</span>
                        <span class="info">
                            KMS LANSIA
                            <small>Hemoglobin, Reduksi Urine, Protein Urine</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#step-5">
                        <span class="number">5</span>
                        <span class="info">
                            KMS LANSIA
                            <small>Gizi dan Keluhan Tindakan</small>
                        </span>
                    </a>
                </li>
            </ul>

            <!-- end wizard-step -->
            <!-- begin wizard-content -->
            <div>
                <!-- begin step-1 -->
                <div id="step-1">
                    <!-- begin fieldset -->
                    <fieldset>
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin col-8 -->
                            <div class="col-xl-8 offset-xl-2">
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Tanggal
                                    Pemeriksaan, Nama Lansia dan Penanggungjawab</legend>
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Tanggal Pemeriksaan</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="date" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan"
                                            class="form-control" autofocus data-parsley-required="true"
                                            value="{{ $data->tanggal_pemeriksaan ?? old('tanggal_pemeriksaan') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Nama Lansia</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <x-form.Dropdown name="nama_lansia1" :options="$nama_lansia"
                                            selected="{{ old('nama_lansia1') ?? ($data['nama_lansia1'] ?? null) }}"
                                            required />
                                    </div>
                                </div>
                                <!-- end form-group row -->
                            </div>
                            <!-- end col-8 -->
                        </div>
                        <!-- end row -->
                    </fieldset>
                    <!-- end fieldset -->
                </div>
                <!-- end step-1 -->
                <!-- begin step-2 -->
                <div id="step-2">
                    <!-- begin fieldset -->
                    <fieldset>
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin col-8 -->
                            <div class="col-xl-8 offset-xl-2">
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Kegiatan
                                    Sehari-Hari dan Status Mental</legend>
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Kegiatan Sehari-hari</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="radio" id="kegiatan_harian" name="kegiatan_harian"
                                            value="Kategori A ">
                                        <label for="Kategori A">Kategori A (Ketergantungan)</label><br>
                                        <input type="radio" id="kegiatan_harian" name="kegiatan_harian"
                                            value="Kategori B">
                                        <label for="Kategori B">Kategori B (Ada Gangguan)</label><br>
                                        <input type="radio" id="kegiatan_harian" name="kegiatan_harian"
                                            value="Kategori C">
                                        <label for="Kategori C">Kategori C (Mandiri)</label><br>
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Status Mental</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="radio" id="status_mental" name="status_mental" value="Ada ">
                                        <label for="Ada">Ada </label><br>
                                        <input type="radio" id="status_mental" name="status_mental" value="Tidak Ada">
                                        <label for="Tidak Ada">Tidak Ada</label><br>
                                    </div>
                                </div>
                                <!-- end form-group row -->
                            </div>
                            <!-- end col-8 -->
                        </div>
                        <!-- end row -->
                    </fieldset>
                    <!-- end fieldset -->
                </div>
                <!-- end step-2 -->
                <!-- begin step-3 -->
                <div id="step-3">
                    <!-- begin fieldset -->
                    <fieldset>
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin col-8 -->
                            <div class="col-xl-8 offset-xl-2">
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Indeks Masa Tubuh
                                    dan
                                    Tekanan Darah</legend>
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Tinggi Badan (cm)</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="number" id="tb" name="tb" onkeyup="hitung();"
                                            class="form-control" autofocus data-parsley-required="true"
                                            value="{{ $data->tb ?? old('tb') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Berat Badan (kg)</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="number" id="bb" onkeyup="hitung();" name="bb"
                                            class="form-control" autofocus data-parsley-required="true"
                                            value="{{ $data->bb ?? old('bb') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">IHasil</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="hasil" name="hasil" onkeyup="hitung();"
                                            class="form-control" autofocus data-parsley-required="true"
                                            value="{{ $data->hasil ?? old('hasil') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Indeks Massa Tubuh</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="indeks_massa_tubuh" name="indeks_massa_tubuh"
                                            class="form-control" autofocus data-parsley-required="false"
                                            onkeyup="hitung();"
                                            value="{{ $data->indeks_massa_tubuh ?? old('indeks_massa_tubuh') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Tekanan Darah</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="tekanan_darah" name="tekanan_darah"
                                            class="form-control" autofocus data-parsley-required="true"
                                            value="{{ $data->tekanan_darah ?? old('tekanan_darah') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                            </div>
                            <!-- end col-8 -->
                        </div>
                        <!-- end row -->
                    </fieldset>
                    <!-- end fieldset -->
                </div>
                <!-- end step-3 -->
                <!-- begin step-4 -->
                <div id="step-4">
                    <!-- begin fieldset -->
                    <fieldset>
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin col-8 -->
                            <div class="col-xl-8 offset-xl-2">
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Hemoglobin,
                                    Reduksi Urine dan Protein Urine</legend>
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Hemoglobin</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="hemoglobin" name="hemoglobin" class="form-control"
                                            autofocus data-parsley-required="true"
                                            value="{{ $data->hemoglobin ?? old('hemoglobin') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Reduksi Urine</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="reduksi_urine" name="reduksi_urine"
                                            class="form-control" autofocus data-parsley-required="true"
                                            value="{{ $data->reduksi_urine ?? old('reduksi_urine') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Protein Urine</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="protein_urine" name="protein_urine"
                                            class="form-control" autofocus data-parsley-required="true"
                                            value="{{ $data->protein_urine ?? old('protein_urine') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                            </div>
                            <!-- end col-8 -->
                        </div>
                        <!-- end row -->
                    </fieldset>
                    <!-- end fieldset -->
                </div>
                <!-- end step-4 -->
                <!-- begin step-5 -->
                <div id="step-5">
                    <!-- begin fieldset -->
                    <fieldset>
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin col-8 -->
                            <div class="col-xl-8 offset-xl-2">
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Gizi dan Keluhan
                                    Tindakan</legend>
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Keluhan</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="keluhan" name="keluhan" class="form-control"
                                            autofocus data-parsley-required="true"
                                            value="{{ $data->keluhan ?? old('keluhan') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Tindakan</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="tindakan" name="tindakan" class="form-control"
                                            autofocus data-parsley-required="true"
                                            value="{{ $data->tindakan ?? old('tindakan') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                            </div>
                            <!-- end col-8 -->
                        </div>
                        <!-- end row -->
                    </fieldset>
                    <!-- end fieldset -->
                    <!-- begin panel-footer -->
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    <!-- end panel-footer -->
                </div>
                <!-- end step-5 -->
            </div>
            <!-- end wizard-content -->
        </div>
        <!-- end wizard -->
    </form>
    <!-- end wizard-form -->
@endsection

@push('scripts')
    <script src="/assets/plugins/smartwizard/dist/js/jquery.smartWizard.js"></script>
    <script src="/assets/js/demo/form-wizards.demo.js"></script>
@endpush
