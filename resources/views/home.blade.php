<!DOCTYPE html>
<html lang="en" style="height: 100%">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-------------- Logo --------------->
  <link href="/images/logo.png" rel="icon">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>Cosmic Cafe</title>
</head>

<body style="height: 100%;">
  <!-- PRELOADER -->
  <div id="preloader">
    <svg class="svg-tea" width="37" height="48" viewbox="0 0 37 48" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z" stroke="var(--secondary)" stroke-width="2"></path>
      <path d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34" stroke="var(--secondary)" stroke-width="2"></path>
      <path id="teabag" fill="var(--secondary)" fill-rule="evenodd" clip-rule="evenodd" d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"></path>
      <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="var(--secondary)"></path>
      <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>
  </div>
  
  <!-- Main Page -->
  <div id="home"> 
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="width: 100%; background-color:#1b161341;">
        <div class="container-fluid ">
            <a class="navbar-brand" href="{{ url('home') }}"><img id="logo" src="/images/logo.png"> &nbsp;&nbsp;&nbsp;Cosmic Cafe</a>
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
                        <a class="nav-link" href="{{ url('cart') }}">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="badge badge-warning" id="lblCartCount">{{ count((array) session('cart')) }}</span>
                        </a>
                    </li>
                </ul>
          </div>
      </div>
  </nav>

  <!-- Hero -->
  <div class="hero p-5 text-center bg-image rounded-3">
    <div class="hero-text d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <h1 class="mb-3 dancing-font">Cosmic Cafe</h1>
        <h4 class="mb-3">Exclusive Coffee Blends</h4>
        <a class="btn btn-outline-light btn-lg" href="menu.html" role="button">Shop Now</a>
      </div>
    </div>
  </div>
  <!-- Hero -->

    <!-- Introduction -->
    <div class="intro container mt-5">
      <h1 class="text-center primary-color-2 dancing-font">Introduction</h1>
      <p class="text-center secondary-color-1 px-lg-5">Cosmic Cafe strives to create a welcoming environment to both customers and
         and employees. Our goal is to provide quality products and services to our local coffee-drinking community while doing it
         in a genuine friendly manner.</p>

      <div class="row justify-content-center mt-5">
        <div class="col-8 col-sm-6 col-md-4 col-lg-4 col-xl-4 info-1 ">
          <img src="images/Other/coffee-shop.jpeg" alt="" width="100%">
          <div class="res-info">
            <h5><a class="primary-color-1" href="{{ url('contactUs') }}">Coffee Shop</a></h5>
          </div>
        </div>
        <div class="col-8 col-sm-6 col-md-4 col-lg-4 col-xl-4 info-2">
          <img src="images/Other/menu2.jpeg" alt="" width="100%">
          <div class="res-info">
            <h5><a class="primary-color-1"href="{{ url('menu') }}">Menu</a></h5>
          </div>
        </div>
        <div class="col-8 col-sm-6 col-md-4 col-lg-4 col-xl-4 info-3">
          <img src="images/Other/about.jpeg" alt="" width="100%">
          <div class="res-info">
            <h5><a class="primary-color-1" href="{{ url('aboutUs') }}">About Us</a></h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Our partners -->
    <div class="partners container-fluid my-5">
      <h1 class="text-center primary-color-2 dancing-font pt-5">Our Partners</h1>
      <div class="container">
        <div class="row justify-content-between brands pb-5">
          <img src="images/Other/starbucks.png" alt="cocacola logo">
          <img src="images/Other/costa.png" alt="dipitt logo">
          <img src="images/Other/second-cup.png" alt="k&ns logo">
          <img src="images/Other/dunkin-donuts.png" alt="foodpanda logo">
        </div>
      </div>
    </div>

    <!-- Restaurant -->
    <div class="res container px-5 mb-5" style="margin-top: 80px;">
      <div class="row" style="row-gap: 0;">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 res-text text-center justify-content-center">
          <h2 class="primary-color-2 dancing-font">Tradition</h2>
          <h4 class="primary-color-1">Our Mission</h4>
          <p class="color-info">Mission: Our mission is to provide quality products and services to our local coffee-drinking 
            community while doing it in a genuine friendly manner.</p>
        </div>

        <!-- Image 1 -->
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mission-img my-3"></div>

        <!-- Image 2 -->
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mission-img2 my-3"></div>
        
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 res-text text-center justify-content-center">
          <h2 class="primary-color-2 dancing-font">Our Happy Place</h2>
          <h4 class="primary-color-1">Cosmic Cafe</h4>
          <p class="color-info">Our baristas invite you and your friends or family for a good cup of coffee to boost your productivity and mental heatlh.</p>
        </div>
      </div>
    </div>

    <!-- Email section -->
    <div class="container-fluid news mt-1" style="align-items: center; display: flex; padding-bottom: 28px;">
      <div class="container center">
        <div class="row mt-5">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h2 class="text-white text-center" style="text-transform:uppercase ;">Sign Up for daily updates</h2>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="row  mb-5">
              <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 d-flex justify-content-center align-items-center">
                <input type="email" class="email" placeholder="Enter Email ">
              </div>
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center">
                <button class="email-button">Send</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
            <li><a href="{{ url('home') }}">Home</a></li>
            <li><a href="{{ url('menu') }}">Menu</a></li>
            <li><a href="{{ url('aboutUs') }}">About Us</a></li>
            <li><a href="{{ url('contactUs') }}">Contact Us</a></li>
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
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/CSSRulePlugin.min.js" integrity="sha512-oYnRsy+bFXYr+btXcKk2dpzfERnCUc5G4GkJ0AO/XSvomLV7Xc7tZVhTsYIz9QzOAw9qo/6qoA6JTpzaYuHUGg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>

