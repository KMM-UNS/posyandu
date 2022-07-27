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
{{-- <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size: 14px; font-family: "Times New Roman", "serif";'><strong>Pemerintah kota surakarta</strong></span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size: 14px; font-family: "Times New Roman", "serif";'><strong>Dinas kesehatan</strong></span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size: 14px; font-family: "Times New Roman", "serif";'><strong>Puskesmas surakarta</strong></span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size: 14px; font-family: "Times New Roman", "serif";'><strong>Alamat :Surakarta</strong></span></p>
<hr> --}}
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Surat Rujukan Dari Posyandu</span></strong></p>
{{-- <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Kodesurat &nbsp; &nbsp; &nbsp;: {{ $kode_surat }}</span></p> --}}
<p style="text-align: left;">Kode Surat :&nbsp;{{ $kode_surat }}</p>
{{-- <p style="text-align: right;">Tanggal Dirujuk : {{ $tanggal_surat }}</p> --}}
<p style="text-align: left;">Tanggal Dirujuk : {{ $tanggal_surat }}&nbsp;</p>
<p style="text-align: right;">Kepada : {{ $kepada }}</p>
<p></p>
{{-- <p style="text-align: center;">Dengan hormat, Mohon diberikan surat rujukan pasien sebagai berikut :</p>  --}}
{{-- <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Tanggal surat : {{ $tanggal_surat }}</span></p> --}}
{{-- <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Kepada &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $kepada }}</span></p> --}}
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Dengan hormat, Mohon diberikan surat rujukan pasien sebagai berikut :</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $nama }}</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Umur&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $umur }}</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>: {{ $alamat }}</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Balita terlalu kurus&nbsp; &nbsp; : {{ $bb_turun }}</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Balita terlalu gemuk&nbsp; : {{ $bb_naik }}</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Keluhan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $keluhan }}</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>Keterangan Rujukan&nbsp; : {{ $keterangan_rujukan }}</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>&nbsp;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>&nbsp;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;line-height:115%;font-family:"Times New Roman","serif";'>&nbsp;</span></p>
{{-- <p> Demikian surat rujukan ini kami kirim. Atas perhatian Bapak/Ibu kami ucapkan terima kasih.</p> --}}
<div style="text-align: center;">Demikian surat rujukan ini kami kirim. Atas perhatian Bapak/Ibu kami ucapkan terima kasih</div>
</div>
</body>
</html>
