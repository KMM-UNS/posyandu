<!DOCTYPE html>

<head>
    <title>Surat Rujukan</title>
    <meta charset="utf-8">
    <style>
        #judul {
            text-align: center;
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

        #css {
            .left {
                text-align: left;
            }

            .right {
                text-align: right;
            }

            .center {
                text-align: center;
            }

            .justify {
                text-align: justify;
            }
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


        <p class=MsoNormal align=center style='text-align:center'>Rekapitulasi Hasil
            Kegiatan Kesehatan Di Kelompok Usia Lanjut</p>

        <p class=MsoNormal align=center style='text-align:center'>&nbsp;</p>

        <p class=MsoNormal>Tanggal : {{ $data->tanggal_kegiatan }}</p>

        <p class=MsoNormal>Desa/Kelurahan : Banyuagung</p>

        <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:none'>
            <tr>
                <td width=623 colspan=2 valign=top
                    style='width:467.5pt;border:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>1. Jumlah Pra
                        Usila/Usia Lanjut : {{ $lansia }} Orang </p>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>2. Jumlah Pra
                        Usila/Usia Lanjut yang datang pada bulan ini : {{ $datakms }} Orang</p>
                </td>
            </tr>
            <tr>
                <td width=312 valign=top
                    style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>3.
                        Kemandirian</p>
                </td>
                <td width=312 valign=top
                    style='width:233.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Kategori A : {{ $mandiriA }}
                        orang
                    </p>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Kategori B : {{ $mandiriB }}
                        orang
                    </p>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Kategori C : {{ $mandiriC }}
                        orang</p>
                </td>
            </tr>
            <tr>
                <td width=312 valign=top
                    style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>4. Mental
                        Emosional</p>
                </td>
                <td width=312 valign=top
                    style='width:233.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Ada : {{ $mentalada }} orang
                    </p>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Tidak Ada :
                        {{ $mentaltidakada }} orang</p>
                </td>
            </tr>
            <tr>
                <td width=312 valign=top
                    style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>5. IMT/Berat
                        Badan</p>
                </td>
                <td width=312 valign=top
                    style='width:233.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Lebih : {{ $imtlebih }}
                        orang</p>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Normal : {{ $imtnormal }}
                        orang</p>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Kurang : {{ $imtkurang }}
                        orang</p>
                </td>
            </tr>
            <tr>
                <td width=312 valign=top
                    style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>6. Tekanan
                        Darah</p>
                </td>
                <td width=312 valign=top
                    style='width:233.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Tinggi : {{ $tekanantinggi }}
                        orang </p>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Normal : {{ $tekanannormal }}
                        orang </p>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Rendah : {{ $tekananrendah }}
                        orang</p>
                </td>
            </tr>
            <tr>
                <td width=312 valign=top
                    style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>7. Hemoglobin</p>
                </td>
                <td width=312 valign=top
                    style='width:233.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Kurang : {{ $hbkurang }}
                        orang</p>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Normal : {{ $hbnormal }}
                        orang</p>
                </td>
            </tr>
            <tr>
                <td width=312 valign=top
                    style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>8. Reduksi
                        Urine</p>
                </td>
                <td width=312 valign=top
                    style='width:233.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Positif : {{ $rpositif }}
                        orang</p>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Normal : {{ $rnormal }}
                        orang</p>
                </td>
            </tr>
            <tr>
                <td width=312 valign=top
                    style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>9. Protein
                        Urine</p>
                </td>
                <td width=312 valign=top
                    style='width:233.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Positif : {{ $ppositif }}
                        orang</p>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Normal : {{ $pnormal }}
                        orang</p>
                </td>
            </tr>
            <tr>
                <td width=312 valign=top
                    style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>10. Jumlah
                        yang dirujuk</p>
                </td>
                <td width=312 valign=top
                    style='width:233.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>{{ $tindakan }} orang</p>
                </td>
            </tr>
        </table>
        <br>
        <p class=MsoNormal align=center style='text-align:center'>Mengetahui,</p>

        <p class=MsoNormal style='text-indent:.5in'> Petugas
            Kesehatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Ketua Kader</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal style='text-indent:.5in'>
            (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            )
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            )</p>

    </div>
</body>

</html>
