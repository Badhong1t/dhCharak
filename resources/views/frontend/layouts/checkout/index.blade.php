@extends('frontend.main')

@section('title', 'Delivery Schedule')

@push('styles')
    <!-- ==== All Css Links ==== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/aos.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/owl.theme.default.min.css') }}" />
    <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('frontend/assets/css/plugins/magnific-popup.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/nice-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/fontawesome.min.css') }}">

    <!-- All custom CSS Links -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/helper.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/common.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/tarek.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}" />
@endpush

@section('content')
<main>
    <section class=" checkout-section common-container log-in-section">
        <div class="tm-heading-back-btn d-flex align-items-center justify-content-between">
            <h1 class="common-heading">Checkout</h1>
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none">
                <path d="M8 15L1 8M1 8L8 1M1 8H19" stroke="#3F3F46" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg></a>
        </div>
        <div class="checkout-section-content-wrapper">

            <!-- billing address area -->
            <div class="checkout-address">
                <div class="login-heading-para-wrapper-2">
                    <h2 class="common-heading-2">
                        Billing Address
                    </h2>
                </div>

                <form class="login-form tm-checkout-form">
                    <!-- Full Name -->
                    <div class="tm-input-group">
                        <label for="fullName">Full Name<span>*</span></label>
                        <input type="text" id="fullName" placeholder="Adam Smith" required>
                    </div>

                    <!-- Island Selection -->
                    <div class="tm-input-group">
                        <label for="island">Select your Island<span>*</span></label>
                        <select id="island" class="tm-select-island">
                            <option value="ST Thomas">ST Thomas</option>
                            <option value="Tortola">Tortola 1</option>
                            <option value="St Maarten">St. Maarten 2</option>
                            <option value="St Croix">St. Croix 2</option>
                        </select>
                    </div>

                    <!-- Street Address -->
                    <div class="tm-input-group">
                        <label for="streetAddress">Street Address<span>*</span></label>
                        <input type="text" id="streetAddress" placeholder="34 street House no.4" required>
                    </div>

                    <!-- City (Dropdown) -->
                    <div class="tm-input-group">
                        <label for="city">City<span>*</span></label>
                        <select id="city" class="tm-select-island">
                            <option value="New York">New York</option>
                            <option value="Los Angeles">Los Angeles</option>
                            <option value="Miami">Miami</option>
                            <option value="Chicago">Chicago</option>
                        </select>
                    </div>

                    <!-- State/Province (Dropdown) -->
                    <div class="tm-input-group">
                        <label for="state">State/Province<span>*</span></label>
                        <select id="state" class="tm-select-island">
                            <option value="New York">New York</option>
                            <option value="California">California</option>
                            <option value="Florida">Florida</option>
                            <option value="Illinois">Illinois</option>
                        </select>
                    </div>

                    <!-- Postal Code -->
                    <div class="tm-input-group">
                        <label for="postalCode">Postal Code<span>*</span></label>
                        <input type="text" id="postalCode" placeholder="12345" required>
                    </div>

                    <!-- Country (Dropdown) -->
                    <div class="tm-input-group">
                        <label for="country">Country<span>*</span></label>
                        <select id="country" class="tm-select-island">
                            <option value="United States">United States</option>
                            <option value="Canada">Canada</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Australia">Australia</option>
                        </select>
                    </div>

                    <!-- Phone Number -->
                    <div class="tm-input-group">
                        <label for="phone">Phone Number<span>*</span></label>
                        <input type="tel" id="phone" placeholder="+1 234-567-890" required>
                    </div>

                    <!-- Email -->
                    <div class="tm-input-group">
                        <label for="email">Email<span>*</span></label>
                        <input type="email" id="email" placeholder="adam_smith@email.com" required>
                    </div>

                    <!-- Payment Section -->
                   <div class="payment-card-info-div">
                    <div class="tm-input-group">
                        <h2 class="common-heading-2">Payment</h2>
                        <div class="d-flex align-items-center justify-content-between">
                            <p>All transections are secure and encrypted</p>
                            <div class="payment-card-img-wrapper d-flex align-items-center justify-content-between gap-3">
                                <img src="./assets/images/mastercard.svg" alt="" srcset="">
                                <img src="./assets/images/Payment method icon.svg" alt="" srcset="">
                            </div>
                        </div>

                    </div>

                    <!-- Card Number -->
                    <div class="tm-input-group">
                        <label for="cardNumber">Card Number<span>*</span></label>
                        <input type="text" id="cardNumber" placeholder="•••• •••• •••• 0932" required>
                    </div>

                    <!-- Expiration Date & Security Code -->
                    <div class="tm-input-group">
                        <label for="expirationDate">Expiration Date (MM/YY)<span>*</span></label>
                        <input type="text" id="expirationDate" placeholder="12/24" required>
                    </div>
                    <div class="tm-input-group">
                        <label for="securityCode">Security Code<span>*</span></label>
                        <input type="text" id="securityCode" placeholder="••••" required>
                    </div>

                    <!-- Name on Card -->
                    <div class="tm-input-group">
                        <label for="nameOnCard">Name on Card<span>*</span></label>
                        <input type="text" id="nameOnCard" placeholder="Adam Smith" required>
                    </div>
                   </div>

                    <button type="submit" class="common-btn-2 w-100" id="submitBtn">Pay Now</button>
                </form>
            </div>

            <!-- cart area -->

        </div>
    </section>


</main>
@endsection

@push('scripts')
    <!-- ==== All Js Links ==== -->
    <!-- ==== All Js Links ==== -->
    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/tarek.js') }}"></script>
@endpush
