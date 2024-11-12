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
    <section class="special-order-section m-top m-bottom">
        <div class="section-padding-x">
            <div class="special-order-content">
                <div class="common-heading-wrapper">
                    <h2 class="common-heading text-center mb_15">
                        {{ $dataStatic2->title }}
                    </h2>
                    <p class="common-para-2 text-center">
                        {{ $dataStatic2->short_description }}
                    </p>
                    <div class="how-it-works-item-wrapper">
                        <!-- item-1 -->
                        <div class="how-it-works-item d-flex">
                            <div class="how-item-card-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                    <circle cx="11" cy="11" r="11" fill="#D9D9D9"/>
                                  </svg>
                                <span class="line-span-design">

                                </span>
                            </div>
                            <div class="how-item-card-right">
                                <div
                                    class="how-item-card-right-img-area">
                                    <img
                                        src="{{ asset('frontend//assets/images/submit-request.svg') }}"
                                        alt srcset>
                                </div>
                                <h3 class="common-heading-2">
                                    Browse or Submit Special Requests
                                </h3>
                                <div
                                    class="how-item-card-inner-content-wrapper d-flex">
                                    <div
                                        class="how-item-card-inner-item">
                                        <h4 class="how-it-works-h4">
                                            For Business or Consumers:
                                        </h4>
                                        <p class="common-para">
                                            Easily browse products from
                                            our network of distributors,
                                            wholesalers, and club stores
                                            in categories like
                                            Foodservice, Grocery,
                                            Automotive, and more.
                                        </p>
                                    </div>
                                    <div
                                        class="how-item-card-inner-item">
                                        <h4 class="how-it-works-h4">
                                            If You Can’t Find It:
                                        </h4>
                                        <p class="common-para">
                                            Use our special orders page
                                            to request a specific
                                            product, and we’ll source it
                                            directly from our
                                            distributors.
                                        </p>
                                    </div>
                                </div>
                                <a href="./products.html" class="common-btn d-flex mx-auto">Browse Products</a>
                                <p class="abosulte-text">Step 1</p>
                            </div>
                        </div>
                        <!-- item-2 -->
                        <div class="how-it-works-item d-flex">
                            <div class="how-item-card-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                    <circle cx="11" cy="11" r="11" fill="#D9D9D9"/>
                                  </svg>
                                <span class="line-span-design">

                                </span>
                            </div>
                            <div class="how-item-card-right">
                                <div
                                    class="how-item-card-right-img-area">
                                    <img
                                        src="{{ asset('frontend/assets/images/source.svg') }}"
                                        alt srcset>
                                </div>
                                <h3 class="common-heading-2">
                                    Place Your Order
                                </h3>
                                <div
                                    class="how-item-card-inner-content-wrapper d-flex">
                                    <div
                                        class="how-item-card-inner-item">
                                        <h4 class="how-it-works-h4">
                                            For Consumers:
                                        </h4>
                                        <p class="common-para">
                                            Add the items you need to your cart and proceed to checkout. Choose your destination island for shipping.
                                        </p>
                                    </div>
                                    <div
                                        class="how-item-card-inner-item">
                                        <h4 class="how-it-works-h4">
                                            For Businesses:
                                        </h4>
                                        <p class="common-para">
                                            Access verified business pricing by signing in to your business account. Browse bulk quantities and exclusive deals.
                                        </p>
                                    </div>
                                </div>
                                <a href="./sign-up.html" class="common-btn d-flex mx-auto">Create Account</a>
                                <p class="abosulte-text">Step 2</p>
                            </div>
                        </div>
                        <!-- item-3 -->
                        <div class="how-it-works-item d-flex">
                            <div class="how-item-card-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                    <circle cx="11" cy="11" r="11" fill="#D9D9D9"/>
                                  </svg>
                                <span class="line-span-design">

                                </span>
                            </div>
                            <div class="how-item-card-right">
                                <div
                                    class="how-item-card-right-img-area">
                                    <img
                                        src="{{ asset('frontend/assets/images/logistics.svg') }}"
                                        alt srcset>
                                </div>
                                <h3 class="common-heading-2">
                                    We Take Care of the Logistics
                                </h3>
                                <div
                                    class="how-item-card-inner-content-wrapper d-flex">
                                    <div
                                        class="how-item-card-inner-item">
                                        <h4 class="how-it-works-h4">
                                            Shipping & Delivery:
                                        </h4>
                                        <p class="common-para">
                                            Once your order is confirmed, Bulksail handles all the logistics. We arrange shipping from our distributors in Puerto Rico to your chosen destination island.
                                        </p>
                                    </div>
                                    <div
                                        class="how-item-card-inner-item">
                                        <h4 class="how-it-works-h4">
                                            Customs Clearance:
                                        </h4>
                                        <p class="common-para">
                                            We take care of customs clearance so you don’t have to worry about the paperwork or hassle.
                                        </p>
                                    </div>
                                </div>
                                <a href="./delivery-schedule.html" class="common-btn d-flex mx-auto">Delivery Schedule</a>
                                <p class="abosulte-text">Step 3</p>
                            </div>
                        </div>
                        <!-- item-4 -->
                        <div class="how-it-works-item d-flex">
                            <div class="how-item-card-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                    <circle cx="11" cy="11" r="11" fill="#D9D9D9"/>
                                  </svg>
                                <span class="line-span-design">

                                </span>
                            </div>
                            <div class="how-item-card-right">
                                <div
                                    class="how-item-card-right-img-area">
                                    <img
                                        src="{{ asset('frontend/assets/images/receive-product.svg') }}"
                                        alt srcset>
                                </div>
                                <h3 class="common-heading-2">
                                    Receive Your Products
                                </h3>
                                <div
                                    class="how-item-card-inner-content-wrapper d-flex">
                                    <div
                                        class="how-item-card-inner-item">
                                        <h4 class="how-it-works-h4">
                                            Dispatch Warehouse Pickup:
                                        </h4>
                                        <p class="common-para">
                                            After your order clears customs, you'll pick up your goods from a designated warehouse on your destination island.
                                        </p>
                                    </div>
                                    <div class="how-item-card-inner-item">
                                        <h4 class="how-it-works-h4">
                                            Tracking and Notifications:
                                        </h4>
                                        <p class="common-para">
                                            Stay updated on your order status with tracking updates sent to your email.
                                        </p>
                                    </div>
                                </div>
                                <a href="./pickup-locations.html" class="common-btn d-flex mx-auto">Pickup Instruction & Locations</a>
                                <p class="abosulte-text">Step 4</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    <section class="why-choose-section mb_100">
        <h2 class="common-heading text-center mb_60">
            {{ $dataStatic->title }}
        </h2>
        <div class="section-padding-x tm-why-choss-div">
            <div class="why-choose-bulksail-content-wrapper">
                @foreach($dataDynamic as $item)
                <div class="why-choose-item">
                    <h4>{{ $item->sub_title }}</h4>
                    <p class="common-para">{!! $item->description !!}</p>
                </div>
                @endforeach
            </div>
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
