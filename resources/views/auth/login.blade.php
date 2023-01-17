@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-0" style=" height: 100vh; overflow: hidden;">
            <img src="{{asset('images/hero-img.jpg')}}" alt="" height="100%" style="position:absolute; z-index: 2;">
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pb-5 px-5">
            <a href="javascript: history.go(-1)"><i class="fa-solid fa-arrow-left backBtn"></i></a>
            <div class="align-items-center justify-content-center d-flex flex-column">
                <h3 class="text-white">{{ __('Login') }} to <strong class="primary-color-2">Cosmic Cafe</strong></h3>
                <p class="mb-4 color-info">We know the coffee and your taste better than anyone!</p>

                <form method="POST" action="{{ route('login') }}" id="login">
                    @csrf
                    <div class="form-group first d-flex flex-column">
                        <label class="primary-color-2" for="username">{{ __('Email Address') }}</label>
                        <input type="email" name="email" class="email auth-text form-field @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group last mb-3 d-flex flex-column">
                        <label class="primary-color-2" for="password">{{ __('Password') }}</label>
                        <input type="password" class="email auth-text form-field @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password">                        
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="d-flex mb-3 align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label text-white" for="remember">{{ __('Remember Me') }}</label>
                        </div>     
                    </div>

                    <button type="submit" class="email-button">{{ __('Login') }}</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection




