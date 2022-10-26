@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid bg-dark bg-gradient">
    <div class="container text-bg-dark p-4">
        <h1>{{ $posts -> title }}</h1>
        <small>Tanggal: {{ $posts -> created_at }}</small>
        <hr>
        <p>{{ $posts -> description }}</p>
    </div>
    <div class="container text-bg-dark p-4">
        @auth
        <a href="/posts/{{$posts->id}}/edit" class="btn btn-primary" role="button">Edit Post</a>
        <form action="{{ route('posts.destroy', $posts->id) }}" method="POST">
            @method('DELETE')
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $posts->id }}"> <br />
            <button type="submit" class="btn btn-danger" onclick="return confirm('Post akan dihapus')">Delete Post</button>
        </form>
        @endauth
        @guest
        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
        <a class="btn btn-info" href="{{ route('register') }}">Register</a>
        @endguest
    </div>
</div>
@endsection