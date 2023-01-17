@extends('products.layout')
     
@section('content')
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow bg-dark">
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 togglebtn">
            <i class="fa fa-bars"></i>
        </button>
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline large">Admin</span>
                    <i class="fas fa-user fa-sm fa-fw mr-2 primary-color-2"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown" style="background-color: #c6ac86;">
                    <a class="dropdown-item text-white" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2"></i>
                        Profile
                    </a>
                    <a class="dropdown-item text-white" href="index.html">
                        <i class="fa-solid fa-window-maximize fa-sm fa-fw mr-2"></i>
                        View Site
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-white" data-toggle="modal" onclick="adminLogout()" style="cursor: pointer"
                        data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="container-fluid dashboard-color pl-5">
        <!-- Page Heading -->
        <div class="d-sm-flex mb-4">
            <div class="back-btn row mr-2">
                <div class="col-xl-1 col-md-2 mb-4">
                    <a href="{{ route('products.index') }}"><i class="fa-solid fa-arrow-left fa-2x text-gray-300"></i></a>
                </div>
            </div>
            <h1 class="primary-color-1 font-weight-bold mb-4">Update Product</h1>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

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

        <div class="card col-12 border-left-primary">
            <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data"> 
                @csrf
                @method('PUT')

                <!-- Image -->
                <div class="form-group first d-flex flex-column pt-5 pl-4">
                    <label class="primary-color-2" for="username">Upload picture</label>
                    <input name="image" type="file" class="email" id="picture">
                    <img src="/images/{{ $product->image }}" width="300px">
                </div>

                <!-- Name -->
                <div class="form-group last mb-3 d-flex flex-column pl-4">
                    <label class="primary-color-2" for="password">Product Name</label>
                    <input name="name" value="{{ $product->name }}" type="text" class="email" id="pdtName" onfocusout="pdtNameVal()">
                </div>

                <!-- Category -->
                <div class="form-group last mb-3 d-flex flex-column pl-4">
                    <label class="primary-color-2" for="password">Product Category</label>
                    <select class="email" name="category" id="category" onchange="pdtCatVal()">
                        <!-- <option value="" selected>Select a category</option> -->
                        <option value="Americano" {{($product->category === 'Americano') ? 'Selected' : ''}}>Americano</option>
                        <option value="Cappuccino" {{($product->category === 'Cappuccino') ? 'Selected' : ''}}>Cappuccino</option>
                        <option value="Frappuccino" {{($product->category === 'Frappuccino') ? 'Selected' : ''}}>Frappuccino</option>
                        <option value="Espresso" {{($product->category === 'Espresso') ? 'Selected' : ''}}>Espresso</option>
                        <option value="Latte" {{($product->category === 'Latte') ? 'Selected' : ''}}>Latte</option>
                        <option value="Macchiato" {{($product->category === 'Macchiato') ? 'Selected' : ''}}>Macchiato</option>
                        <option value="Mocha" {{($product->category === 'Mocha') ? 'Selected' : ''}}>Mocha</option>
                    </select>
                </div>

                <!-- Price -->
                <div class="form-group last mb-3 d-flex flex-column pl-4">
                    <label class="primary-color-2" for="password">Product Price</label>
                    <input name="price" value="{{ $product->price }}" type="text" class="email" id="pdtPrice" onfocusout="priceVal()">
                </div>
                <button type="submit" class="email-button mt-3 mb-5">Update Product</button>
            </form>
        </div>
    </div>
@endsection