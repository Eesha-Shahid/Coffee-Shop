<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-------------- Logo --------------->
    <link href="/images/logo.png" rel="icon">

    <title>Cosmic Cafe</title>
</head>

<body>
    <!-- NAVBAR -->
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
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('menu')}}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('aboutUs') }}">About Us</a>
                    </li>
                    <li class="nav-item ">
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

    <!-- GET IN TOUCH  -->
    <div class="img-main"></div>
    <div class="container mt-5">
        <h1 class="primary-color-2 text-center">About Us</h1>
    </div>
    <div class="container-fluid p-0 mt-5">
        <div class="row row-fullScreen">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-0 aboutpic">
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 justify-content-center align-items-center d-flex flex-column p-4" style="min-height: 516px; background-color: #c6ac86;">
                <h1 class="primary-color-1 dancing-font">Cosmic Cafe</h1>
                <p class="primary-color-1">Cosmic Cafe strives to create a welcoming environment to both customers and
                    and employees. Our goal is to provide quality products and services to our local coffee-drinking community while doing it
                    in a genuine friendly manner.</p>
                <p class="primary-color-1">Our baristas invite you and your friends or family for a good cup of coffee to boost your productivity and mental heatlh.</p>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:  150px">
        <div class="row" style="column-gap: 100px;">
            <div class="achieve-card col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 d-flex flex-column justify-content-center align-items-center">
                <h1 class="primary-color-2 mb-3" style="font-size: 82px">12</h1>
                <h4 class="white-color">Years of experience</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 d-flex flex-column justify-content-center align-items-center" style="row-gap: 50px">
                <div class="col-12 stat-cards d-flex justify-content-center align-items-center flex-column">
                    <h1 class="primary-color-2" style="font-size: 55px">3</h1>
                    <p class="primary-color-1">Years of Service</p>
                </div>
                <div class="col-12 stat-cards d-flex justify-content-center align-items-center flex-column">
                    <h1 class="primary-color-2" style="font-size: 55px">80</h1>
                    <p class="primary-color-1">Achievement</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 d-flex flex-column justify-content-center align-items-center" style="row-gap: 50px">
                <div class="col-12 stat-cards d-flex justify-content-center align-items-center flex-column">
                    <h1 class="primary-color-2" style="font-size: 55px">1000+</h1>
                    <p class="primary-color-1">Customers</p>
                </div>
                <div class="col-12 stat-cards d-flex justify-content-center align-items-center flex-column">
                    <h1 class="primary-color-2" style="font-size: 55px">800+</h1>
                    <p class="primary-color-1">Reviews</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 p-4" style=" background-color: #c6ac86; border-radius: 0.6rem;">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 d-flex justify-content-center flex-column">
                <h2 class="primary-color-1">Lets work together to give customers the best experience</h2>
                <p class="text-white">Contact us to get the best deals and experience</p>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center">
                <button class="email-button">Contact</button>
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
</body>

</html>
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jQuery.slim.min.js"></script>
<script src="https://kit.fontawesome.com/5e8b9def84.js" crossorigin="anonymous"></script>