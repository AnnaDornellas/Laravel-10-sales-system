<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Astro v5.9.2">
    <title>Gestão</title>

    @yield('styles')
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" href="{{ asset('icones/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="icon" href="{{ asset('icones/favicon-32x32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('icones/favicon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="manifest" href="{{ asset('icones/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('icones/safari-pinned-tab.svg') }}" color="#712cf9">
    <link rel="icon" href="{{ asset('icones/favicon.ico') }}">
    <meta name="theme-color" content="#712cf9">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: #0000001a;
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em #0000001a, inset 0 .125em .5em #00000026
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8
        }

        .bd-mode-toggle {
            z-index: 1500
        }

        .bd-mode-toggle .bi {
            width: 1em;
            height: 1em
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important
        }
    </style>
</head>

<body>

    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark"> <a
            class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Gestão de Produtos</a>
        <ul class="navbar-nav flex-row d-md-none">
            <li class="nav-item text-nowrap"> <button class="nav-link px-3 text-white" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch"
                    aria-expanded="false" aria-label="Toggle search"> <svg class="bi" aria-hidden="true">
                        <use xlink:href="#search"></use>
                    </svg> </button> </li>
            <li class="nav-item text-nowrap"> <button class="nav-link px-3 text-white" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
                    aria-expanded="false" aria-label="Toggle navigation"> <svg class="bi" aria-hidden="true">
                        <use xlink:href="#list"></use>
                    </svg> </button> </li>
        </ul>
        <div id="navbarSearch" class="navbar-search w-100 collapse"> <input
                class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            @include('components.navegacao')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
                <!-- <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                   
                </div>  -->



            </main>
        </div>
    </div>
    @yield('scripts')

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script src="/js/bootstrap.blunde.min" class="astro-vvvwv3sm"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" class="astro-vvvwv3sm"></script>
    <script src="/js/dashboard.js" class="astro-vvvwv3sm"></script>
    <script src="/js/color-modes.js"></script>

    {{-- BlocUI loading --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.js"></script>

     <script src="/js/projeto.js"></script>
</body>

</html>
