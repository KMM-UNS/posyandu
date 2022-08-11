@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Pantauan KMS' : 'Create Pantauan KMS')

@push('css')
    <link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
    <link href="/assets/plugins/smartwizard/dist/css/smart_wizard.css" rel="stylesheet" />
@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="/admin/data-lansia/pantauankms">Pantauan KMS</a></li>

        <li class="breadcrumb-item active">@yield('title')</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Catatan Pantauan KMS</h1>
    <!-- end page-header -->


    <!-- begin panel -->
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
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Nama Penanggungjawab</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <x-form.Dropdown name="kader" :options="$kaders"
                                            selected="{{ old('kader') ?? ($data['kader'] ?? null) }}" required />
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
                                    Sehari-Hari</legend>
                                <b>Kategori A </b> : Apabila usia lanjut sama sekali tidak mampu melakukan kegiatan
                                sehari-hari,
                                sehingga sangat tergantung orang lain (ketergantungan).<br>
                                <b> Kategori B </b> : apabila ada gangguan dalam melakukan sendiri, hingga kadang-kadang
                                perlu
                                bantuan
                                (ada gangguan)<br>
                                <b> Kategori C </b> : apabila usia lanjut masih mampu melakukan kegiatan hidup sehari-hari
                                tanpa
                                bantuan
                                sama sekali (mandiri)<br>
                                <br><br>
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
                                </div><br>
                                <!-- end form-group row -->
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Status Mental
                                </legend>
                                Pedoman metode 2 menit melalui 2 tahap pertanyaan:<br>
                                Pertanyaan tahap 1:<br>
                                1. Apakah anda mengalami sukar tidur?<br>
                                2. Apakah anda sering merasa gelisah?<br>
                                3. Apakah anda sering murung dan atau menangis sendiri?<br>
                                4. Apakah anda sering merasa was-was atau khawatir?<br><br>
                                Bila ada 1 atau lebih jawaban “ya” lanjutkan pada pertanyaan tahap 2<br><br>
                                Pertanyaan tahap 2:<br>
                                1. Apakah lama keluhan lebih dari 3 bulan atau lebih dari 1 kali dalam sebulan?<br>
                                2. Apakah anda mempunyai masalah atau banyak pikiran?<br>
                                3. Apakah anda mempunyai gangguan atau masalah dengan keluarga atau orang lain?<br>
                                4. Apakah anda menggunakan obat tidur atau penenang atas anjuran dokter?<br>
                                5. Apakah anda cenderung mengurung diri dalam kamar? <br><br>
                                Bila 1 atau lebih jawaban “ya” maka usia lanjut mempunyai masalah emosional. <br>
                                <br><br>
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
                                </legend>
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
                                    {{-- <label class="col-lg-3 text-lg-right col-form-label">Hasil</label> --}}
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="hidden" id="hasil" name="hasil" onkeyup="hitung();"
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
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Tekanan Darah
                                </legend>
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Sistole</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="sistol" name="sistol" class="form-control"
                                            autofocus data-parsley-required="true" onkeyup="tekanan();"
                                            value="{{ $data->sistol ?? old('sistol') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Diastole</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="diastol" name="diastol" class="form-control"
                                            autofocus data-parsley-required="true" onkeyup="tekanan();"
                                            value="{{ $data->diastol ?? old('diastol') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Tekanan Darah</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="tekanan_darah" name="tekanan_darah"
                                            onkeyup="tekanan();" class="form-control" autofocus
                                            data-parsley-required="true"
                                            value="{{ $data->tekanan_darah ?? old('tekanan_darah') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Dgn Obat</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="dengan_obat" name="dengan_obat" class="form-control"
                                            value="{{ $data->dengan_obat ?? old('dengan_obat') }}">
                                        <span>+ : Bila usia lanjut diberi obat <br>- : Bila usia lanjut tidak diberi obat
                                        </span>
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Nadi</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="nadi" name="nadi" class="form-control"
                                            value="{{ $data->nadi ?? old('nadi') }}">
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
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Hemoglobin
                                </legend>
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Hemoglobin</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="radio" id="hemoglobin" name="hemoglobin" value="Positif ">
                                        <label for="Kurang">Kurang</label><br>
                                        <input type="radio" id="hemoglobin" name="hemoglobin" value="Normal">
                                        <label for="Normal">Normal</label><br>

                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label"> g% atau %</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="g_hemoglobin" name="g_hemoglobin" class="form-control"
                                            value="{{ $data->g_hemoglobin ?? old('g_hemoglobin') }}">
                                        <span>Normal = L ≥ 13g% , P ≥ 12g%, Talquist ≥ 70%</span>
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">
                                    Reduksi Urine</legend>
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Reduksi Urine</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="radio" id="reduksi_urine" name="reduksi_urine" value="Positif ">
                                        <label for="Positif">Positif</label><br>
                                        <input type="radio" id="reduksi_urine" name="reduksi_urine" value="Normal">
                                        <label for="Normal">Normal</label><br>

                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label"> Jumlah Tanda +</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="jumlahtanda" name="jumlahtanda" class="form-control"
                                            value="{{ $data->jumlahtanda ?? old('jumlahtanda') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Dgn Obat</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="dengan_obat_reduksi" name="dengan_obat_reduksi"
                                            class="form-control"
                                            value="{{ $data->dengan_obat_reduksi ?? old('dengan_obat_reduksi') }}">
                                        <span>+ : Bila usia lanjut diberi obat <br>- : Bila usia lanjut tidak diberi obat
                                        </span>
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Protein Urine
                                </legend>
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Protein Urine</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="radio" id="protein_urine" name="protein_urine" value="Positif ">
                                        <label for="Positif">Positif</label><br>
                                        <input type="radio" id="protein_urine" name="protein_urine" value="Normal">
                                        <label for="Normal">Normal</label><br>
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label"> Jumlah Tanda +</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="jumlah_tanda" name="jumlah_tanda" class="form-control"
                                            value="{{ $data->jumlah_tanda ?? old('jumlah_tanda') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Dgn Obat</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="dengan_obat_protein" name="dengan_obat_protein"
                                            class="form-control"
                                            value="{{ $data->dengan_obat_protein ?? old('dengan_obat_protein') }}">
                                        <span>+ : Bila usia lanjut diberi obat <br>- : Bila usia lanjut tidak diberi obat
                                        </span>
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
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Gizi </legend>
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Gizi</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="gizi" name="gizi" class="form-control"
                                            autofocus data-parsley-required="true" onkeyup="hitung();"
                                            value="{{ $data->gizi ?? old('gizi') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Keluhan
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
                        <button type="submit" class="btn btn-primary float-right mr-4">Simpan</button>
                        <!-- end row -->
                    </fieldset>
                    <!-- end fieldset -->

                </div>
                <!-- end step-5 -->
            </div>
            <!-- end wizard-content -->
        </div>
        <!-- end wizard -->
    </form>
    <a href="javascript:history.back(-1);" class="btn btn-success">
        <i class="fa fa-arrow-circle-left"></i> Kembali
    </a>

