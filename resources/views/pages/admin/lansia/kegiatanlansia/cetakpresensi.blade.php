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
            POSYANDU LANSIA
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
        <h3 style="font-size: 16px; text-align: center;">Presensi Kegiatan Posyandu</h3><br>
        <p>Nama Kegiatan : {{ $data->nama }} </p>
        <p> Tanggal : {{ $data->tanggal_kegiatan }}</p>
        <p> Lokasi : {{ $data->lokasi }}</p>

        <br>
        <p>Daftar Presensi Lansia</p>
        <div class="form-group">
            <table class="table table-bordered my-5" align="center" rules="all" border="1px"
                style="width: 95%; margin-top: 1 rem margin-bottom: 1 rem;">
                {{-- <table class="table table-bordered my-5" style="height: 31px; width: 990px;"> --}}
                <tr>
                    <th>No.</th>
                    <th>Nama Lansia</th>
                </tr>
                @foreach ($lansia as $pl)
                    @php
                        $datalansia = App\Models\DataLansia::where('id', $pl->lansia_id)->first();
                    @endphp
                    <tr>
                        <td> {{ $loop->iteration }}.</td>
                        <td> {{ $datalansia->nama_lansia }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <br>
        <p>Daftar Presensi Kader</p>
        <div class="form-group">
            <table class="table table-bordered my-5" align="center" rules="all" border="1px"
                style="width: 95%; margin-top: 1 rem margin-bottom: 1 rem;">
                {{-- <table class="table table-bordered my-5" style="height: 31px; width: 990px;"> --}}
                <tr>
                    <th>No.</th>
                    <th>Nama Kader</th>
                </tr>
                @foreach ($kader as $pk)
                    @php
                        $datakader = App\Models\Kader::where('id', $pk->kader_id)->first();
                    @endphp
                    <tr>
                        <td> {{ $loop->iteration }}.</td>
                        <td> {{ $datakader->nama }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>
