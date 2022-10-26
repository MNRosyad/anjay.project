@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid bg-dark bg-gradient">
    <div class="container text-bg-dark p-4">
        <h1>Post a New Blog</h1> <hr>
        <form action="{{ route('posts.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group mb-3 mt-3">
                <label for="title">Judul</label>
                <input type="text" class="form-control text-bg-dark" id="title" aria-describedby="emailHelp" name="title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="description">Deskripsi</label>
                <textarea class="form-control text-bg-dark" name="description" id="description" rows="10"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <a class="btn btn-primary me-5" href="{{ url('/posts') }}" role="button">Kembali ke Beranda</a>
            <button type="submit" class="btn btn-primary">Post</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</div>
@endsection