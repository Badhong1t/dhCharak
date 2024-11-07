@extends('frontend.main')

@section('title', 'Pickup And Locations')

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
    <section class="pickup-location-section section-padding-x m-top m-bottom">
      <div class="pickup-location-content-wrapper">
          <div class="pickup-location-content-left">
              <h3 class="pickup-location-heading">Pickup Instructions</h3>
              <p class="pickup-location-para common-para">Once your order is ready, you can pick it up from the designated dispatch
                  warehouse on your destination island</p>
              <div class="pickup-location-content-right-wrapper">
                  <p class="common-para"><span class="pickup-location-span">Step-by-Step Instructions</span> </p>
                  <p class="common-para"> 1. Bring a copy of your order confirmation or receipt.</p>
                  <p class="common-para"> 2. Provide a valid ID for verification.</p>
                  <p class="common-para"> 3. Pickup is available during warehouse business hours: (Insert hours of operation for each island)</p>
              </div>
          </div>
          <div class="pickup-location-content-right">
              <div class="pickup-location-content-left-img-area">
                  <div class="pickup-location-content-left-img-area-div">
                      <div class="pickup-location-image-area">
                          <img src="{{ asset('frontend/assets/images/pickup-2.png') }}" alt="" srcset="">
                      </div>

                      <div class="pickup-location-image-area">
                          <img src="{{ asset('frontend/assets/images/pickup-3.png') }}" alt="" srcset="">
                      </div>

                  </div>
                  <div class="pickup-location-content-left-img-area-div">
                      <div class="pickup-location-image-area">
                          <img src="{{ asset('frontend/assets/images/pickup-1.png') }}" alt="" srcset="">
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

    <!-- second section / map section start -->
     <section class="tm-map-section section-padding-x">
      <div class="tm-map-section-content-wrapper">
          <div class="tm-map-location-area d-flex flex-column gap-3">
              <h3 class="common-heading-2">Delivery Details</h3>
              <div class="tm-input-group">
                <label for="island">Select
                  Island<span>*</span></label>
                <select id="island"
                  class="tm-select-island tm-select-island-2">
                  <option>ST Thomas</option>
                  <option>Tortola</option>
                  <option>St. Maarten</option>
                  <option>St. Croix</option>
                </select>
              </div>

              <div
                class="tm-special-form-group tm-special-delivery-info">
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
            <div class="tm-map-area">
              <div style="width: 100%">
                  <iframe
                      width="100%"
                      height="600"
                      frameborder="0"
                      scrolling="no"
                      marginheight="0"
                      marginwidth="0"
                      src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Sea%20World,%203816%20Crown%20Bay,%2000802+(Sea%20World)&amp;t=k&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed&amp;markers=18.3419,-64.9307">
                  </iframe>
              </div>

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
