@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-body">
                <div class="text"><strong>Jenis Imunisasi Anak</strong></div>
                <div class="text"><strong>1. Imunisasi hepatitis B</strong></div>
                <div class="text">
                    <p align="justify">Sesuai dengan namanya, imunisasi ini bertujuan untuk mencegah penyakit hepatitis B, yaitu infeksi hati yang dapat
                    menimbulkan komplikasi berbahaya, seperti sirosis dan kanker hati.</p>
                </div>
                <div class="text"><strong>2. Polio</strong></div>
                <div class="text">
                    <p align="justify">Polio adalah penyakit menular akibat infeksi virus yang menyerang sistem saraf di otak dan saraf tulang belakang.
                    Pada kasus yang parah, penyakit ini dapat menyebabkan sesak napas, meningitis, kelumpuhan, bahkan kematian.
                    Imunisasi polio bertujuan untuk mencegah anak tertular infeksi virus polio.</p>
                 </div>
                 <div class="text"><strong>3. Imunisasi BCG</strong></div>
                <div class="text">
                    <p align="justify">Imunisasi BCG bertujuan untuk melindungi tubuh dari kuman penyebab penyakit tuberkulosis (TBC).
                    TBC adalah penyakit menular berbahaya yang menyerang paru-paru dan terkadang bagian lain dari tubuh, sepeti otak, tulang, sendi, serta ginjal.
                    Imunisasi BCG sudah boleh diberikan segera setelah bayi lahir. Imunisasi ini diberikan melalui suntikan ke dalam jaringan kulit pada lengan kanan atas,
                    sehingga kerap menimbulkan benjolan atau bekas luka kecil yang umumnya tidak berbahaya.</p>
                </div>
                <div class="text"><strong>4. Imunisasi campak rubella</strong></div>
                <div class="text">
                    <p align="justify">Imunisasi campak rubella (MR) diberikan sebagai langkah pencegahan terhadap penyakit campak dan rubella yang mudah menular.
                    Kedua penyakit ini disebabkan oleh infeksi virus yang berisiko menyebabkan komplikasi, mulai dari diare berat, infeksi telinga, pneumonia, hingga kerusakan otak.
                </div>
                <div class="text"><strong>5. Imunisasi DPT-HB-HiB</strong></div>
                <div class="text">
                    <p align="justify">Imunisasi DPT-HB-HiB dapat memberikan perlindungan dan pencegahan terhadap 6 penyakit sekaligus, yaitu difteri, pertusis atau batuk rejan, tetanus, hepatitis B,
                    pneumonia, dan meningitis atau radang otak.
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
