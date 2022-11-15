@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid bg-dark bg-gradient" style="height: 100vh;">
    <div class="container text-bg-dark p-4">
        <h1>Post a New Blog</h1>
        <hr>
        <form action="{{ route('posts.update', $posts->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            {{ csrf_field() }}
            <div class="form-group mb-3 mt-3">
                <label for="title">Judul</label>
                <input type="text" class="form-control text-bg-dark" id="title" aria-describedby="emailHelp" name="title" value="{{ $posts->title }}">
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="description">Deskripsi</label>
                <textarea class="form-control text-bg-dark" name="description" id="description" rows="10">{{ $posts->description }}</textarea>
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="input-file">Upload File</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input value="{{ $posts->picture }}" type="file" class="custom-file-input text-bg-dark" name="picture" id="input-file">
                        <label class="custom-file-label text-bg-dark" for="input-file">Pilih File</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="id" value="{{ $posts->id }}">
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>
@endsection