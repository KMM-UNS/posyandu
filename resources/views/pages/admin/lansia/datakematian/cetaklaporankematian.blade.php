<div class="form-group">
  <p align="center"><b> Laporan Kematian Lansia</b></p>
  <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
    <tr>
      <th>No. </th>
      <th>Nama Lansia </th>
      <th>Jenis Kelamin</th>
      <th>Tanggal Lahir</th>
      <th>Tanggal Meninggal</th>
    </tr>
    @foreach ( $cetakdatakematian as $cetak)
    <tr>
      <td> {{ $loop->iteration }}</td>
      <td> {{ $cetak->kematian->nama_lansia }}</td>
      <td> {{ $cetak->jenis_kelamin }}</td>
      <td> {{ $cetak->tgl_lahir }}</td>
      <td> {{ $cetak->tgl_meninggal }}</td>
      
    @endforeach

</div>