<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dashboard.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.min.css') }}" >

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="/images/logo.png" rel="icon">

    <title>Cosmic Cafe</title>

</head>

<style>
    .card, .card-header{
        background:#202528;
        border:none;
    }

    .dataTables_empty{
        color: white;
    }

    table.dataTable td, table.dataTable th {
        color:white;
    }

    .form-control-sm {
        padding: 0.25rem 1.5rem;
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
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
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
                @yield('content')
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/5e8b9def84.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ URL::asset('js/login.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jQuery.slim.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/sb-admin-2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/datatables-demo.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/addProduct.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/dataTables.bootstrap4.min.js') }}"></script>

</html>
