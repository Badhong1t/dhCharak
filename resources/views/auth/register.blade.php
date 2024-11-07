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
@section('title', 'Register')

@section('content')
<main>
    <section class="common-container log-in-section">
        <div class="login-container">
            <div class="tm-login-logo">
                <img src="{{ asset('frontend') }}/assets/images/logo-yellow.svg"
                    alt="Bulksail Logo">
            </div>
            <div class="login-heading-para-wrapper">
                <h1 class="common-heading">Get Started with
                    Bulksail!</h1>
                <p class="common-para">
                    Let’s get you set up. Fill out the form below to
                    create your account and unlock the full Bulksail
                    experience. Once registered, you’ll be able to track
                    orders, manage your preferences, and explore a wide
                    range of products from top distributors. Were
                    excited to have you on board!
                </p>
            </div>

            <form class="login-form" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="login-form-common-text">
                    <h2 class="common-heading-2">Create Account</h2>
                    <p class="common-para">Already have an account? <a
                            class="common-para" href="{{ route('login') }}">Login</a></p>
                </div>

                <div class="tm-form-main-input-wrapper">
                    <div class="account-type-island-wrapper">
                        <!-- Account Type -->
                        <div class="tm-input-group account-type-div">
                            <label>Account Type<span>*</span></label>
                            <div class="account-type-options">
                              <label class="tm-option-label checkbox style-c tm-style-c-checkbox" id="terms">
                                <input type="radio" name="accountType" value="customer" checked/>
                                <div class="checkbox__checkmark rounded-circle"></div> I am a
                                customer<span>*</span>
                              </label>
                              <label class="tm-option-label checkbox style-c tm-style-c-checkbox" id="terms">
                                <input type="radio" name="accountType" value="business"/>
                                <div class="checkbox__checkmark rounded-circle"></div> Business
                                account
                              </label>
                            </div>
                            @error('role')
                            <div class="invalid-feedback d-block">{{$message}}</div>
                            @enderror
                        </div>

                        <!-- Island selection -->
                        <div class="tm-input-group island-div ">
                            <label for="island">Select your
                                Island<span>*</span></label>
                            <select id="island"
                                class="tm-select-island">
                                <option value="ST Thoma">ST Thomas</option>
                                <option value="Tortola 1">Tortola 1</option>
                                <option value="St. Maarten 2">St. Maarten 2</option>
                                <option value="St. Croix 2">St. Croix 2</option>
                            </select>
                        </div>
                    </div>

                    <!-- Business Name (conditionally displayed for business accounts) -->
                    <div
                        class="tm-input-group business-fields tm-hidden">
                        <label for="businessName">Business
                            Name<span>*</span></label>
                        <input type="text" id="businessName"
                            placeholder="Business Name" name="business_name" class="{{$errors->has('business_name') ? 'form-control is-invalid' : ''}}">
                            @error('business_name')
                            <div class="invalid-feedback d-block">{{$message}}</div>
                            @enderror
                    </div>

                    <!-- First and Last Name -->
                    <div class="tm-input-group">
                        <label for="firstName">First
                            Name<span>*</span></label>
                        <input type="text" id="firstName"
                            placeholder="First Name" name="first_name" class="{{$errors->has('first_name') ? 'form-control is-invalid' : ''}}">
                        @error('first_name')
                        <div class="invalid-feedback d-block">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="tm-input-group">
                        <label for="lastName">Last
                            Name<span>*</span></label>
                        <input type="text" id="lastName"
                            placeholder="Last Name" name="last_name">
                    </div>

                    <!-- User Name -->
                    <div class="tm-input-group">
                        <label for="username">User
                            Name<span>*</span></label>
                        <input type="text" id="username"
                            placeholder="Username" name="username" class="{{$errors->has('username') ? 'form-control is-invalid' : ''}}">
                            @error('username')
                            <div class="invalid-feedback d-block">{{$message}}</div>
                            @enderror
                    </div>

                    <!-- Email -->
                    <div class="tm-input-group">
                        <label for="email">Email<span>*</span></label>
                        <input type="email" id="email"
                            placeholder="Enter your email" name="email" class="{{$errors->has('email') ? 'form-control is-invalid' : ''}}">
                        @error('email')
                        <div class="invalid-feedback d-block">{{$message}}</div>
                        @enderror
                    </div>

                    <!-- Password and Confirm Password -->
                    <div class="tm-input-group">
                        <label for="password">Your
                            Password<span>*</span></label>
                        <input type="password" id="password"
                            placeholder="**********" name="password" class="{{$errors->has('password') ? 'form-control is-invalid' : ''}}">
                            @error('password')
                            <div class="invalid-feedback d-block">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="tm-input-group">
                        <label for="confirmPassword">Confirm
                            Password<span>*</span></label>
                        <input type="password" id="confirmPassword"
                            placeholder="**********" name="password_confirmation" class="{{$errors->has('password_confirmation') ? 'form-control is-invalid' : ''}}">
                        @error('password_confirmation')
                        <div class="invalid-feedback d-block">{{$message}}</div>
                        @enderror
                    </div>

                    <!-- Phone Number -->
                    <div class="tm-input-group">
                        <label for="phone">Phone
                            Number<span>*</span></label>
                        <input type="text" id="phone"
                            placeholder="(XXX) XXX-XXXX" name="phone" class="{{$errors->has('phone') ? 'form-control is-invalid' : ''}}">
                        @error('phone')
                        <div class="invalid-feedback d-block">{{$message}}</div>
                        @enderror
                    </div>

                    <!-- Address -->
                    <div class="tm-input-group">
                        <label
                            for="address">Address<span>*</span></label>
                        <input type="text" id="address"
                            placeholder="Enter your address" name="address" class="{{$errors->has('address') ? 'form-control is-invalid' : ''}}">
                        @error('address')
                        <div class="invalid-feedback d-block">{{$message}}</div>
                        @enderror

                    </div>

                    <!-- Upload Business License (conditionally displayed for business accounts) -->
                    <div class="row business-fields tm-hidden">
                        <div class="form-group col tm-input-group">
                            <label class="img-video-label"
                                for="profile">Upload Your Business/Trade
                                License* </label>
                                <div class="file-upload-space" id="upload-area">
                                  <span id="upload-icon">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                          <path d="M19.5 15V17C19.5 18.1046 18.6046 19 17.5 19H7.5C6.39543 19 5.5 18.1046 5.5 17V15M12.5 15L12.5 5M12.5 5L14.5 7M12.5 5L10.5 7"
                                              stroke="#344051" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                  </span>
                                  <p id="upload-text">Upload file</p>
                                  <input type="file" name="trade_license" class="file-input" id="profile" accept=".pdf,.doc,.docx,.txt,.rtf,.odt,.xls,.xlsx,.ppt,.pptx" style="display: none;">
                                </div>
                                @error('trade_license')
                                <div class="invalid-feedback d-block">{{$message}}</div>
                                @enderror
                            <!-- Area to show file preview -->
                        </div>
                    </div>
                </div>
                <!-- Terms & Submit Button -->
                <div class="options">
                  <label class="checkbox style-c tm-style-c-checkbox" id="terms">
                    <input type="checkbox" name="terms" id="terms" @if(old('terms')) checked @endif />
                    <div class="checkbox__checkmark"></div> I
                    agree
                    to Terms & Policy<span>*</span>
                    <br>
                    @error('terms')
                    <div class="invalid-feedback d-block">{{$message}}</div>
                    @enderror
                  </label>

                </div>
                <button type="submit" class="common-btn-2 mt-2 w-100"
                    id="submitBtn">Submit and Register</button>
            </form>
        </div>
    </section>

</main>
@endsection
@push('scripts')
      <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/tarek.js') }}"></script>
@endpush