@endsection

@push('scripts')
    <script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
    <script src="/assets/plugins/smartwizard/dist/js/jquery.smartWizard.js"></script>
    <script src="/assets/js/demo/form-wizards.demo.js"></script>
    <script>
        function hitung() {
            var txtFirstNumberValue = document.getElementById('tb').value / 100;
            var txtSecondNumberValue = document.getElementById('bb').value;
            var result = Math.ceil((txtSecondNumberValue) / ((txtFirstNumberValue) * (txtFirstNumberValue)));

            if (result < 17) {
                ab = "Berat Kurang";
                gizi = "Diberikan Gizi Tambahan";
            } else if (result >= 17 && result < 18) {
                ab = "Berat Kurang";
                gizi = "Diberikan Gizi Tambahan";
            } else if (result >= 18 && result < 25) {
                ab = "Normal";
                gizi = "-";
            } else if (result >= 25 && result < 27) {
                ab = "Berat Lebih"
                gizi = "-";
            } else {
                ab = "Berat Lebih"
                gizi = "-";
            }
            document.getElementById('hasil').value = result;
            document.getElementById('indeks_massa_tubuh').value = ab;
            document.getElementById('gizi').value = gizi;
        }
    </script>
    <script>
        function tekanan() {
            var txtFirstNumberValue = document.getElementById('sistol').value;
            var txtSecondNumberValue = document.getElementById('diastol').value * 2;
            var result = ((parseInt(txtSecondNumberValue) + parseInt(txtFirstNumberValue)) / 3);

            if (result < 70) {
                tek = "Rendah";
            } else if (result >= 70 && result < 110) {
                tek = "Normal";
            } else {
                tek = "Tinggi";
            }
            document.getElementById('tekanan_darah').value = tek;

        }
    </script>
@endpush
