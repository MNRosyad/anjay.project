@extends('layouts.app')

@section('content')
<div class="container mb-4 mt-4">
    <div class="d-flex justify-content-center">
        <div class="bg-dark col-md-8 py-5 px-5 shadow rounded">
            <div class="container mt-5 text-bg-dark">
                <h1 class="mb-5">Education &nbsp; | &nbsp; Perjalanan ilmu</h1>
                <div class="d-flex row">
                    <div class="d-flex column mb-3">
                        <img src="{{ asset('images/sman6jogja.png') }}" width="150" height="150">
                        <div class="ms-3">
                            <h4>Sekolah Menengah Akhir</h4> <hr>
                            <p>SMA Negeri 6 Yogyakarta</p>
                            <p>Lulus pada tahun 2021</p>
                        </div>
                    </div>
                    <div class="d-flex column mb-3">
                        <img src="{{ asset('images/LambangUGM.png') }}" width="150" height="150">
                        <div class="ms-3">
                            <h4>Perguruan Tinggi</h4> <hr>
                            <p>Universitas Gadjah Mada, Sekolah Vokasi <br> Teknologi Rekayasa Perangkat Lunak</p>
                            <p>Sedang menjalani</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection