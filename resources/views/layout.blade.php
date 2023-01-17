<!DOCTYPE html>
<html>
<head>
    <title>Cosmic Cafe</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Dashboard.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.min.css') }}" >

    <link href="/images/logo.png" rel="icon">

</head>

<style>
    body{
        background: #181a1e;
    }
    #cart{
        display:block;
    }
    .table thead{
        color:white;
    }
    table,tr,td,th, td h3, .card-body,.nomargin,.detail-col,.img-col,.card-body-2{
        background: #202528;
    }
    .card-body-2, table{
        border-radius: 1.5rem;
    }
    .img-main{
        background: url(/images/Other/menu.jpg) no-repeat fixed right;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 500px;
        width: 100%;
    }
    .detail-col h4{
        font-size:1rem;
    }
    .cart-btn, .cart-btn a{
        background-color: #c6ac86 !important;
        width: 20%;
        padding: 8px 20px ;
        background-color: #211b1600;
        border-radius: 30px;
        border: none !important;
        color: white;
        transition: 0.3s ease-in-out;
    }

    .cart-btn:hover, .cart-btn a:hover{
        color:#c6ac86 !important;
        background-color:white !important;
        outline: #c6ac86 !important;
        text-decoration:none !important;
    }

    .continue-link:hover{
        text-decoration:none !important;
    }
</style>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="width: 100%; background-color:#1b161341;">
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.html"><img id="logo" src="/images/logo.png"> &nbsp;&nbsp;&nbsp;Cosmic Cafe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('menu')}}">Menu</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('aboutUs') }}">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('contactUs') }}">Contact Us</a>
                    </li>
                </ul>
                <ul class="cart navbar-nav ms-auto mb-2 mb-lg-0 mr-4">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('checkout') }}">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="badge badge-warning" id="lblCartCount">{{ count((array) session('cart')) }}</span>
                        </a>
                    </li>
                </ul>
          </div>
      </div>
  </nav>
    
    <div class="img-main"></div>

    <h1 class="primary-color-2 text-center my-5">Your Cart</h1>
<br/>
<div class="card-body-2 container">
    @yield('content')
</div>

@yield('scripts')

<!-- FOOTER -->
<footer class="container my-5">
  <div class="row pb-5">

    <!-- Company -->
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
      <div class="d-flex">
        <img src="images/logo.png" alt="" width="30%">
        <h3 class="pl-3 pt-4 text-white">Cosmic cafe</h3>
      </div>
      <div>
        <p class="secondary-color">Cosmic Cafe strives to create a welcoming environment to both customers and
          and employees. Our goal is to provide quality products and services to our local coffee-drinking community 
          while doing it in a genuine friendly manner.</p>
        <span class="text-white">Copyright 2022 - All rights reserved</span>
      </div>
      <div class="social-icon">
        <a class="facebook" href=""><i
            class="fab fa-facebook-f"></i></a>
        <a class="twitter" href=""><i class="fab fa-twitter"></i></a>
        <a class="instagram" href=""><i class="fab fa-instagram"></i></a>
        <a class="linkedin" href=""><i
            class="fab fa-linkedin"></i></a>
      </div>
    </div>

    <!-- Resources -->
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
      <h3 class="footer-title text-white">Resources</h3>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="menu.html">Menu</a></li>
        <li><a href="aboutUs.html">About Us</a></li>
        <li><a href="contactUs.html">Contact Us</a></li>
      </ul>
    </div>

    <!-- Contact -->
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
      <h3 class="footer-title text-white">Contact</h3>
      <ul class="address">
        <li class="secondary-color"><i class="fa fa-map-marker"></i><a class="pl-3">Near COMSATS Islamabad, Park Road </a></li>
        <li class="secondary-color"><i class="fa fa-phone"></i><a class="pl-3">P: +92 312 5077608</a></li>
        <li class="secondary-color"><i class="fa fa-envelope"></i><a class="pl-3">E: info@cosmic-cafe.com</a></li>
      </ul>
    </div>
  </div>
</footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/CSSRulePlugin.min.js"
    integrity="sha512-oYnRsy+bFXYr+btXcKk2dpzfERnCUc5G4GkJ0AO/XSvomLV7Xc7tZVhTsYIz9QzOAw9qo/6qoA6JTpzaYuHUGg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    gsap.from("#hero-h1" , {duration : 1 , y: 10 , opacity : 0, ease : "power2.inout"}) 
    gsap.from("#hero-h2" , {duration : 1 , y: 10 , opacity : 0, ease : "power2.inout" , delay : 0.5}) 
    gsap.from("#hero-p" , {duration : 1 , y: 20 , opacity : 0, ease : "power2.inout" , delay : 1})
    gsap.to( ".img-area" , {'--show' : "0%",  duration: 1.5 , ease : "power2.inout", delay: 2 } )
    gsap.from(".hero-img" , {duraton:0 , opacity: 0 , ease : "power2.in" , delay: 3.7 })
  </script>
</body>

</html>
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jQuery.slim.min.js"></script>
<script src="https://kit.fontawesome.com/5e8b9def84.js" crossorigin="anonymous"></script>

</body>
</html>