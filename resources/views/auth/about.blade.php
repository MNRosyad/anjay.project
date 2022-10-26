@extends('layouts.app')

@section('content')
<div class="container mb-4 mt-4">
    <div class="d-flex justify-content-center">
        <div class="bg-dark col-md-8 py-5 px-5 shadow rounded">
            <div class="container mt-5 text-bg-dark">
                <h1 class="mb-5">About &nbsp; | &nbsp; Dibalik Website ini</h1>
                <div class="d-flex column">
                    <img src="{{ asset('images/FotoAlmamater_crop.jpg') }}" width="200" height="200" style="border-radius: 50%;">
                    <div class="mx-4 my-4">
                        <h4>Muhammad Naufal Rosyad</h4> <hr>
                        <p>Seorang Mahasiswa berasal dari prodi Teknologi Rekayasa Perangkat Lunak, Universitas Gadjah Mada</p>
                        <p>Memiliki niat bakat dalam UI/UX dan Front-End</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection