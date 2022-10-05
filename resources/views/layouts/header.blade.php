<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
  <div class="container">
    <a href="{{ url('/') }}" class="navbar-brand">
      <img src="{{ asset('images/boost.gif') }}" alt="Projekt Web" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name') }} - {{ config('app.subtitle') }}</span>
    </a>

    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ url('/')}}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a class="nav-link" href="{{ url('/about') }}">
            About
          </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a class="nav-link" href="{{ url('/education') }}">
            Education
          </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a class="nav-link" href="{{ url('/project') }}">
            Project
          </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a class="nav-link" href="{{ url('/posts') }}">
            Blog
          </a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
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
    </div>


  </div>
</nav>
<!-- /.navbar -->
