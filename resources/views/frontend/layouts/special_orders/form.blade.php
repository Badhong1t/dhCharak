@extends('frontend.main')

@section('title', 'Special Order Form')

@push('styles')
    <!-- ==== All Css Links ==== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/aos.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/owl.theme.default.min.css') }}" />
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
        <section class="section-padding-x ">
            <div class="login-container  m-top m-bottom">
                <h3 class=" special-form-heading">Special Order Request Form</h3>
                <form class="login-form special-form">
                    <div class="tm-form-main-input-wrapper">

                        <!-- First and Last Name -->
                        <div class="tm-input-group">
                            <label for="firstName">First
                                Name<span>*</span></label>
                            <input type="text" id="firstName" placeholder="First Name">
                        </div>
                        <div class="tm-input-group">
                            <label for="lastName">Last
                                Name<span>*</span></label>
                            <input type="text" id="lastName" placeholder="Last Name">
                        </div>

                        <!-- Email -->
                        <div class="tm-input-group">
                            <label for="email">Email<span>*</span></label>
                            <input type="email" id="email" placeholder="adam_smith@email.com">
                        </div>

                        <!-- Phone Number -->
                        <div class="tm-input-group">
                            <label for="phone">Phone
                                Number<span>*</span></label>
                            <input type="text" id="phone" placeholder="+669-789213">
                        </div>

                        <!-- Order Details Section -->
                        <div class="tm-special-form-section">
                            <h3>Order Details</h3>

                            <div class="food-service-quantity-wrapper d-flex justify-content-between">
                                <div class="tm-input-group w-50 pr_10">
                                    <label for="productCategory">Product
                                        Category<span>*</span></label>
                                    <select id="productCategory" class="tm-select-island tm-select-island-2">
                                        <option>Food Service</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="tm-input-group w-50 pl_10">
                                    <label for="quantity">Quantity
                                        Needed<span>*</span></label>
                                    <input class="quantity-special" type="text" id="quantity" placeholder="500">
                                </div>
                            </div>

                            <div class="tm-input-group ">
                                <label for="description">Description</label>
                                <textarea id="description" placeholder="Product Description"></textarea>
                            </div>

                            <div class="tm-input-group ">
                                <label for="additionalInstructions">Additional
                                    Instructions</label>
                                <textarea id="additionalInstructions" placeholder="Instructions"></textarea>
                            </div>
                        </div>
                        <!-- Upload Business License (conditionally displayed for business accounts) -->
                        <div class="row business-fields">
                            <div class="form-group col tm-input-group">
                                <label class="img-video-label" for="profile">Upload Product Image or Specification Sheet
                                    (Optional)
                                    License* </label>
                                <div class="file-upload-space" id="upload-area">
                                    <span id="upload-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M19.5 15V17C19.5 18.1046 18.6046 19 17.5 19H7.5C6.39543 19 5.5 18.1046 5.5 17V15M12.5 15L12.5 5M12.5 5L14.5 7M12.5 5L10.5 7"
                                                stroke="#344051" stroke-width="1.67" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <p id="upload-text">Upload file</p>
                                    <input type="file" name="myFile" class="file-input" id="profile"
                                        accept=".pdf,.doc,.docx,.txt,.rtf,.odt,.xls,.xlsx,.ppt,.pptx"
                                        style="display: none;">
                                </div>

                                <!-- Area to show file preview -->
                            </div>
                        </div>

                        <!-- Delivery Details Section -->
                        <div class="tm-special-form-section-2 d-flex flex-column gap-3">
                            <h3>Delivery Details</h3>
                            <div class="tm-input-group">
                                <label for="island">Select
                                    Island<span>*</span></label>
                                <select id="island" class="tm-select-island tm-select-island-2">
                                    <option>ST Thomas</option>
                                    <option>Tortola</option>
                                    <option>St. Maarten</option>
                                    <option>St. Croix</option>
                                </select>
                            </div>

                            <div class="tm-special-form-group tm-special-delivery-info">
                                <h4>St. Thomas</h4>
                                <p class="common-para">Order Deadline: <span> Orders placed by
                                        Thursday
                                        9 AM</span></p>
                                <p class="common-para">Pickup Day: <span>Available for pickup
                                        the
                                        following Tuesday</span></p>
                                <p class="common-para">Pickup Location: <span>Sea World, 3816
                                        Crown
                                        Bay, 00802</span></p>
                                <p class="common-para">Contact Info: <span>(+123)
                                        456-7890</span></p>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="common-btn-2 w-100" id="submitBtn">Submit Request</button>
                </form>
            </div>
        </section>

    </main>

@endsection

@push('scripts')
    <!-- ==== All Js Links ==== -->
    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/tarek.js') }}"></script>
@endpush
