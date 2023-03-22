<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    @stack('styles')
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/mdb.min.css')}}">
    <title>Document</title>
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand me-2" href="#">
        <img
          src="{{asset('assets/img/logo-Laravel.png')}}"
          loading="lazy"
          style="margin-top: -1px;"
        />
      </a>

      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">DevStagram</a>
          </li>
        </ul>
        <!-- Left links -->

        {{-- @if(auth()->user())
        <div class="d-flex align-items-center">
          <a href="/registro" type="button" class="btn btn-link px-3 me-2">
            Cerrar sesion
          </a>
        </div>
        @else
        <div class="d-flex align-items-center">
          <a href="/" type="button" class="btn btn-link px-3 me-2">
            Login
          </a>
          <a href="/registro" type="button" class="btn btn-link px-3 me-2">
            Sign up for free
          </a>

        </div>
        @endif --}}

        @auth
        <div class="d-flex align-items-center">
            <a type="button" href="{{ route('post.create') }}" class="btn btn-link px-3 me-2">
                <i class="fas fa-camera-retro"></i> Crear Post
              </a>
          <form action="{{ route('logout') }}" method="post">
            @csrf
          <button type="submit" class="btn btn-link px-3 me-2">
            <i class="far fa-times-circle"></i> Cerrar sesion
          </button>
         </form>
        </div>
        @endauth

        @guest
        <div class="d-flex align-items-center">
          <a href="/" type="button" class="btn btn-link px-3 me-2">
            Login
          </a>
          <a href="/registro" type="button" class="btn btn-link px-3 me-2">
            Sign up for free
          </a>
        </div>
        @endguest


      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
  <div class="container" style="min-height: 400px">
    @yield('contenido')
  </div>
  <footer class="text-center text-white" style="background-color: #f1f1f1;">
    <!-- Grid container -->
    <div class="container pt-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-twitter"></i
        ></a>

        <!-- Google -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-google"></i
        ></a>

        <!-- Instagram -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-linkedin"></i
        ></a>
        <!-- Github -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>

</body>
<script src="{{asset('assets/js/mdb.min.js')}}"></script>

</html>
