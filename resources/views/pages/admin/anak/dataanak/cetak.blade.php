<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1 style="font-size: 16px; text-align: center;">
        POSYANDU ANAK
    </h1>
    <h1 style="font-size: 16px; text-align: center;">
        KELURAHAN JEBRES KECAMATAN JEBRES
    </h1>
    <h1 style="font-size: 16px; text-align: center;">
        KOTA SURAKARTA
    </h1>
    <h4 style="text-align: center; font-weight: normal; margin-bottom: 0;">
        JALAN KABUT, JEBRES, Kec. JEBRES, Kota SURAKARTA, JAWA TENGAH
    </h4>
    <h4 style="text-align: center; font-weight: normal; margin: 0;">
        Telepon: 08988777788 Surel : posyandu@mail.com Kode Pos : 5612
    </h4>
    <hr style="border: 3px solid; margin-bottom: 1px;">
    <hr style="margin-top: 0;">
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Riwayat Imunisasi</span></strong></p>
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
    {{-- <table class="table table-primary table-striped">
        <thead>
            <tr> --}}
    <div class="panel-body">
                    <!-- begin table-responsive -->
    <div class="table-responsive">
    <table class="table m-b-0">
        <thead>
            <tr>
                <th> No</th>
                {{-- <th> Nama Anak</th> --}}
                <th> Tanggal Imunisasi</th>
                <th> Berat Badan (kg)</th>
                <th> Tinggi Badan (Cm)</th>
                <th> Total IMT</th>
                <th> Kategori IMT</th>
                <th> Umur</th>
                <th> Vaksin</th>
                <th> Vitamin Anak</th>
                <th> Keluhan</th>
                <th> Tindakan</th>
                <th> Status Gizi</th>
                <th> Nama Kader</th>
            </tr>
        </thead>
        <tbody>
            @foreach($imunisasis as $imunisasi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                {{-- <td>{{ $imunisasi->data_anak->nama_anak }}</td> --}}
                <td>{{ $imunisasi->tanggal_imunisasi }}</td>
                <td>{{ $imunisasi->berat_badan}}</td>
                <td>{{ $imunisasi->tinggi_badan}}</td>
                <td>{{ $imunisasi->total_imt}}</td>
                <td>{{ $imunisasi->ket_imt}}</td>
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
    <!-- end panel-footer -->
    </div>
  <!-- end panel -->


    </div>
</body>
</html>

