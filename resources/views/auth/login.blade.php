@extends('frontend.main')
    @push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/aos.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/owl.theme.default.min.cs') }}s" />
    <link rel="stylesheet" type="text/css" href="{{ ('frotend/assets/css/plugins/magnific-popup.min.css') }}" />

    <!-- All custom CSS Links -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/helper.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/tarek.css') }}" />
    @endpush
@section('title', 'Login')

@section('content')
<main>
    <section class="common-container log-in-section">
        <div class="login-container">
            <div class="tm-login-logo">
              <img src="{{ asset('frontend') }}/assets/images/logo-yellow.svg" alt="Bulksail Logo">
            </div>
            <div class="login-heading-para-wrapper">
                <h1 class="common-heading">Welcome to Bulksail!</h1>
            <p class="common-para">
              Log in to easily manage your account, track your orders, and explore a wide range of products from leading distributors.
              Whether you're a business or consumer, we're here to make sourcing and logistics hassle-free.
            </p>
            </div>

            <form class="login-form" action="{{ route('login') }}" method="POST">
                @csrf
              <div class="login-form-common-text">
                <h2 class="common-heading-2">Login</h2>
              <p class="common-para">Don't have an account? <a class="common-para" href="{{ route('register') }}">Create here</a></p>
              </div>

              <div class="tm-form-main-input-wrapper">
                <div class="tm-input-group">
                    <label for="email">User name or Email<span>*</span></label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" class="{{$errors->has('email') ? 'form-control is-invalid' : ''}}">
                    @error('email')
                    <div class="invalid-feedback d-block">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="tm-input-group">
                    <label for="password">Your password<span>*</span></label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" class="{{$errors->has('password') ? 'form-control is-invalid' : ''}}">
                    @error('password')
                    <div class="invalid-feedback d-block">{{$message}}</div>
                    @enderror
                  </div>
              </div>

              <div class="options">
                <label class="checkbox style-c tm-style-c-checkbox" id="remember-me">
                  <input type="checkbox" name="remember" id="remember" />
                  <div class="checkbox__checkmark"></div> Remember me
                </label>
                @error('remember')
                   <div class="invalid-feedback d-block">{{$message}}</div>
                @enderror
                <a href="#" class="forgot-password">Forgot password?</a>
              </div>
              <button type="submit" class="common-btn-2 w-100">Log in</button>
            </form>
          </div>
    </section>

</main>
@endsection

@push('scripts')
      <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/tarek.js') }}"></script>
@endpush

