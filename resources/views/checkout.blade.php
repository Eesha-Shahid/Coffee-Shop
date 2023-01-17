<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/checkout.css">
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

    <div class="container" style="margin-top: 9rem;">
        <div class="row align-items-start">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h1 class="primary-color-2">Billing Details</h1>  

                <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group first d-flex flex-column">
                      <label class="primary-color-2" for="username">Full name</label>
                      <input type="text" class="email" placeholder="your username" id="username" name="account_name" onfocusout="usernameVal()">
                      <small class="text-danger mt-2 pl-2" id="usernameError" style="display: none;"></small>
                    </div>
                    <div class="form-group last mb-3 d-flex flex-column">
                      <label class="primary-color-2" for="password">Number</label>
                      <input type="phone" class="email" placeholder="Your Number" id="number" name="account_phone" onfocusout="numberVal()">
                      <small class="text-danger mt-2 pl-2" id="numberError" style="display: none;"></small>
                    </div>
                    <div class="form-group last mb-3 d-flex flex-column">
                        <label class="primary-color-2" for="password">Address</label>
                        <input required type="text" class="email" placeholder="Your Address" name="account_address" id="address" onfocusout="addressVal()">
                        <small class="text-danger mt-2 pl-2" id="addressError" style="display: none;"></small>
                    </div>
                    <div class="form-group">
                        <input id="detail" name="detail" type="hidden">
                    </div>
                    <div class="form-group">
                        <input id="total" name="total" type="hidden">
                    </div>

                    @php $detail = '' @endphp
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)

                            @php $name = $details['name'] @endphp
                            @php $quantity = $details['quantity'] @endphp

                            @php $detail .= $name @endphp
                            @php $detail = $detail.' x ' @endphp
                            @php $detail .= $quantity.' ' @endphp

                        @endforeach
                    @endif 

                    <script>
                        var test2 = "{{"$detail"}}";
                        document.getElementById("detail").value = test2;
                        console.log($detail);
                        console.log($test2);
                    </script>

                    @php $total = 0 @endphp
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                    @endif

                    <script>
                        var test = {{$total}};
                        document.getElementById("total").value = test;
                    </script>
                    <button type="submit" class="email-button mt-5" style="width: 80% ; margin: 0">Place Order</button>

                  </form>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 order">
                <h2 class="primary-color-2 text-center">Your Order</h2>

            <table style="width:100%" class="tbl">
                    <tr class="primary-color-2">
                        <th class="tblProduct"><h4>Product</h4></th>
                        <th class="tblSubtotal"><h4>Subtotal</h4></th>
                    </tr>
                    @php $total = 0 @endphp
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                            <tr class="white-color">
                                <td>{{ $details['name'] }} x {{$details['quantity']}}</td>
                                <td style="text-align: right;">Rs. {{ $details['price'] }}</td>
                            </tr>
                        @endforeach
                        <tr class="primary-color-2">
                            <th class="tblProduct" style="vertical-align: bottom;"><h4>Total</h4></th>
                            <th class="tblSubtotal" style="vertical-align: bottom;"><p style="margin-bottom:8px">Rs. {{ $total }}</p></th>
                        </tr>
                    @endif
            </table>
            <p class="color-info mt-4">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy</p>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
             @endif
        </div>
    </div>
</body>
</html>


<script src="js/bootstrap.min.js"></script>
<script src="js/jQuery.slim.min.js"></script>
<script src="https://kit.fontawesome.com/5e8b9def84.js" crossorigin="anonymous"></script>

