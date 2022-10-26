@extends('layouts.app')

@section('content')
<div class="container  mb-4 mt-4">
    <div class="d-flex justify-content-center">
        <div class="bg-dark col-md-8 py-5 px-5 shadow rounded">
            <div class="container mt-5 text-bg-dark">
                <h1 class="mb-5">Projects &nbsp; | &nbsp; Sedang aktif</h1>
                <div class="d-flex column">
                    <img src="{{ asset('images/Laravel.png') }}" width="200" height="200">
                    <div class="mx-4 my-4">
                        <h4>Projekt Web - Kost Wisma Rini</h4><hr>
                        <p>
                            Landing page responsive berupa kumpulan fasilitas kost dan ruko dengan menggunakan framework Laravel di dalamnya
                        </p>
                        <p>Berpartisipasi sebagai front-end dan UI/UX</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection