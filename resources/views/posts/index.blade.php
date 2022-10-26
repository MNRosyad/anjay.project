@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid bg-dark bg-gradient">
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
        <div class="container text-bg-dark py-2">
            @auth
            <p>Selamat Datang, <b>{{ Auth::user()->name }}!</b></p>
            <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
            @endauth
            @guest
            <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
            <a class="btn btn-info" href="{{ route('register') }}">Register</a>
            @endguest
        </div>
        @auth
        <a href="{{ route('posts.create') }}">Create a New Post</a>
        @endauth
        <hr>
        @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="well m-3">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Tanggal {{$post->created_at}}</small>
        </div>
        @endforeach

        Halaman : {{ $posts->currentPage() }} <br />
        Jumlah Data : {{ $posts->total() }} <br />
        Data Per Halaman : {{ $posts->perPage() }} <br />
        <div class="d-flex">
            {{ $posts->links() }}
        </div>

        @else
        <h3>Tidak ada Data.</h3>
        @endif
    </div>
</div>
@endsection