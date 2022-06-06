<!DOCTYPE html>
<head>
    <title>Surat Rujukan</title>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
        }

        #halaman{
            width: auto; 
            height: auto; 
            position: absolute; 
            border: 1px solid; 
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
        }

        #css{
        .left    { text-align: left;}
        .right   { text-align: right;}
        .center  { text-align: center;}
        .justify { text-align: justify;}
        }
    </style>

</head>

<body>
    <div id=halaman>
        <h3 id=judul>SURAT Rujukan Posyandu Lansia</h3>
        <h4 id=judul> No {{ $no_surat }} </h4>

        <h5><p class="right"> Kepada<br>
            Yth. {{ $kepada }}<br>
            Bag. Rujukan<br>
            Di Tempat <p> </h5>             
        <p>Dengan Hormat,</p>
        <p> Mohon diberikan surat rujukan BPJS/Jamsoskes/Umum pasien sebagai berikut:</p><br>
        
        <table>
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $namalansia }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Umurr</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $umur }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Jenis Kelamin</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $jeniskelamin }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Alamat</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $alamat }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Keluhan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $keluhan }}</td>
            </tr>
        </table>

        <br>
        <div style="width: 50%; text-align: left; float: right;">Solo, {{ $tanggal_surat }}</div><br>
        <div style="width: 50%; text-align: left; float: right;">Hormat Kami,</div><br>
        <br><br><br><br>
        <div style="width: 50%; text-align: left; float: right;">Kader Posyandu</div>

    </div>
</body>

</html>