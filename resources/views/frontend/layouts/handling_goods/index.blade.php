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
      <h3 class="handling-goods-heading">{{ $dataStatic->title }}</h3>
      <div class="handling-goods-content-wrapper">
          <div class="handling-goods-content-left">
              <div class="handling-goods-content-left-img-area">
                  <img src="{{ asset('frontend/assets/images/goods-banner.png') }}" alt="" srcset="">
              </div>
          </div>
          <div class="handling-goods-content-right">
              <div class="handling-goods-content-right-wrapper">
                  <p class="common-para">{!! $dataStatic->description !!}
                  </p>

                  @foreach ($dataDynamic as $data)
                  <p class="common-para"><span>{{ $data->sub_title }}:</span> {!! $data->short_description !!}</p>
                  @endforeach

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
