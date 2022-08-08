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
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Report Kegiatan Posyandu</span></strong></p>
	<!-- end page-header -->
	<!-- begin row -->
<form action="{{ isset($data) ? route('admin.anak-data.jadwalkegiatan.update', $data->id) : route('admin.anak-data.jadwalkegiatan.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
    @csrf
    @if(isset($data))
    {{ method_field('PUT') }}
    @endif
    <div class="panel-body">
        <div class="form-group">
          <div class="row">
              <div class="col-md-3">
                  <label for="name"><b>Tanggal Kegiatan</b></label>
                  : {{ $data->tanggal }}
                  {{-- <input type="text" id="nama_anak" name="nama_anak" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama_anak ?? old('nama_anak') }}}"> --}}
              </div>
              <div class="col-md-3">
                  <label for="name"><b>Penanggung Jawab</b></label>
                  : {{ $data->kader->nama }}
                  {{-- <input type="text" id="NIK" name="NIK" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->NIK ?? old('NIK') }}}"> --}}
              </div>
          </div>
          <div class="row">
            <div class="col-md-3">
                <label for="name"><b>Tempat Kegiatan</b></label>
                : {{ $data->tempat }}
                {{-- <input type="text" id="nama_anak" name="nama_anak" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama_anak ?? old('nama_anak') }}}"> --}}
            </div>
            <div class="col-md-3">
                <label for="name"><b>Keterangan</b></label>
                : {{ $data->keterangan }}
                {{-- <input type="text" id="NIK" name="NIK" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->NIK ?? old('NIK') }}}"> --}}
            </div>
        </div>

     {{-- </div>
    </div> --}}
    {{-- <table class="table table-primary table-striped">
        <thead>
            <tr> --}}
    {{-- <div class="panel-body"> --}}
                    <!-- begin table-responsive -->
    <div class="table-responsive">
    <table class="table m-b-0">
        <thead>
            <tr>
                <th> No</th>
                <th> Nama Anak</th>
                {{-- <th> Tanggal Imunisasi</th> --}}
                <th> Berat Badan (kg)</th>
                <th> Tinggi Badan (Cm)</th>
                <th> Total IMT</th>
                <th> Kategori IMT</th>
                <th> Umur</th>
                <th> Vaksin</th>
                <th> Vitamin Anak</th>
                <th> Keluhan</th>
                <th> Tindakan</th>
                <th> Gizi Tambahan</th>
                {{-- <th> Nama Kader</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach($imunisasis as $imunisasi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $imunisasi->data_anak->nama_anak }}</td>
                {{-- <td>{{ $imunisasi->tanggal_imunisasi }}</td> --}}
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
                {{-- <td>{{ $imunisasi->kader->nama }}</td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>
</body>
</html>
