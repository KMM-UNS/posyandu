<h5>Detail User: </h5>
<div class="container">
    <div class="row">
        <div class="col">
            {{-- <table class="table table-bordered my-5" align="center" rules="all" border="1px"
                style="width: 95%; margin-top: 1 rem;
    margin-bottom: 1 rem;">
                <tr>
                    <th>Nama</th>
                    <th>Tinggi Badan </th>
                    <th>Berat Badan</th>
                    <th>Tekanan Darah</th>
                    <th>Kegiatan Harian</th>
                    <th>Status Mental</th>
                    <th>Hemoglobin</th>
                    <th>Reduksi Urine</th>
                    <th>Protein Urine</th>
                </tr>
                <tr>
                    <td> {{ $data->lansia->nama_lansia }}</td>
                    <td> {{ $data->tb }}</td>
                    <td> {{ $data->bb }}</td>
                    <td> {{ $data->tekanan_darah }}</td>
                    <td> {{ $data->kegiatan_harian }}</td>
                    <td> {{ $data->status_mental }}</td>
                    <td> {{ $data->hemoglobin }}</td>
                    <td> {{ $data->reduksi_urine }}</td>
                    <td> {{ $data->protein_urine }}</td>
                </tr>
            </table> --}}
            Nama: {{ $data->lansia->nama_lansia }}
            </br>
            Tinggi: {{ $data->tb }}
            </br>
            Berat: {{ $data->bb }}
            </br>
            Tekanan Darah: {{ $data->tekanan_darah }}
        </div>
        <div class="col">
            Kegiatan Harian: {{ $data->kegiatan_harian }}
            <br />
            Status Mental: {{ $data->status_mental }}
            </br>
            Hemoglobin: {{ $data->hemoglobin }}
            </br>
            Reduksi Urine: {{ $data->reduksi_urine }}
            </br>
            Protein Urine: {{ $data->protein_urine }}
            </br>
        </div>
    </div>
</div>


{{-- Nama: {{ $data->lansia->nama_lansia }}
</br>
Tinggi: {{ $data->tb }}
</br>
Berat: {{ $data->bb }}
</br>
Tekanan Darah: {{ $data->tekanan_darah }}

<br />

Kegiatan Harian: {{ $data->kegiatan_harian }}
<br />
Status Mental: {{ $data->status_mental }}
</br>
Hemoglobin: {{ $data->hemoglobin }}
</br>
Reduksi Urine: {{ $data->reduksi_urine }}
</br>
Protein Urine: {{ $data->protein_urine }}
</br> --}}
