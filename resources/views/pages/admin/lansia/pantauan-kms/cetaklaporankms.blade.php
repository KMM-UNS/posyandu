<!DOCTYPE html>
<html lang="en">

<p style="text-align: center;">&nbsp;</p>
<h4 style="text-align: center;">PENCATATAN DAN HASIL KEGIATAN KESEHATAN DI KELOMPOK USIA LANJUT</h4>
<p style="text-align: center;">&nbsp;</p>
<p>Nama Kelompok : Posyandu RT 04 RW 03 Banyuagung</p>
<p>Desa/Kelurahan : Kadipuro</p>
{{-- <p>Puskesmas :</p> --}}
<p>Kecamatan : Banjarsari</p>
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
                <td> {{ $cetakkms->lansia->no_kms }}</td>
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
