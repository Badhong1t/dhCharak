@extends('frontend.main')

@section('title', 'Product Details')

@push('styles')
    <!-- ==== All Css Links ==== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/bootstrap.min.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/aos.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/owl.theme.default.min.css') }}" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/nice-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/fontawesome.min.css') }}">

    <!-- All custom CSS Links -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/helper.css') }}" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/common.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/tarek.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/product.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}" /> --}}
@endpush

@section('content')
<div class="product-details-container section-padding-x m-top m-bottom ">
    <div class="left">
        <div class="side-products">
            <div class="item active">
                <img src="{{ asset('frontend/assets/images/details-side-img-1.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('frontend/assets/images/details-side-img-2.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('frontend/assets/images/details-side-img-3.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('frontend/assets/images/details-side-img-4.png') }}" alt="">
            </div>


        </div>
        <div class="product-img">
             <img id="main-product-img" src="{{ asset('frontend/assets/images/product-details.png') }}" alt="">
        </div>
    </div>
    <div class="right">
        <div class="section-title">
            Bosh BT Earphone
        </div>
        <div class="product-price mt-4">
            $29
        </div>
        <div class="section-text mt-3 mb-5">
            Noise  cancelation Bluetooth headphone It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
        </div>
        <div class="sizes-container">
            <input id="product-size" value="" type="hidden" name="product-size">
            <div class="title">Size:</div>
            <div id="s" class="size">s</div>
            <div id="m" class="size">m</div>
            <div id="l" class="size">l</div>
            <div id="xl" class="size">xl</div>
        </div>
        <div class="product-details-quantity-container d-flex align-items-center gap-3 mt-5 mb-3">
              <div id="product-details-minus-btn" class="decrease-btn">-</div>
              <div class="product-details-quantity">
                <input id="product-details-quantity-input" value="1" min="1" type="number">
              </div>
              <div id="product-details-plus-btn" class="increase-btn">+</div>
        </div>
        <button class="section-btn mt-4" >Add to cart</button>
    </div>
</div>
<!-- product-details-container end -->

<!-- description start -->
 <div class="section-padding-x m-top m-bottom" >
    <div class="product-description-container  ">
        <div class="section-title">
          Product Description
        </div>
        <div class="product-description-list">
          <div class="item">
              <div class="title">Specifications</div>
              <div class="text mt-2 lg-mt-4">
                  We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. But the structure was from the funny the century rather, initial all the made, have spare to negatives.We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. But the structure was from the funny the century rather, initial all the made, have spare to negatives.
              </div>
          </div>
          <div class="item">
              <div class="title">Packing and delivery</div>
              <div class="text mt-2 lg-mt-4">
                  We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. But the structure was from the funny the century rather, initial all the made, have spare to negatives.We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. But the structure was from the funny the century rather, initial all the made, have spare to negatives.
              </div>
          </div>
          <div class="item">
              <div class="title">Suggested use</div>
              <div class="text mt-2 lg-mt-4">
                  We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. But the structure was from the funny the century rather, initial all the made, have spare to negatives.We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. But the structure was from the funny the century rather, initial all the made, have spare to negatives.
              </div>
          </div>
          <div class="item">
              <div class="title">Warnings</div>
              <div class="text mt-2 lg-mt-4">
                  We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. But the structure was from the funny the century rather, initial all the made, have spare to negatives.We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. But the structure was from the funny the century rather, initial all the made, have spare to negatives.
              </div>
          </div>
        </div>
  </div>
 </div>

<!-- description end -->

