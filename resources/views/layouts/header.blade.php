<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md bg-secondary bg-gradient sticky-md-top shadow-sm ">
  <div class="container">
    <a href="{{ url('/') }}" class="navbar-brand link-light">
      <img src="{{ asset('images/boost.gif') }}" alt="Projekt Web" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      <!-- Right navbar links -->
      <ul class="navbar-nav me-auto">
        <!-- <li class="nav-item">
          <a class="nav-link link-light" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li> -->
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ url('/') }}" class="nav-link link-light">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a class="nav-link link-light" href="{{ url('/posts') }}">
            Blog Post
          </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ url('/send-email') }}" class="nav-link link-light">Send Email</a>
        </li>
      </ul>

      <!-- Left navbar links -->
      <ul class="navbar-nav ms-auto">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link link-light" href="{{ url('/about') }}">
              About
            </a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link link-light" href="{{ url('/edukasi') }}">
              Education
            </a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link link-light" href="{{ url('/projek') }}">
              Project
            </a>
          </li>
          <!-- Authentication Links -->
          @guest
          @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link link-light" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @endif

          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link link-light" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link link-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
          <li>
            <form class="form-inline ml-0 ml-md-3">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </li>
          @endguest
        </ul>
    </div>
  </div>
</nav>
<!-- /.navbar -->