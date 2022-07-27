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
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Riwayat KMS</span></strong></p>
	<!-- end page-header -->
	<!-- begin row -->

    <div class="row">
        <div class="col-md-10">
             <table class="table table-primary table-striped">
                    <thead>
                        <tr>
                            {{-- <th scope="col"><strong> Nama Anak </strong></th> --}}
                            <th> Tanggal Imunisasi </th>
                            <th> Berat Badan (kg) </th>
                            <th> Tinggi Badan (Cm) </th>
                            <th> Total IMT </th>
                            <th> Keterangan IMT </th>
                            <th> Umur </th>
                            <th> Vaksin </th>
                            <th> Vitamin Anak </th>
                            <th scope="col"><strong> Keluhan </strong></th>
                            <th scope="col"><strong> Tindakan </strong></th>
                            <th> Status Gizi </th>
                            <th> Nama Kader </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($imunisasis as $imunisasi)
                        <tr>
                            {{-- <td>{{ $imunisasi->data_anak->nama_anak }}</td> --}}
                            <td>{{ $imunisasi->tanggal_imunisasi }}</td>
                            <td>{{ $imunisasi->berat_badan}}</td>
                            <td>{{ $imunisasi->tinggi_badan}}</td>
                            <td>{{ $imunisasi->total_imt }}</td>
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
{{-- <body class="h-screen bg-gray-100">

<div class="container px-4 mx-auto">

    <div class="p-6 m-20 bg-white rounded shadow">
        {!! $chart->container() !!}
    </div>

</div>

<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }} --}}
{{-- @endif --}}
{{-- <div class="panel-footer">
     <a class="btn btn-info buttons-show"><i class="fas fa-download"> Download</i></a>
</div> --}}
{{-- @endsection --}}
</body>
</html>
