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
        POSYANDU SEBELAS MARET
    </h1>
    <h1 style="font-size: 16px; text-align: center;">
        KELURAHAN JEBRES KECAMATAN JEBRES
    </h1>
    <h1 style="font-size: 16px; text-align: center;">
        KOTA SURAKARTA
    </h1>
    <h4 style="text-align: center; font-weight: normal; margin-bottom: 0;">
        JALAN SEBELAS MARET, JEBRES, Kec. JEBRES, Kota SURAKARTA, JAWA TENGAH
    </h4>
    <h4 style="text-align: center; font-weight: normal; margin: 0;">
        Telepon: 08988777788 Surel : uns@mail.com Kode Pos : 5612
    </h4>
    <hr style="border: 3px solid; margin-bottom: 1px;">
    <hr style="margin-top: 0;">

    <h3 style="font-size: 16px; text-align: center;">Laporan Data Rujukan anak</h1>
        <div class="form-group">
            <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
                <tr>
                    <th>No. </th>
                    <th>Nama Anak</th>
                    <th>Kepada</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Sakit</th>
                    <th>Keterangan Rujukan</th>
                </tr>
                @foreach ($data as $cetak)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td> {{ $cetak->data_anak->nama_anak }}</td>
                        <td> {{ $cetak->instansi->nama_instansi}}</td>
                        <td> {{ $cetak->umur}}</td>
                        <td> {{ $cetak->alamat}}</td>
                        <td> {{ $cetak->keluhan }}</td>
                        <td> {{ $cetak->keterangan_rujukan}}</td>
                    </tr>
                @endforeach

        </div>
</body>

</html>
