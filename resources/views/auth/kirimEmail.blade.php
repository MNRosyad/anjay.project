@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid bg-dark bg-gradient">
    <div class="container text-bg-dark p-4">
        <h1>Kirim Email</h1> <hr>
        <!-- Send Email -->
        @if (session('status'))
        <div class="alert alert-primary" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('post-email') }}" method="POST">
            @csrf
            <div class="form-group mb-3 mt-3">
                <label for="name">Nama</label>
                <input type="text" class="form-control text-bg-dark" name="name" id="name" placeholder="Nama">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="email">Email Tujuan</label>
                <input type="email" class="form-control text-bg-dark" name="email" id="email" placeholder="Email Tujuan">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="name">Isi Konten</label>
                <textarea name="body" class="form-control text-bg-dark" rows="10" id="content"></textarea>
                @error('body')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Kirim Email</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</div>
@endsection