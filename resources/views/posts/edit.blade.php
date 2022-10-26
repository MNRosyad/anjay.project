@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid bg-dark bg-gradient">
    <div class="container text-bg-dark p-4">
        <h1>Post a New Blog</h1>
        <hr>
        <form action="{{ route('posts.update', $posts->id) }}" method="POST">
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
            <input type="hidden" name="id" value="{{ $posts->id }}">
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>
@endsection