</body>
<script>
  gsap.registerPlugin(ScrollTrigger)

  const isLoader = sessionStorage.getItem("doNotShow")
  if(isLoader){

    gsap.from("#hero-h1" , {duration : 1 , y: 10 , opacity : 0, ease : "power2.inout"}) 
    gsap.from("#hero-h2" , {duration : 1 , y: 10 , opacity : 0, ease : "power2.inout" , delay : 0.5}) 
    gsap.from("#hero-p" , {duration : 1 , y: 20 , opacity : 0, ease : "power2.inout" , delay : 1})
    gsap.from("#hero-btn" ,{duration : 1 , opacity : 0 , ease: "power2.inout" , delay : 1.5})
    gsap.to( ".img-area" , {'--show' : "0%",  duration: 1.5 , ease : "power2.inout", delay: 2 } )
    gsap.from(".hero-img" , {duraton:0 , opacity: 0 , ease : "power2.in" , delay: 3.7 })
  }else{
    gsap.from("#hero-h1" , {duration : 1 , y: 10 , opacity : 0, ease : "power2.inout" ,delay : 8.5} ) 
    gsap.from("#hero-h2" , {duration : 1 , y: 10 , opacity : 0, ease : "power2.inout" , delay : 9}) 
    gsap.from("#hero-p" , {duration : 1 , y: 20 , opacity : 0, ease : "power2.inout" , delay : 9.5})
    gsap.from("#hero-btn" ,{duration : 1 , opacity : 0 , ease: "power2.inout" , delay : 10})
    gsap.to( ".img-area" , {'--show' : "0%", duration: 1.5 , ease : "power2.inout", delay: 10.5 } )
    gsap.from(".hero-img" , {duraton:0 , opacity: 0 , ease : "power2.in" , delay: 12.2 })   
  }

  gsap.from(".info-1" ,{ScrollTrigger : ".info-1",  duration : 3 , x : -20 , opacity : 0})
  
  
</script>
</html>
<script src="js/main.js"></script>
<script src="js/preloader.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jQuery.slim.min.js"></script>
<script src="https://kit.fontawesome.com/5e8b9def84.js" crossorigin="anonymous"></script>