@extends('frontend.main')

@section('title', 'Delivery Schedule')

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
    <section
        class="pickup-location-section section-padding-x m-top m-bottom">
        <div class="pickup-location-content-wrapper">
            <div class="pickup-location-content-left">
                <h3 class="pickup-location-heading">{{ $data->title ?? '' }}</h3>
                <p class="pickup-location-para common-para">{!! $data->description ?? '' !!}</p>
                <div class="pickup-location-content-right-wrapper" style="margin-top: 20px;">
                    <p class="common-para"> <span class="mr_5"><svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="10" height="10"
                                viewBox="0 0 10 10" fill="none">
                                <circle cx="5" cy="5" r="5"
                                    fill="#4D4D4D" />
                            </svg></span> Each island has a specific
                        order and delivery schedule.
                    </p>
                    <p class="common-para"> <span class="mr_5"><svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="10" height="10"
                                viewBox="0 0 10 10" fill="none">
                                <circle cx="5" cy="5" r="5"
                                    fill="#4D4D4D" />
                            </svg></span> You will receive a
                        notification once your order arrives and clears
                        customs.
                    </p>
                    <p class="common-para"> <span class="mr_5"><svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="10" height="10"
                                viewBox="0 0 10 10" fill="none">
                                <circle cx="5" cy="5" r="5"
                                    fill="#4D4D4D" />
                            </svg></span> Pickup is available from the
                        dispatch warehouse during regular business hours
                    </p>
                </div>
            </div>
            <div class="pickup-location-content-right">
                <div class="pickup-location-content-left-img-area">
                    <div
                        class="pickup-location-content-left-img-area-div">
                        <div class="pickup-location-image-area">
                            <img
                                src="{{ asset($image1->image) }}"
                                alt="Dekivery Img" srcset>
                        </div>

                        <div class="pickup-location-image-area">
                            <img
                                src="{{ asset($image2->image) }}"
                                alt="Dekivery Img" srcset>
                        </div>

                    </div>
                    <div
                        class="pickup-location-content-left-img-area-div">
                        <div class="pickup-location-image-area">
                            <img
                                src="{{ asset($image3->image) }}"
                                alt="Dekivery Img" srcset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- second section / map section start -->
    <section
        class="delivery-schedule-section section-padding-x ">
        <h3 class="common-heading-2">Delivery Details</h3>
        <div class="delivery-schedule-content-wrapper">
            <!-- item--1 -->
            <div class=" delivery-schedule-content-item">
                <h4>St. Thomas</h4>
                <p class="common-para">Order Deadline: <span> Orders
                        placed by
                        Thursday
                        9 AM</span></p>
                <p class="common-para">Pickup Day: <span>Available for
                        pickup
                        the
                        following Tuesday</span></p>
                <p class="common-para">Pickup Location: <span>Sea World,
                        3816
                        Crown
                        Bay, 00802</span></p>
                <p class="common-para">Contact Info: <span>(+123)
                        456-7890</span></p>
            </div>
            <!-- item--2 -->
            <div class=" delivery-schedule-content-item">
                <h4>St. Croix</h4>
                <p class="common-para">Order Deadline: <span> Orders
                        placed by
                        Friday 9 AM</span></p>
                <p class="common-para">Pickup Day: <span>Available for
                        pickup
                        the following Tuesday</span></p>
                <p class="common-para">Pickup Location: <span>Golden
                        Rock Market, Estate Golden Rock, Christiansted,
                        St. Croix, 00820 </span></p>
                <p class="common-para">Contact Info: <span> (+123)
                        456-7891</span></p>
            </div>
            <!-- item--3 -->
            <div class=" delivery-schedule-content-item">
                <h4>Tortola</h4>
                <p class="common-para">Order Deadline: <span> Orders
                        placed by
                        Thursday 9 AM</span></p>
                <p class="common-para">Pickup Day: <span>Available for
                        pickup
                        the following Friday</span></p>
                <p class="common-para">Pickup Location: <span> Resort
                        Bay Foods, Cedar Building #1, Port Purcell,
                        Tortola, VI</span></p>
                <p class="common-para">Contact Info: <span> (+123)
                        456-7892</span></p>
            </div>
            <!-- item--4 -->
            <div class=" delivery-schedule-content-item">
                <h4>St. Maarten</h4>
                <p class="common-para">Order Deadline: <span> Orders
                        placed by
                        Thursday 9 AM</span></p>
                <p class="common-para">Pickup Day: <span>Available for
                        pickup
                        the following Friday</span></p>
                <p class="common-para">Pickup Location: <span> Amsterdam
                        Cheese and Liquor Store, 1 Emma Plein,
                        Philipsburg, Sint Maarten</span></p>
                <p class="common-para">Contact Info: <span>(+123)
                        456-7893<span><p>
                            </div>
                        </div>
                    </section>
                    <!-- second section / map section end -->


                     <!-- newsletter start -->
                    <div class="newsletter section-padding-x m-top m-bottom ">
                      <div class="section-title text-center">
                          Get Notified
                      </div>
                      <div style="max-width: 803px;" class=" mx-auto w-100 text-center mt-4 section-text">
                          Stay informed about your delivery. We will send you an email or SMS as soon as your order is ready for pickup.
                      </div>
                      <div class="d-flex justify-content-center mt-5" >
                      <a href="sign-up.html" class="section-btn mt-4">Sign Up for Notifications</a>
                      </div>
                    </div>
                     <!-- newsletter end -->

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
