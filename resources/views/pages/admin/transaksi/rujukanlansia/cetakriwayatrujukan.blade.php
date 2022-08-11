<!DOCTYPE html>
<html lang="en">

<body>
    <p style="text-align: center;">&nbsp;</p>
    <h4 style="text-align: center;">PENCATATAN RUJUKAN DI KELOMPOK USIA LANJUT</h4>
    <p style="text-align: center;">&nbsp;</p>
    {{-- <p>Nama Kelompok :</p> --}}
    <p>Nama Lansia : {{ $lansia->rujukan->nama_lansia }}</p>
    <p>No KMS : {{ $lansia->rujukan->no_kms }}</p>
    <p>Desa/Kelurahan : Kadipuro</p>
    {{-- <p>Puskesmas :</p> --}}
    <p>Kecamatan : Banjarsari</p>
    <br>
    <div class="form-group">

        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>No. </th>
                {{-- <th>Nama Lansia</th> --}}
                <th>Tanggal Pemeriksaan</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Keluhan</th>
            </tr>
            @foreach ($data as $cetakrl)
                <tr>
                    <td> {{ $loop->iteration }}</td>
                    {{-- <td> {{ $cetakrl->rujukan->nama_lansia }}</td> --}}
                    <td> {{ $cetakrl->tanggal_surat }}</td>
                    <td> {{ $cetakrl->umur }}</td>
                    <td> {{ $cetakrl->jeniskelamin }}</td>
                    <td> {{ $cetakrl->alamat }}</td>
                    <td> {{ $cetakrl->keluhan }}</td>
                </tr>
            @endforeach
    </div>
</body>

</html>
