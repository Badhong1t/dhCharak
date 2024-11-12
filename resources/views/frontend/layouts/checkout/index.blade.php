@extends('frontend.main')

@section('title', 'Delivery Schedule')

@push('styles')
    <!-- ==== All Css Links ==== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@24.7.0/build/css/intlTelInput.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/aos.css') }}" />
    <!-- All custom CSS Links -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/helper.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/tarek.css') }}" />
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

                <form class="login-form tm-checkout-form" action="{{ route('checkout.store') }}" method="post">
                    @csrf
                    <!-- Full Name -->
                    <div class="tm-input-group">
                        <label for="fullName">Full Name<span>*</span></label>
                        <input type="text" id="name" placeholder="Adam Smith" name="name" value="{{ Auth::user()->first_name }}">
                    </div>

                    <!-- Island Selection -->
                    <div class="tm-input-group">
                        <label for="island">Select your Island<span>*</span></label>
                        <select id="island" class="tm-select-island" name="island" class="@error('island') is-invalid @enderror)">
                            <option value="ST Thomas">ST Thomas</option>
                            <option value="Tortola">Tortola 1</option>
                            <option value="St Maarten">St. Maarten 2</option>
                            <option value="St Croix">St. Croix 2</option>
                        </select>
                        @error('island')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Street Address -->
                    <div class="tm-input-group">
                        <label for="streetAddress">Street Address<span>*</span></label>
                        <input type="text" name="address" id="streetAddress" placeholder="34 street House no.4" class="@error('address') is-invalid @enderror">
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- City (Dropdown) -->
                    <div class="tm-input-group">
                        <label for="city">City<span>*</span></label>
                        <select id="city" class="tm-select-island" name="city" class="@error('city') is-invalid @enderror)">
                            <option value="New York">New York</option>
                            <option value="Los Angeles">Los Angeles</option>
                            <option value="Miami">Miami</option>
                            <option value="Chicago">Chicago</option>
                        </select>
                        @error('city')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- State/Province (Dropdown) -->
                    <div class="tm-input-group">
                        <label for="state">State/Province<span>*</span></label>
                        <select id="state" class="tm-select-island" name="state" class="@error('state') is-invalid @enderror">
                            <option value="New York">New York</option>
                            <option value="California">California</option>
                            <option value="Florida">Florida</option>
                            <option value="Illinois">Illinois</option>
                        </select>
                        @error('state')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Postal Code -->
                    <div class="tm-input-group">
                        <label for="postalCode">Postal Code<span>*</span></label>
                        <input type="text" name="postal_code" id="postalCode" placeholder="12345" class="@error('postal_code') is-invalid @enderror">
                        @error('postal_code')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Country (Dropdown) -->
                    <div class="tm-input-group">
                        <label for="country">Country<span>*</span></label>
                        <select id="country" class="tm-select-island" name="country" class="@error('country') is-invalid @enderror">
                            <option value="United States">United States</option>
                            <option value="Canada">Canada</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Australia">Australia</option>
                        </select>
                        @error('country')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Phone Number -->
                    <div class="tm-input-group">
                        <label for="phone">Phone Number<span>*</span></label>
                        <input type="tel" name="phone" id="phone" placeholder="+1 234-567-890" class="@error('phone') is-invalid @enderror">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="tm-input-group">
                        <label for="email">Email<span>*</span></label>
                        <input type="email" name="email" id="email" placeholder="adam_smith@email.com" value="{{ Auth::user()->email }}">
                    </div>

                    <!-- Payment Section -->
                   <div class="payment-card-info-div">
                    <div class="tm-input-group">
                        <h2 class="common-heading-2">Payment</h2>
                        <div class="d-flex align-items-center justify-content-between">
                            <p>All transections are secure and encrypted</p>
                            <div class="payment-card-img-wrapper d-flex align-items-center justify-content-between gap-3">
                                <img src="{{ asset('frontend/assets/images/mastercard.svg') }}" alt="" srcset="">
                                <img src="{{ asset('frontend/assets/images/Payment method icon.svg') }}" alt="" srcset="">
                            </div>
                        </div>

                    </div>

                    <!-- Card Number -->
                    <div class="tm-input-group">
                        <label for="cardNumber">Card Number<span>*</span></label>
                        <input type="text" name="card_number" id="cardNumber" placeholder="•••• •••• •••• 0932">
                    </div>

                    <!-- Expiration Date & Security Code -->
                    <div class="tm-input-group">
                        <label for="expirationDate">Expiration Date (MM/YY)<span>*</span></label>
                        <input type="text" id="expirationDate" placeholder="12/24" name="expiration_date">
                    </div>
                    <div class="tm-input-group">
                        <label for="securityCode">Amount<span>*</span></label>
                        <input type="text" id="securityCode" placeholder="••••" name="amount">
                    </div>

                    <!-- Name on Card -->
                    <div class="tm-input-group">
                        <label for="nameOnCard">Name on Card<span>*</span></label>
                        <input type="text" id="nameOnCard" placeholder="Adam Smith" name="name_on_card">
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
    <script src="{{ asset('frontend/assets/js/tarek.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@24.7.0/build/js/intlTelInput.min.js"></script>
    <script>
        const input = document.querySelector("#phone");
        window.intlTelInput(input, {
            loadUtilsOnInit: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.7.0/build/js/utils.js",
        });
    </script>
@endpush
