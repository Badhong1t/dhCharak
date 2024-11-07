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
    <section class="handling-goods-section section-padding-x m-top m-bottom">
      <h3 class="handling-goods-heading">Handling Frozen & Refrigerated Goods</h3>
      <div class="handling-goods-content-wrapper">
          <div class="handling-goods-content-left">
              <div class="handling-goods-content-left-img-area">
                  <img src="{{ asset('frontend/assets/images/goods-banner.png') }}" alt="" srcset="">
              </div>
          </div>
          <div class="handling-goods-content-right">
              <div class="handling-goods-content-right-wrapper">
                  <p class="common-para">At Bulksail, we ensure that frozen and refrigerated products are handled with the utmost care. Our specialized logistics process includes temperature-controlled shipping to ensure that perishable items arrive fresh and in optimal condition.
                  </p>
                  <p class="common-para"><span>Order Placement:</span> Frozen and refrigerated items are clearly marked and processed with special handling requirements.
                  </p>
                  <p class="common-para"><span>Temperature-Controlled Shipping:</span> We use refrigerated containers for transporting frozen and perishable goods, maintaining the correct temperatures from our distributors in Puerto Rico to the dispatch warehouses.
                  </p>
                  <p class="common-para"><span>Island-Wide Delivery:</span> Frozen and refrigerated items are delivered to dispatch warehouses in St. Thomas, St. Croix, Tortola, and St. Maarten, ready for pickup in optimal condition.</p>
              </div>
              <a href="{{ route('home') }}" class="common-btn-2">
                  Start Shopping
              </a>
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
