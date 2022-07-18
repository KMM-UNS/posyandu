<!DOCTYPE html>
<html lang="en">

{{-- <head>
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

    <h3 style="font-size: 16px; text-align: center;">Laporan KMS Lansia</h1>
        <div class="form-group">
            <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
                <tr>
                    <th>No. </th>
                    <th>Tanggal Pemeriksaan </th>
                    <th>Nama Lansia</th>
                    <th>Tekanan Darah</th>
                    <th>Tinggi Badan</th>
                    <th>Berat Badan</th>
                    <th>Indeks Massa Tubuh</th>
                </tr>
                @foreach ($data as $cetakkms)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td> {{ $cetakkms->tanggal_pemeriksaan }}</td>
                        <td> {{ $cetakkms->lansia->nama_lansia }}</td>
                        <td> {{ $cetakkms->tekanan_darah }}</td>
                        <td> {{ $cetakkms->tb }}</td>
                        <td> {{ $cetakkms->bb }}</td>
                        <td> {{ $cetakkms->indeks_massa_tubuh }}</td>
                    </tr>
                @endforeach
        </div>
</body> --}}

<p style="text-align: center;">&nbsp;</p>
<h4 style="text-align: center;">PENCATATAN DAN HASIL KEGIATAN KESEHATAN DI KELOMPOK USIA LANJUT</h4>
<p style="text-align: center;">&nbsp;</p>
<p>Nama Kelompok :</p>
<p>Desa/Kelurahan :</p>
<p>Puskesmas :</p>
<p>Kecamatan :</p>
{{-- <p>&nbsp;</p> --}}
<div class="form-group">
    <table id="rekaps" class="table table-bordered my-5" align="center" rules="all" border="1px"
        style="width: 95%; margin-top: 1 rem margin-bottom: 1 rem;">
        {{-- <table class="table table-bordered my-5" style="height: 31px; width: 990px;"> --}}
        <tr>
            <th>No. Urut</th>
            <th>No. KMS</th>
            <th>Nama</th>
            <th>Tanggal Pemeriksaan</th>
            <th>Kemandirian</th>
            <th>Emosional Mental</th>
            <th>IMT</th>
            <th>Tekanan Darah</th>
            <th>Hemoglobin</th>
            <th>Reduksi Urine</th>
            <th>Protein Urine</th>
            <th>Keluhan</th>
            <th>Penanganan</th>
        </tr>
        @foreach ($data as $cetakkms)
            <tr>
                <td> {{ $loop->iteration }}</td>
                <td> no kms</td>
                <td> {{ $cetakkms->lansia->nama_lansia }}</td>
                <td> {{ $cetakkms->tanggal_pemeriksaan }}</td>
                <td> {{ $cetakkms->kegiatan_harian }}</td>
                <td> {{ $cetakkms->status_mental }}</td>
                <td> {{ $cetakkms->indeks_massa_tubuh }}</td>
                <td> {{ $cetakkms->tekanan_darah }}</td>
                <td> {{ $cetakkms->hemoglobin }}</td>
                <td> {{ $cetakkms->reduksi_urine }}</td>
                <td> {{ $cetakkms->protein_urine }}</td>
                <td> {{ $cetakkms->keluhan }}</td>
                <td> {{ $cetakkms->tindakan }}</td>
            </tr>
        @endforeach
    </table>
</div>

</html>

@push('scripts')
    <script>
        $(document).ready(function() {
            var table = $('#rekaps').DataTable({
                pageLength: 10,
                processing: true,
                serverSide: false,
                dom: 'Blfrtip',
            });

        });
    </script>
@endpush
