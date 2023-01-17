
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-0" style=" height: 110vh; overflow: hidden;">
        <img src="{{asset('images/hero-img.jpg')}}" alt="" height="100%" style="position:absolute; z-index: 2;">
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 px-5 pb-5">
            <a href="javascript: history.go(-1)"><i class="fa-solid fa-arrow-left backBtn"></i></a>
            <div class="align-items-center justify-content-center d-flex flex-column">
                <h3 class="text-white">{{ __('Register') }} to <strong class="primary-color-2">Cosmic Cafe</strong></h3>
                <p class="mb-4 color-info">We know the coffee and your taste better than anyone!</p>
                <form method="POST" action="{{ route('register') }}" id="form">
                    @csrf

                    <div class="form-group first d-flex flex-column">
                        <label class="primary-color-2" for="username">{{ __('Name') }}</label>
                        <input type="text" class="auth-text email form-field @error('name') is-invalid @enderror" placeholder="Your Name" id="name"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group last mb-3 d-flex flex-column">
                        <label class="primary-color-2" for="password">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="email auth-text form-field @error('email') is-invalid @enderror" placeholder="Your Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>
                    <div class="form-group last mb-3 d-flex flex-column">
                        <label class="primary-color-2" for="password">{{ __('Password') }}</label>
                        <input required type="password" class="email auth-text form-field @error('password') is-invalid @enderror" placeholder="Your Password" id="password" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group last mb-4 d-flex flex-column">
                        <label class="primary-color-2" for="password">{{ __('Confirm Password') }}</label>
                        <input required type="password" class="email auth-text form-field" placeholder="Your Password" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <button class="email-button">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

