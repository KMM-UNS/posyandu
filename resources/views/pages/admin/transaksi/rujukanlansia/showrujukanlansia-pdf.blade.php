
<!DOCTYPE html>
<head>
    <title>Surat Rujukan</title>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
        }

        /* #halaman{
            width: auto; 
            height: auto; 
            position: absolute; 
            border: 1px solid; 
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
        } */

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

    <h3 style="font-size: 16px; text-align: center;">SURAT Rujukan Posyandu Lansia</h1>
        <h4 id=judul> No {{ $no_surat }} </h4>

        <h5><p class="left"> Kepada<br>
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
        <div style="width: 50%; text-align: left; float: right;">Hormat Kami,</div>
    </br>
</br></br></br></br>
        <div style="width: 50%; text-align: left; float: right;">Kader Posyandu</div>

    </div>
</body>

</html> 