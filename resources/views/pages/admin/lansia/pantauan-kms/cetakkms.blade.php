<!DOCTYPE html>
<html lang="en">
<p style="text-align: center;">&nbsp;</p>
<h4 style="text-align: center;">PENCATATAN DAN HASIL KEGIATAN KESEHATAN DI KELOMPOK USIA LANJUT</h4>
<p style="text-align: center;">&nbsp;</p>

<p>Nama Lansia : {{ $lansia->lansia->nama_lansia }}</p>
<p>No KMS : {{ $lansia->lansia->no_kms }}</p>
<p>Desa/Kelurahan : Kadipuro</p>
{{-- <p>Puskesmas :</p> --}}
<p>Kecamatan : Banjarsari</p>
{{-- <p>&nbsp;</p> --}}
<div class="form-group">
    <table class="table table-bordered my-5" align="center" rules="all" border="1px"
        style="width: 95%; margin-top: 1 rem;
    margin-bottom: 1 rem;">
        <tbody>
            <tr>
                <th scope="col" width="180px">Kunjungan Ke</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $loop->iteration }}</th>
                @endforeach
            </tr>


            <tr>
                <th scope="row"> Tanggal</th>
                @foreach ($data as $cetakkms)
                    <th> {{ $cetakkms->tanggal_pemeriksaan }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Kegiatan Sehari-hari</th>
            </tr>
            <tr>
                <th scope="row">Kategori A</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->kegiatan_harian == 'Kategori A')
                        <th scope="col" style="background-color: #ffd700;">v</th>
                    @else
                        <th scope="col" style="background-color: #ffd700;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Kategori B</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->kegiatan_harian == 'Kategori B')
                        <th scope="col" style="background-color: #ff0;">v</th>
                    @else
                        <th scope="col" style="background-color: #ff0;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Kategori C</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->kegiatan_harian == 'Kategori C')
                        <th scope="col" style="background-color: #ffffe0;">v</th>
                    @else
                        <th scope="col" style="background-color: #ffffe0;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
            <tr>
                <th scope="row">Status Mental</th>
            </tr>
            <tr>
                <th scope="row">Ada</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->status_mental == 'Ada')
                        <th scope="col" style="background-color: #ffff80;">v</th>
                    @else
                        <th scope="col" style="background-color: #ffff80;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Tidak Ada</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->status_mental == 'Tidak Ada')
                        <th scope="col" style="background-color: #ffffe0;">v</th>
                    @else
                        <th scope="col" style="background-color: #ffffe0;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Indeks Massa Tubuh</th>
            </tr>
            <tr>
                <th scope="row">Lebih</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->indeks_massa_tubuh == 'Berat Lebih')
                        <th scope="col" style="background-color: #f00;">v</th>
                    @else
                        <th scope="col" style="background-color: #f00;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Normal</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->indeks_massa_tubuh == 'Normal')
                        <th scope="col" style="background-color: #ffff80;">v</th>
                    @else
                        <th scope="col" style="background-color: #ffff80;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Kurang</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->indeks_massa_tubuh == 'Berat Kurang')
                        <th scope="col" style="background-color: #ff0;">v</th>
                    @else
                        <th scope="col" style="background-color: #ff0;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Tinggi Badan (Kg)</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->tb }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Berat Badan (cm)</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->bb }}</th>
                @endforeach

            </tr>
            <tr>
                <th scope="row">Tekanan Darah</th>
            </tr>
            <tr>
                <th scope="row">Tinggi</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->tekanan_darah == 'Tinggi')
                        <th scope="col" style="background-color: #973e95;">v</th>
                    @else
                        <th scope="col" style="background-color: #973e95;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Normal</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->tekanan_darah == 'Normal')
                        <th scope="col" style="background-color: #ecd8e9;">v</th>
                    @else
                        <th scope="col" style="background-color: #ecd8e9;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Rendah</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->tekanan_darah == 'Rendah')
                        <th scope="col" style="background-color: #d8b1d4;">v</th>
                    @else
                        <th scope="col" style="background-color: #d8b1d4;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Sistole</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->sistol }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Diastol</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->diastol }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Dgn Obat</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->dengan_obat }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Nadi</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->nadi }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row"><br>Hemoglobin</th>

            </tr>
            <tr>
                <th scope="row">Kurang</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->hemoglobin == 'Kurang')
                        <th scope="col" style="background-color: #87CEFA;">v</th>
                    @else
                        <th scope="col" style="background-color: #87CEFA;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Normal</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->hemoglobin == 'Normal')
                        <th scope="col" style="background-color: #F0F8FF;">v</th>
                    @else
                        <th scope="col" style="background-color: #F0F8FF;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">g% atau %</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->g_hemoglobin }}</th>
                @endforeach

            </tr>
            <tr>
                <th scope="row">Reduksi Urine</th>
            </tr>
            <tr>
                <th scope="row">Positif</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->reduksi_urine == 'Positif')
                        <th scope="col" style="background-color: #abce80;">v</th>
                    @else
                        <th scope="col" style="background-color: #abce80;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Normal</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->reduksi_urine == 'Normal')
                        <th scope="col" style="background-color: #ffffff;">v</th>
                    @else
                        <th scope="col" style="background-color: #ffffff;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>

                <th scope="row">Jumlah Tanda +</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->jumlahtanda }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Dgn Obat</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->dengan_obat_reduksi }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Protein Urine</th>
            </tr>
            <tr>
                <th scope="row">Positif</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->protein_urine == 'Positif')
                        <th scope="col" style="background-color: #D2B48C;">v</th>
                    @else
                        <th scope="col" style="background-color: #D2B48C;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Normal</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->protein_urine == 'Normal')
                        <th scope="col" style="background-color: #FFF8DC;">v</th>
                    @else
                        <th scope="col" style="background-color: #FFF8DC;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Jumlah Tanda +</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->jumlah_tanda }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Dgn Obat</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->dengan_obat_reduksi }}</th>
                @endforeach
            </tr>
        </tbody>
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
