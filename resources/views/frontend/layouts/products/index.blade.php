@extends('frontend.main')

@section('title', 'Products')

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
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/tarek.css') }}" /> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}" /> --}}
@endpush

@section('content')
<div class="section-padding-x">
    <div class="section-sub-title mt-3 lg-mt-5">
      Filter Products
    </div>
      <div class="products-filter-container mt-3 lg-mt-5">
        <div class="product-filter">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Foodservice Essentials
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="filter-items">
                    <div class="item">
                      <input class="form-check-input" type="checkbox" id="essentials">
                      <label for="essentials">Essentials</label>
                    </div>
                    <div class="item">
                      <input class="form-check-input" type="checkbox" id="foodservice">
                      <label for="foodservice">Foodservice</label>
                    </div>
                    <div class="item">
                      <input class="form-check-input" type="checkbox" id="service Essentials">
                      <label for="service Essentials">Service Essentials</label>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Auto & Marine
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="filter-items">
                    <div class="item">
                      <input class="form-check-input" type="checkbox" id="essentials2">
                      <label for="essentials2">Essentials</label>
                    </div>
                    <div class="item">
                      <input class="form-check-input" type="checkbox" id="foodservice2">
                      <label for="foodservice2">Foodservice</label>
                    </div>
                    <div class="item">
                      <input class="form-check-input" type="checkbox" id="service Essentials2">
                      <label for="service Essentials2">Service Essentials</label>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Hardware & Garden
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="filter-items">
                    <div class="item">
                      <input class="form-check-input" type="checkbox" id="essentials3">
                      <label for="essentials3">Essentials</label>
                    </div>
                    <div class="item">
                      <input class="form-check-input" type="checkbox" id="foodservice3">
                      <label for="foodservice3">Foodservice</label>
                    </div>
                    <div class="item">
                      <input class="form-check-input" type="checkbox" id="service Essentials3">
                      <label for="service Essentials3">Service Essentials</label>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Groceries & Home Goods
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="filter-items">
                    <div class="item">
                      <input class="form-check-input" type="checkbox" id="essentials4">
                      <label for="essentials4">Essentials</label>
                    </div>
                    <div class="item">
                      <input class="form-check-input" type="checkbox" id="foodservice4">
                      <label for="foodservice4">Foodservice</label>
                    </div>
                    <div class="item">
                      <input class="form-check-input" type="checkbox" id="service Essentials4">
                      <label for="service Essentials4">Service Essentials</label>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="product-img">
          <img src="{{ asset('frontend/assets/images/banner-img-3.png') }}" alt="">
        </div>
      </div>
   </div>
   <!-- products filter container end -->

  <!-- products container start -->
   <div class="section-padding-x m-top m-bottom">
    <div class="section-sub-title">
      Featured Products
    </div>
    <div class="products-container">
        <div class="item">
          <a href="{{ route('productDetails') }}" class="img-content">
            <img src="{{ asset('frontend/assets/images/product-1.png') }}" alt="">
          </a>
          <div class="text-content">
            <div>
              <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                <div >
                  <a class="title" href="{{ route('productDetails') }}">Bosh BT Earphone</a>
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
          <a href="{{ route('productDetails') }}" class="img-content">
            <img src="{{ asset('frontend/assets/images/product-2.png') }}" alt="">
          </a>
          <div class="text-content">
            <div>
              <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                <div >
                  <a class="title" href="{{ route('productDetails') }}">Bosh BT Earphone</a>
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
          <a href="{{ route('productDetails') }}" class="img-content">
            <img src="{{ asset('frontend/assets/images/product-3.png') }}" alt="">
          </a>
          <div class="text-content">
            <div>
              <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                <div >
                  <a class="title" href="{{ route('productDetails') }}">Bosh BT Earphone</a>
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
          <a href="{{ route('productDetails') }}" class="img-content">
            <img src="{{ asset('frontend/assets/images/product-4.png') }}" alt="">
          </a>
          <div class="text-content">
            <div class="text-content-top" >
              <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                <div >
                  <a class="title" href="{{ route('productDetails') }}">Bosh BT Earphone</a>
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
          <a href="{{ route('productDetails') }}" class="img-content">
            <img src="{{ asset('frontend/assets/images/product-1.png') }}" alt="">
          </a>
          <div class="text-content">
            <div>
              <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                <div >
                  <a class="title" href="{{ route('productDetails') }}">Bosh BT Earphone</a>
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
          <a href="{{ route('productDetails') }}" class="img-content">
            <img src="{{ asset('frontend/assets/images/product-2.png') }}" alt="">
          </a>
          <div class="text-content">
            <div>
              <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                <div >
                  <a class="title" href="{{ route('productDetails') }}">Bosh BT Earphone</a>
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
          <a href="{{ route('productDetails') }}" class="img-content">
            <img src="{{ asset('frontend/assets/images/product-3.png') }}" alt="">
          </a>
          <div class="text-content">
            <div>
              <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                <div >
                  <a class="title" href="{{ route('productDetails') }}">Bosh BT Earphone</a>
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
          <a href="{{ route('productDetails') }}" class="img-content">
            <img src="{{ asset('frontend/assets/images/product-4.png') }}" alt="">
          </a>
          <div class="text-content">
            <div class="text-content-top" >
              <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                <div >
                  <a class="title" href="{{ route('productDetails') }}">Bosh BT Earphone</a>
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
          <a href="{{ route('productDetails') }}" class="img-content">
            <img src="{{ asset('frontend/assets/images/product-1.png') }}" alt="">
          </a>
          <div class="text-content">
            <div>
              <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                <div >
                  <a class="title" href="{{ route('productDetails') }}">Bosh BT Earphone</a>
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
          <a href="{{ route('productDetails') }}" class="img-content">
            <img src="{{ asset('frontend/assets/images/product-2.png') }}" alt="">
          </a>
          <div class="text-content">
            <div>
              <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                <div >
                  <a class="title" href="{{ route('productDetails') }}">Bosh BT Earphone</a>
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
          <a href="{{ route('productDetails') }}" class="img-content">
            <img src="{{ asset('frontend/assets/images/product-3.png') }}" alt="">
          </a>
          <div class="text-content">
            <div>
              <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                <div >
                  <a class="title" href="{{ route('productDetails') }}">Bosh BT Earphone</a>
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
          <a href="{{ route('productDetails') }}" class="img-content">
            <img src="{{ asset('frontend/assets/images/product-4.png') }}" alt="">
          </a>
          <div class="text-content">
            <div class="text-content-top" >
              <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                <div >
                  <a class="title" href="{{ route('productDetails') }}">Bosh BT Earphone</a>
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
          <a href="{{ route('productDetails') }}" class="img-content">
            <img src="{{ asset('frontend/assets/images/product-1.png') }}" alt="">
          </a>
          <div class="text-content">
            <div>
              <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                <div >
                  <a class="title" href="{{ route('productDetails') }}">Bosh BT Earphone</a>
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
          <a href="{{ route('productDetails') }}" class="img-content">
            <img src="{{ asset('frontend/assets/images/product-2.png') }}" alt="">
          </a>
          <div class="text-content">
            <div>
              <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                <div >
                  <a class="title" href="{{ route('productDetails') }}">Bosh BT Earphone</a>
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
          <a href="{{ route('productDetails') }}" class="img-content">
            <img src="{{ asset('frontend/assets/images/product-3.png') }}" alt="">
          </a>
          <div class="text-content">
            <div>
              <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                <div >
                  <a class="title" href="{{ route('productDetails') }}">Bosh BT Earphone</a>
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
          <a href="{{ route('productDetails') }}" class="img-content">
            <img src="{{ asset('frontend/assets/images/product-4.png') }}" alt="">
          </a>
          <div class="text-content">
            <div class="text-content-top" >
              <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                <div >
                  <a class="title" href="{{ route('productDetails') }}">Bosh BT Earphone</a>
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
      <a href="" class="section-btn mt-5">See More</a>
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
