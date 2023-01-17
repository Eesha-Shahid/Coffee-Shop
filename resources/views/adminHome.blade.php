<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('css')
    @include('js')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cosmic Cafe') }}</title>
    <link href="/images/logo.png" rel="icon">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<style>
    .dropdown-item:hover{
        background-color:#c6ac86 !important;
        color:white !important;
    }

    .dropdown-item a:hover{
        background:white !important;
    }

    .auth-text{
        width:100% !important;
    }

    .card{
        background:#202528;
    }

    .detail{
        color: #7d8da1;
    }
</style>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion bg-primary" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon">
                    <img src="{{asset('images/logo-white.png')}}" alt="logo" width="100%" />
                </div>
                <div class="sidebar-brand-text mx-3">Cosmic&nbsp;Cafe</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('admin/home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('users') }}">
                    <i class="fa-solid fa-users"></i>
                    <span>Accounts</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('orders') }}">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <span class="">Orders</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('products') }}">
                    <i class="fa-solid fa-burger"></i>
                    <span>Products</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown no-arrow">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="background-color: #c6ac86;">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
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

                <!-- Begin Page Content -->
                <div class="container-fluid dashboard-color pl-5">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="primary-color-1 font-weight-bold">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row mb-4">
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2 p-3">
                                            <div class="text-lg font-weight-bold mb-1 primary-color-1">
                                                Products
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold detail">
                                                54
                                            </div>
                                        </div>
                                        <div class="col-auto pr-4">
                                            <i class="fa-solid fa-mug-saucer fa-2x" style="color: #c6ac86;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2 p-3">
                                            <div class="text-lg font-weight-bold mb-1 primary-color-1">
                                                Orders
                                            </div>

                                            <div class="h5 mb-0 font-weight-bold color-info detail">
                                                97
                                            </div>
                                        </div>
                                        <div class="col-auto pr-4">
                                            <i class="fa-solid fa-cart-shopping fa-2x" style="color: #c6ac86;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2 p-3">
                                            <div class="text-lg font-weight-bold mb-1 primary-color-1">
                                                Users
                                            </div>

                                            <div class="h5 mb-0 font-weight-bold color-info detail">
                                                97
                                            </div>
                                        </div>
                                        <div class="col-auto pr-4">
                                            <i class="fa-solid fa-users fa-2x" style="color: #c6ac86;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2 p-3">
                                            <div class="text-lg font-weight-bold mb-1 primary-color-1">
                                                Sales
                                            </div>

                                            <div class="h5 mb-0 font-weight-bold color-info detail">
                                                97
                                            </div>
                                        </div>
                                        <div class="col-auto pr-4">
                                            <i class="fa-solid fa-dollar-sign fa-2x" style="color: #c6ac86;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>

