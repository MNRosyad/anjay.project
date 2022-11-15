@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid bg-dark bg-gradient" style="height: 100vh;">
    <div class="container text-bg-dark p-4">
        <h1>Post a New Blog</h1>
        <hr>
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
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
            <div class="form-group mb-3 mt-3">
                <label for="input-file">Upload File</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input text-bg-dark" name="picture" id="input-file">
                        <label class="custom-file-label text-bg-dark" for="input-file">Pilih File</label>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary me-5" href="{{ url('/posts') }}" role="button">Kembali ke Beranda</a>
            <button type="submit" class="btn btn-primary">Post</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</div>
@endsection