@extends('layouts.navbar')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container text-bg-dark p-4">
        <h1>{{ $posts -> title }}</h1>
        <small>Tanggal: {{ $posts -> created_at }}</small>
        <hr>
        <p>{{ $posts -> description }}</p>
    </div>
    <div class="container text-bg-dark p-4">
        <a href="/posts/{{$posts->id}}/edit" class="btn btn-primary" role="button">Edit Post</a>
        <form action="{{ route('posts.destroy', $posts->id) }}" method="POST">
            @method('DELETE')
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $posts->id }}"> <br />
            <button type="submit" class="btn btn-danger">Delete Post</button>
        </form>
    </div>
</div>
@endsection