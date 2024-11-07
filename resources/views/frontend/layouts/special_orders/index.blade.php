@extends('frontend.main')

@section('title', 'Special Orders')

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
        <!-- banner area starts -->
        <section class="special-order-section m-top m-bottom">
            <div class="section-padding-x">
                <div class="special-order-content">
                    <div class="common-heading-wrapper">
                        <h2 class="common-heading text-center mb_15">
                            Special Orders
                        </h2>
                        <p class="common-para-2 text-center">
                            Can't find what you're looking for? Let us help you source your product!
                        </p>
                    </div>
                    <div class="special-order-card-wrapper pb_60 pt_60">
                        <!-- item-1 -->
                        <div class="special-order-card-item">
                            <div class="special-order-card-img-wrapper d-flex justify-content-between align-items-center">
                                <img src="{{ asset('frontend/assets/images/submit-request.svg') }}" alt="" srcset="">
                                <img src="{{ asset('frontend/assets/images/Arrow.png') }}" alt="" srcset="">
                            </div>
                            <h3 class="common-para fw-700">
                                Submit Your Request
                            </h3>
                            <p class="common-para">
                                Tell us what you're looking for by filling out the form. Include details about the product,
                                quantity, and your destination island. If needed, you can upload an image or document to
                                help us understand your request better.
                            </p>
                        </div>
                        <!-- item-2 -->
                        <div class="special-order-card-item">
                            <div class="special-order-card-img-wrapper d-flex justify-content-between align-items-center">
                                <img src="{{ asset('frontend/assets/images/source.svg') }}" alt="" srcset="">
                                <img src="{{ asset('frontend/assets/images/Arrow.png') }}" alt="" srcset="">
                            </div>
                            <h3 class="common-para fw-700">
                                We'll Source Your Product
                            </h3>
                            <p class="common-para">
                                Once we receive your request, our team will search through our network of distributors to
                                find the product for you. We'll get back to you with a detailed quote, including pricing and
                                shipping information.
                            </p>
                        </div>
                        <!-- item-3 -->
                        <div class="special-order-card-item">
                            <div class="special-order-card-img-wrapper d-flex justify-content-between align-items-center">
                                <img src="{{ asset('frontend/assets/images/review-confirm.svg') }}" alt="" srcset="">
                                <img src="{{ asset('frontend/assets/images/Arrow.png') }}" alt="" srcset="">
                            </div>
                            <h3 class="common-para fw-700">
                                Review and Confirm Your Order
                            </h3>
                            <p class="common-para">
                                Review the quote, and if you're happy with the pricing and details, confirm your order.
                                After confirmation, you'll need to make the payment so we can begin processing your order
                            </p>
                        </div>
                        <!-- item-4-->
                        <div class="special-order-card-item">
                            <div class="special-order-card-img-wrapper d-flex justify-content-between align-items-center">
                                <img src="{{ asset('frontend/assets/images/handle.svg') }}" alt="" srcset="">
                                <img class="d-none" src="{{ asset('frontend/assets/images/Arrow.png') }}" alt="" srcset="">
                            </div>
                            <h3 class="common-para fw-700">
                                We Handle the Rest
                            </h3>
                            <p class="common-para">
                                Once your payment is complete, we'll take care of everything—from arranging shipping to
                                delivering your product to your destination island.
                            </p>
                        </div>
                    </div>
                    <a href="{{ route('specialOrdersForm') }}" class="common-btn d-flex mx-auto">Request Form</a>
                </div>
        </section>

        <!-- banner area ends -->

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
