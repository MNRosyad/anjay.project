@extends('layouts.navbar')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container text-bg-dark p-4">
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
        @elseif (\Session::has('error'))
        <div class="alert alert-danger">
            <p>{{ \Session::get('error') }}</p>
        </div>
        @endif
        <h1>Blog.dev</h1>
        <a href="{{ route('posts.create') }}">Create a New Post</a>
        <hr>
        @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="well m-3">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Tanggal {{$post->created_at}}</small>
        </div>
        @endforeach
        @else
        <h3>Tidak ada Data.</h3>
        @endif
    </div>
</div>
@endsection