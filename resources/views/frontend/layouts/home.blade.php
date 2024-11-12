@extends('frontend.main')

@section('title', 'Home')

@section('content')
<!-- banner start -->
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('frontend/assets/images/banner-img-1.png') }}" class="d-block w-100" alt="banner">
          <div class="banner-section-btn">
            <a href="#" class="section-btn">Create Your Free Account Today</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('frontend/assets/images/banner-img-2.png') }}" class="d-block w-100" alt="banner">
          <div class="banner-section-btn">
            <a href="#all-products" class="section-btn">Explore New Products And Savings Now</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('frontend/assets/images/banner-img-3.png') }}" class="d-block w-100" alt="banner">
          <div class="banner-section-btn">
            <a href="./special-order.html" class="section-btn">Submit Your Special Order Today</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('frontend/assets/images/banner-img-4.png') }}" class="d-block w-100" alt="banner">
          <div class="banner-section-btn">
            <a href="./how-works.html" class="section-btn">Learn More About Our Seamless Delivery</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
     <!-- banner end -->

    <!-- products container start -->
     <div id="all-products" class="section-padding-x m-top m-bottom ">
      <div class="section-sub-title">
        Featured Products
      </div>
        <div class="products-container">
        @if($products->count() > 0)
        @foreach($products as $product)
        <form action="{{ route('add-to-cart') }}" method="POST">
          @csrf
          <input type="hidden" name="product_id" value="{{ $product->id }}">
          <input type="hidden" name="title" value="{{ $product->title }}">
          <input type="hidden" name="customer_price" value="{{ $product->customer_price }}">
          <input type="hidden" name="thumbnail" value="{{ $product->thumbnail }}">
          <div class="item">
            <a href="{{ route('productDetails', $product->slug) }}" class="img-content">
              <img src="{{ asset($product->thumbnail) ? asset($product->thumbnail) : asset('frontend/assets/images/product-1.png') }}" alt="">
            </a>
            <div class="text-content">
              <div>
                <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                  <div >
                    <a class="title" href="{{ route('productDetails', $product->slug) }}">{{ substr($product->title ,0 ,25) }}...</a>
                  </div>
                  <div class="price">${{ $product->customer_price }}</div>
                </div>
                <div class="text mt-1">
                 {{ substr($product->short_description ,0 ,120) }}...
                </div>
              </div>
              <div class="action">
                <div class="product-quantity-container">
                  <input value="1" type="hidden" class="product-final-quantity" name="quantity">
                  <div class="quantity-btn">
                    <span class="product-quantity" >1</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M4 6L8 10L12 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                  </div>
                  <div class="quantity-modal">
                    <div class="quantity-number" >1</div>
                    <div class="quantity-number" >2</div>
                    <div class="quantity-number" >3</div>
                    <div class="quantity-number" >4</div>
                    <input type="number">
                  </div>
                </div>
                <button class="action-btn" type="submit">
                  Add to cart
                </button>
              </div>
            </div>
          </div>
        </form>
          @endforeach
          @else
          <div class="text-center">
            <h3>No Products Found</h3>
          </div>
          @endif
      </div>

      <div class="d-flex justify-content-center mt-3 mt-lg-5" >
        <a href="{{ route('products') }}" class="section-btn mt-5">See More</a>
       </div>
     </div>

    <!-- products container end -->

    <!-- newsletter start -->
     <div class="newsletter section-padding-x m-top m-bottom">
       <div class="section-title text-center">
        {{ $data->title }}
       </div>
       <div style="max-width: 803px;" class=" mx-auto w-100 text-center mt-4 section-text">
        {!! $data->short_description !!}
       </div>
       <div class="d-flex justify-content-center mt-5" >
        <a href="./sign-up.html" class="section-btn mt-4">Sign up</a>
       </div>
     </div>

    <!-- newsletter end -->
@endsection

@push('scripts')

@endpush
