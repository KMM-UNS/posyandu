@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Pantauan KMS' : 'Create Pantauan KMS' )

@push('css')
<link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
  <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Lansia</a></li>
  <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Lansia<small> @yield('title')</small></h1>
<!-- end page-header -->


<!-- begin panel -->
<form action="{{ isset($data) ? route('admin.data-lansia.pantauankms.update', $data->id) : route('admin.data-lansia.pantauankms.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
  @csrf
  @if(isset($data))
  {{ method_field('PUT') }}
  @endif
  <div class="row">
    <div class="col-xl-6 ui-sortable">
      
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
    
    <button class="btn btn-info btn-primary" data-toggle="modal" data-target="#caraform"><i class="fa fa-info-circle"></i> Cara Pengisian Form</button>
      <div class="modal fade" id="caraform" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">CARA PENGISIAN FORM KMS LANSIA</h5>
              <button type="button" class="close" data-dismiss="modal" arial-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                  <div class="modal-body">
                    <b> 1. Tanggal kunjungan </b> <br> 
                    Pilih tanggal kunjungan sesuai pada saat kunjungan posyandu lansia.<br>
                    <br><b>2. Identitas Usia Lanjut</b><br>
                    Tulis identitas lengkap usia lanjut pemilik KMS. Lalu ukur tinggi badan dalam centimeter tanpa alas kaki dalam keadaan berdiri tegak dan catatlah hasil pengukuran di tempat yang tersedia.<br>
                    <br><b>3. Kegiatan hidup sehari-hari</b><br>
                    a. Tanyakan kepada usia lanjut atau keluarganya, apakah usia lajut masih mampu melakukan kegiatan sehari-hari tanpa bantuan sama sekali? <b>( mandiri = kategori C ) </b><br>
                    b. Ataukah ada gangguan dalam melakukan kativitas sendiri, hingga kadang-kadang perlu bantuan ? <b> ( ada gangguan = kategori B) </b> <br>
                    c. Ataukah sama sekali tidak mampu melakukan kegiatan sehari-hari, sehingga sangat tergantung dengan orang lain? <b>(ketergantungan = kategori A )</b> <br>
                    d. yang dimaksud dengan kehidupan sehari-hari adalah kegiatan dasar dalam kebidupan, seperti : makan, minum, berjalan, mandi berpakaian, naik turun tempat tidur, buang aii besar atau buang air kecil dan sebagainya. <br>
                    e. Kegiatan pekerjan di luar rumah, seperti berbelanja, mencari nafkah, mengambil pensiun, arisan, pengajian dll. <br>
                    f. Pilih pada hasil yang sesuai <b>(mandiri (Kategori C), ada gangguan (Kategori B), ketergantungan (Kategori A))</b> <br>
                    g. Pemeriksaan ini dilakuakn setiap bulan. <br>
                    <br><b>4. Kegiatan hidup sehari-hari</b><br>
                    Lakukan pemeriksaan status mental yang berhubungan dengan keadaan mental emosional, 
                    dengan menggunakan pedoman berikut yang disebut metode 2 menit. Pada tahap ini perlu
                    dipersiapkan oleh petugas/kader, hal-hal sebagai berikut:<br>
                    - Ciptakan lingkungan dan suasana yang nyaman& agar usia lanjut betah. <br>
                    - Sikap ramah dan penuh perhatian akan kebutuhan usia lanjut secara menyeluruh sehingga mempermudah hubungan yang terbuka dan lancar antara usia lanjut dengan petugas/kader.<br>
                    - Ajukan pertanyaan dengan ramah tanpa menyinggung perasaan <br>
                    - Dapat dipergunakan acuan dan pentahapan<br>
                    Jika terdapat masalah emosional pilih <b> ADA </b> jika tidak, pilih <b> TIDAK </b> <br>
                    Catatan pemeriksaan ini dilakukan pada tiap tiga bulan sekali atau bila diperlukan<br>
                    <br><b>5. Indeks Massa Tubuh</b><br>
                    Masukkan tinggi badan dan berat badan pada kalkulator indeks masa tubuh. <br>
                    Kurus : <b> < 18,5 </b> <br>
                    Normal : <b> 18,5 – 24,9 </b> <br>
                    Gemuk :  <b> > 25 - 30 </b> <br>
                    Obesitas: <b> > 30 </b> <br>
                    <br><b>6. Tekanan Darah</b><br>
                    • Ukur tekanan darah dengan tensimeter dan stetoskop. Catat angka sistole dan diastole pada kolom yang tersedia. Cocokkan dengn nilai normalnya, yaitu sistole antara 120-16c mmHg dan diastole 90 mmHg atau kurang. <br>
                    • Apabila salah saru sistole atau diastole atau keduanya di atas normal, maka masuk kriteria tinggi <br>
                    • Apabila sistole dan diastolenya di bwah normal, maka masuk kriteria rendah <br> 
                    <br><b>7. Hemoglobin</b><br>
                    • Periksa Hb dengan salah satu cara, yaitu talquist, sahli, atau cupri sulfat <br>
                    • Catatlah hasilnya pada kolom yang tersedia. Tanda % apabila memakai cara talquist, 13 g % untuk pria dan 12 g% untuk wanita bila menggunakan cara sahli atau cupri sulafat <br>
                    <br><b>8. Reduksi Urine</b><br>

                    <br><b>9. Protein Urine</b><br>
                    



                  </div>
            </div>
          </div>
        </div>
      

          
     
    <div class="panel-body">
      <div class="form-group">
        <label for="name">Tanggal Pemeriksaan</label>
        <input type="date" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_pemeriksaan ?? old('tanggal_pemeriksaan') }}}">
        <label for="name">Nama Lansia</label>
        <x-form.Dropdown name="nama_lansia1" :options="$nama_lansia" selected="{{{ old('nama_lansia1') ?? ($data['nama_lansia1'] ?? null) }}}" required />

        <label for="name">Kegiatan Sehari-hari</label> <br>
        <input type="radio" id="kegiatan_harian" name="kegiatan_harian" value="Kategori A ">
        <label for="Kategori A">Kategori A </label><br>
        <input type="radio" id="kegiatan_harian" name="kegiatan_harian" value="Kategori B">
        <label for="Kategori B">Kategori B</label><br>
        <input type="radio" id="kegiatan_harian" name="kegiatan_harian" value="Kategori C">
        <label for="Kategori C">Kategori C </label><br>
        {{-- <input type="radio" id="kegiatan_harian" name="kegiatan_harian"  value="{{{ $data->kegiatan_harian ?? old('kategori_a') }}}"> Kategori A
        <input type="radio" id="kategori_b" name="kategori_b"  value="{{{ $data->kategori_b ?? old('kategori_b') }}}" > Kategori B
        <input type="radio" id="kategori_c" name="kategori_c"  value="{{{ $data->kategori_c ?? old('kategori_c') }}}"> Kategori C --}}

        <label for="name">Status Mental</label><br>
        <input type="radio" id="status_mental" name="status_mental" value="Ada ">
        <label for="Ada">Ada </label><br>
        <input type="radio" id="status_mental" name="status_mental" value="Tidak Ada">
        <label for="Tidak Ada">Tidak Ada</label><br>
        {{-- <input type="text" id="status_mental" name="status_mental" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->status_mental ?? old('status_mental') }}}"> --}}
        <label for="name">Indeks Massa Tubuh</label>
        <input type="text" id="indeks_massa_tubuh" name="indeks_massa_tubuh" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->indeks_massa_tubuh ?? old('indeks_massa_tubuh') }}}">
        <label for="name">Tekanan Darah</label>
        <input type="text" id="tekanan_darah" name="tekanan_darah" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tekanan_darah ?? old('tekanan_darah') }}}">
        <label for="name">Hemoglobin</label>
        <input type="text" id="hemoglobin" name="hemoglobin" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->hemoglobin ?? old('hemoglobin') }}}">
        <label for="name">Reduksi Urine</label>
        <input type="text" id="reduksi_urine" name="reduksi_urine" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->reduksi_urine ?? old('reduksi_urine') }}}">
        <label for="name">Protein Urine</label>
        <input type="text" id="protein_urine" name="protein_urine" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->protein_urine ?? old('protein_urine') }}}">
     </div>
    </div>
  
    <!-- end panel-body -->
    <!-- begin panel-footer -->
    {{-- <div class="panel-footer">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-default">Reset</button>
    </div> --}}
    <!-- end panel-footer -->
  </div>
    </div>

    
    <div class="col-xl-6 ui-sortable">
      <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
          <h4 class="panel-title">Kalkulator Indeks Masa Tubuh</h4>
          <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
          </div>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
    
        
        <div class="panel-body">
          <div class="form-group">
            <label for="name">Umur</label>
            <input type="number" id="umur" name="umur" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->umur ?? old('umur') }}}">
            <label for="name">Jenis Kelamin</label>
            <x-form.genderRadio name="jk" selected="{{{ old('jk') ?? ($data['jk'] ?? null) }}}"/>
            <label for="name">Tinggi Badan (cm)</label>
            <input type="number" id="tb" name="tb" onkeyup="hitung();" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tb ?? old('tb') }}}">
            <label for="name">Berat Badan (kg)</label>
            <input type="number" id="bb" onkeyup="hitung();" name="bb" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->bb ?? old('bb') }}}">
            <label for="name">Hasil</label>
            <input type="text" id="hasil" name="hasil" onkeyup="hitung();" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->hasil ?? old('hasil') }}}">
         </div>
        </div>
        <div class="panel-heading">
          <h4 class="panel-title">Tekanan Darah</h4> 
          <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
          </div>
        </div>
        <div class="panel-body">
          <div class="form-group">
            
            <br><label for="name">Sistole</label>
            
            <label for="name">Diastole</label>
            
            
         </div>

         
        <!-- end panel-body -->
        <!-- begin panel-footer -->
        {{-- <div class="panel-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="reset" class="btn btn-default">Reset</button>
        </div> --}}
        <!-- end panel-footer -->
      </div>
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
      </div>
 
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

  // if(isset($_GET['proses'])){
  //       $tbp = $_GET['tb'];
  //       $bb = $_GET['bb'];

  //       $tb = $tbp/100;
  //       $hitung = $bb / ($tb * $tb);
  //       if($hitung <= 18.4){
  //       echo'
  //       <div class="alert alert-warning alert-dismissible fade show" role="alert">
  //           Tinggi Badan: '.$tbp.' Cm<br>
  //           Berat Badan : '.$bb.' Kg<br>
  //           BMI         : '.number_format($hitung,1).'<br>
  //           Keterangan : Kurus
  //           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //               <span aria-hidden="true">&times;</span>
  //           </button>
  //        </div>
  //        ';
  //       }elseif($hitung <= 25){
  //         echo'
  //         <div class="alert alert-warning alert-dismissible fade show" role="alert">
  //             Tinggi Badan: '.$tbp.' Cm<br>
  //             Berat Badan : '.$bb.' Kg<br>
  //             BMI         : '.number_format($hitung,1).'<br>
  //             Keterangan : Normal
  //             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //                 <span aria-hidden="true">&times;</span>
  //             </button>
  //          </div>
  //          ';
  //       }elseif($hitung <= 27){
  //           echo'
  //           <div class="alert alert-warning alert-dismissible fade show" role="alert">
  //               Tinggi Badan: '.$tbp.' Cm<br>
  //               Berat Badan : '.$bb.' Kg<br>
  //               BMI         : '.number_format($hitung,1).'<br>
  //               Keterangan : Gemuk
  //               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //                   <span aria-hidden="true">&times;</span>
  //               </button>
  //           </div>
  //           ';
  //       }elseif($hitung > 27 ){
  //           echo'
  //           <div class="alert alert-warning alert-dismissible fade show" role="alert">
  //               Tinggi Badan: '.$tbp.' Cm<br>
  //               Berat Badan : '.$bb.' Kg<br>
  //               BMI         : '.number_format($hitung,1).'<br>
  //               Keterangan : Obesitas
  //               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //                   <span aria-hidden="true">&times;</span>
  //               </button>
  //           </div>
  //           ';
  //       }
  //   }
    function hitung(){
      var txtFirstNumberValue = document.getElementById('tb').value/100;
      var txtSecondNumberValue = document.getElementById('bb').value;
      // var txtThirdNumberValue = document.getElementById('tb' * 'tb').value;
      var result = parseInt(txtSecondNumberValue) / ((txtFirstNumberValue)* (txtFirstNumberValue));
      if (!isNaN(result)) {
        document.getElementById('hasil').value=result;
      }
    }
    
    // if (!isNaN(result <= 18.5)){
      //   $hasil="Underweight";
      // } else if  (!isNaN(result > 18.5 AND result <= 24.9)){
      //   $hasil="Normal Weight";
      // }else if  (!isNaN(result > 29 AND result <= 29.9)){
      //   $hasil="Overweight";
      // }else if  (!isNaN(result > 30.0)){
      //   $hasil="Obese";
      // }

//     if($_POST!=null)
// {
//     $h=empty($_POST["tb"]) ? 0 : $_POST["tb"];
//     $w=empty($_POST["bb"]) ? 0 : $_POST["bb"];
//     $index =0;
//     if($h !=0 && $w !=0)
//         $index = round($w/($h*$h)* 703,2);
 
//     $bmi="";
//     $bmiStyle="alert alert-primary";
//     if ($index < 18.5) {
//         $bmi="underweight - BMI : " . $index;
//         $bmiStyle="alert alert-secondary";
//     } else if ($index < 25) {
//         $bmi="normal - BMI : ". $index;
//         $bmiStyle="alert alert-success";
//     } else if ($index < 30) {
//         $bmi="overweight - BMI : " . $index;  
//         $bmiStyle="alert alert-warning";
//     } else {
//         $bmi="obese - BMI : " .$index;  
//         $bmiStyle="alert alert-danger";
//     }
// }

  // $(document).on('blur','#tb', function(){
  //   let bb = parseInt($('#bb').val())
  //   let tb = parseInt($(this).val())
  //   $('#hasil').val(tb * bb)
  // })
</script>
@endpush