<!-- products container start -->
 <div class="section-padding-x m-top m-bottom">
  <div class="section-sub-title">
    Related Products
  </div>
  <div class="products-container">
      <div class="item">
        <a href="" class="img-content">
          <img src="{{ asset('frontend/assets/images/product-1.png') }}" alt="">
        </a>
        <div class="text-content">
          <div>
            <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
              <div >
                <a class="title" href="">Bosh BT Earphone</a>
              </div>
              <div class="price">$29</div>
            </div>
            <div class="text mt-1">
              Noise  cancelation Bluetooth headphone.
            </div>
          </div>
          <div class="action">
            <div class="product-quantity-container">
              <input value="1" type="hidden" class="product-final-quantity" name="">
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
            <a href="{{ route('cart') }}" class="action-btn">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <div class="item">
        <a href="" class="img-content">
          <img src="{{ asset('frontend/assets/images/product-2.png') }}" alt="">
        </a>
        <div class="text-content">
          <div>
            <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
              <div >
                <a class="title" href="">Bosh BT Earphone</a>
              </div>
              <div class="price">$29</div>
            </div>
            <div class="text mt-1">
              Noise  cancelation Bluetooth headphone
            </div>
          </div>
          <div class="action">
            <div class="product-quantity-container">
              <input value="1" type="hidden" class="product-final-quantity" name="">
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
            <a href="{{ route('cart') }}" class="action-btn">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <div class="item">
        <a href="" class="img-content">
          <img src="{{ asset('frontend/assets/images/product-3.png') }}" alt="">
        </a>
        <div class="text-content">
          <div>
            <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
              <div >
                <a class="title" href="">Bosh BT Earphone</a>
              </div>
              <div class="price">$29</div>
            </div>
            <div class="text mt-1">
              Noise  cancelation Bluetooth headphone
            </div>
          </div>
          <div class="action">
            <div class="product-quantity-container">
              <input value="1" type="hidden" class="product-final-quantity" name="">
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
            <a href="{{ route('cart') }}" class="action-btn">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <div class="item">
        <a href="" class="img-content">
          <img src="{{ asset('frontend/assets/images/product-4.png') }}" alt="">
        </a>
        <div class="text-content">
          <div class="text-content-top" >
            <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
              <div >
                <a class="title" href="">Bosh BT Earphone</a>
              </div>
              <div class="price">$29</div>
            </div>
            <div class="text mt-1">
              Noise  cancelation Bluetooth headphone
            </div>
          </div>
          <div class="action">
            <div class="product-quantity-container">
              <input value="1" type="hidden" class="product-final-quantity" name="">
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
            <a href="{{ route('cart') }}" class="action-btn">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <div class="item">
        <a href="" class="img-content">
          <img src="{{ asset('frontend/assets/images/product-1.png') }}" alt="">
        </a>
        <div class="text-content">
          <div>
            <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
              <div >
                <a class="title" href="">Bosh BT Earphone</a>
              </div>
              <div class="price">$29</div>
            </div>
            <div class="text mt-1">
              Noise  cancelation Bluetooth headphone.
            </div>
          </div>
          <div class="action">
            <div class="product-quantity-container">
              <input value="1" type="hidden" class="product-final-quantity" name="">
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
            <a href="{{ route('cart') }}" class="action-btn">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <div class="item">
        <a href="" class="img-content">
          <img src="{{ asset('frontend/assets/images/product-2.png') }}" alt="">
        </a>
        <div class="text-content">
          <div>
            <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
              <div >
                <a class="title" href="">Bosh BT Earphone</a>
              </div>
              <div class="price">$29</div>
            </div>
            <div class="text mt-1">
              Noise  cancelation Bluetooth headphone
            </div>
          </div>
          <div class="action">
            <div class="product-quantity-container">
              <input value="1" type="hidden" class="product-final-quantity" name="">
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
            <a href="{{ route('cart') }}" class="action-btn">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <div class="item">
        <a href="" class="img-content">
          <img src="{{ asset('frontend/assets/images/product-3.png') }}" alt="">
        </a>
        <div class="text-content">
          <div>
            <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
              <div >
                <a class="title" href="">Bosh BT Earphone</a>
              </div>
              <div class="price">$29</div>
            </div>
            <div class="text mt-1">
              Noise  cancelation Bluetooth headphone
            </div>
          </div>
          <div class="action">
            <div class="product-quantity-container">
              <input value="1" type="hidden" class="product-final-quantity" name="">
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
            <a href="{{ route('cart') }}" class="action-btn">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <div class="item">
        <a href="" class="img-content">
          <img src="{{ asset('frontend/assets/images/product-4.png') }}" alt="">
        </a>
        <div class="text-content">
          <div class="text-content-top" >
            <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
              <div >
                <a class="title" href="">Bosh BT Earphone</a>
              </div>
              <div class="price">$29</div>
            </div>
            <div class="text mt-1">
              Noise  cancelation Bluetooth headphone
            </div>
          </div>
          <div class="action">
            <div class="product-quantity-container">
              <input value="1" type="hidden" class="product-final-quantity" name="">
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
            <a href="{{ route('cart') }}" class="action-btn">
              Add to cart
            </a>
          </div>
        </div>
      </div>
  </div>

  <div class="d-flex justify-content-center mt-5" >
    <a href="./products.html" class="section-btn mt-5">See More</a>
   </div>
 </div>

<!-- products container end -->

<!-- newsletter start -->
 <div class="newsletter section-padding-x m-top m-bottom ">
   <div class="section-title text-center">
    Stay Connected with Bulksail
   </div>
   <div style="max-width: 803px;" class=" mx-auto w-100 text-center mt-4 section-text">
    Sign up to be the first to hear about exclusive offers, new product arrivals, and important updates. Join our community and get the latest deals delivered straight to your inbox.
   </div>
   <div class="d-flex justify-content-center mt-5" >
    <a href="" class="section-btn mt-4">Sign up</a>
   </div>
 </div>
<!-- newsletter end -->

<!-- main area starts -->
<main>



</main>
<!-- main area ends -->
@endsection

@push('scripts')
    <!-- ==== All Js Links ==== -->
    <!-- ==== All Js Links ==== -->
    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    {{-- <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script> --}}
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    {{-- <script src="{{ asset('frontend/assets/js/tarek.js') }}"></script> --}}
@endpush
