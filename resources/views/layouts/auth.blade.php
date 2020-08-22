<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('img/brand/favicon.png') }}" type="image/png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('css/argon.css?v=1.1.0')}}" type="text/css">
</head>

<body class="bg-default">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand text-white" href="{{url('/')}}" style="font-size: 20px">
        SMP Negeri 10 PPU
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="{{url('/')}}" style="font-size: 20px">
                SMP Negeri 10 PPU
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="{{url('/')}}" class="nav-link">
              <span class="nav-link-inner--text">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('profil')}}" class="nav-link">
              <span class="nav-link-inner--text">Profil</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('kontak')}}" class="nav-link">
              <span class="nav-link-inner--text">Kontak Kami</span>
            </a>
          </li>
        </ul>
        <hr class="d-lg-none" />
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            @guest
            <li class="nav-item d-none d-lg-block">
                <a href="{{route('login')}}" class="btn btn-neutral btn-icon">
                    <span class="nav-link-inner--text">Masuk</span>
                </a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a href="" class="btn btn-default btn-icon">
                    <span class="nav-link-inner--text">Daftar Sekarang</span>
                </a>
            </li>
            @else
            <li class="nav-item d-lg-block">
                <a href="#" class="btn btn-neutral btn-icon">
                    <span class="nav-link-inner--text">{{ Auth::user()->name }}</span>
                </a>
            </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    @yield('content')
  </div>
    <!-- Footer -->
    <footer class="py-5" id="footer-main">
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2020 <a href="" class="font-weight-bold ml-1" target="_blank">SMP Negeri 10 PPU</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="{{route('profil')}}" class="nav-link" target="_blank">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('kontak')}}" class="nav-link" target="_blank">Kontak Kami</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">Daftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{ asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{ asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <script src="{{ asset('js/argon.js?v=1.1.0')}}"></script>
  <script src="{{ asset('js/demo.min.js')}}"></script>
</body>

</html>