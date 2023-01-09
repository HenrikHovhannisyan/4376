<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="stylesheet" href={{asset('css/main.css')}}>

    <title>@yield('title')</title>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md shadow-sm main_navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src={{ asset('img/logo.png') }} alt="Bootstrap" width="31" height="53">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-4">
                        <a class="nav-link text-white" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link text-white" aria-current="page" href="{{ route('pricing') }}">Pricing</a>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="btn btn-outline-light me-3 mb-2"
                                   href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->first_name . " " . Auth::user()->last_name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home') }}">
                                    {{ __('Dashboard') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="">
        @yield('content')
    </main>

    <!-- Start Footer -->
    <footer class="text-center text-white">
        <div class="container p-4">
            <section class="pb-4">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 d-flex justify-content-center align-items-center">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src={{ asset('img/logo.png') }} alt="Bootstrap" width="31" height="53">
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Our Company History</h5>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Company</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="/" class="text-white">Home</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">About</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Pricing</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-start">
                        <h5 class="text-uppercase">Contact us</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="tel:+123 456-7890" class="text-white">
                                    <i class="fa-solid fa-phone"></i>
                                    +123 456-7890
                                </a>
                            </li>
                            <li>
                                <a href="mailto:example@gmail.com" class="text-white">
                                    <i class="fa-solid fa-envelope"></i>
                                    example@gmail.com
                                </a>
                            </li>
                            <li>
                                <p class="text-white">
                                    <i class="fa-solid fa-location-dot"></i>
                                    1250-96, Lisbon, Av. Da Liberdade 190
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <div class="text-start p-3 border-top">
                © Copyright <?= date('Y') ?> Lorem Ipsum
            </div>
        </div>

    </footer>
    <!-- End Footer -->
</div>
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src={{ asset('js/script.js') }}></script>
</body>
</html>
