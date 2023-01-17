<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('css')
    @include('js')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cosmic Cafe</title>
</head>
<style>
    .home-btn a{
        background:none;
        color:#c6ac86;
    }

    .home-btn a:hover{
        background:none;
        border:none;
    }

    .action-btn{
        background-color:#c6ac86 !important;
        color: white !important;
        text-align: center;
        border: none;
    }

    .action-btn:hover{
        background-color:white !important;
        color:#c6ac86 !important;
        text-align:center;
        border: 2px solid #c6ac86;
    }

</style>

<body class="antialiased">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-0" style=" height: 100vh; overflow: hidden;">
                <img src="images/hero-img.jpg" alt="" height="100%">
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-5">
                @if (Route::has('login'))
                    <div class="align-items-center justify-content-center d-flex flex-column">
                        <h3 class="text-white">Welcome to <strong class="home-btn primary-color-2">Cosmic Cafe</strong></h3>
                        <p class="mb-4 color-info">We know the coffee and your taste better than anyone!</p>
                        <a href="{{ route('login') }}" class="action-btn email-button mb-2">Log In</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="action-btn email-button">Sign Up</a>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>

    
