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
                            {{ $dataStatic->title ?? '' }}
                        </h2>
                        <p class="common-para-2 text-center">
                            {{ $dataStatic->short_description ?? '' }}
                        </p>
                    </div>
                    <div class="special-order-card-wrapper pb_60 pt_60">

                        <!-- item-1 -->
                        @foreach ($dataDynamic as $item)
                            <div class="special-order-card-item">
                                <div
                                    class="special-order-card-img-wrapper d-flex justify-content-between align-items-center">
                                    <img src="{{ asset($item->image) }}" alt="">
                                    <img src="{{ asset('frontend/assets/images/Arrow.png') }}" alt="">
                                </div>
                                <h3 class="common-para fw-700">
                                    {{ $item->title }}
                                </h3>
                                <p class="common-para">
                                    {{ $item->description }}
                                </p>
                            </div>
                        @endforeach

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
