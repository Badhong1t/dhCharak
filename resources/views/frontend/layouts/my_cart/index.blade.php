@extends('frontend.main')

@section('title', 'My Cart')

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
<div class="section-padding-x m-top">
    <div class="section-title">
        Your Cart
    </div>
    <div class="d-flex align-items-center justify-content-between mt-2 mt-lg-4">
        <div class="section-text">There are 2 products in your cart</div>
        <a style="cursor: pointer;" class="d-flex align-items-center gap-2"  href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M2.5 5H4.16667H17.5" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.8337 5.00008V16.6667C15.8337 17.1088 15.6581 17.5327 15.3455 17.8453C15.0329 18.1578 14.609 18.3334 14.167 18.3334H5.83366C5.39163 18.3334 4.96771 18.1578 4.65515 17.8453C4.34259 17.5327 4.16699 17.1088 4.16699 16.6667V5.00008M6.66699 5.00008V3.33341C6.66699 2.89139 6.84259 2.46746 7.15515 2.1549C7.46771 1.84234 7.89163 1.66675 8.33366 1.66675H11.667C12.109 1.66675 12.5329 1.84234 12.8455 2.1549C13.1581 2.46746 13.3337 2.89139 13.3337 3.33341V5.00008" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.33301 9.16675V14.1667" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M11.667 9.16675V14.1667" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="section-text" >Clear Cart</span>
        </a>
    </div>

    <!-- cart table start -->
    <div class="data-table mt-2 mt-lg-5 table-responsive">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">
                    <input class="form-check-input" type="checkbox" name="" id="">
                </th>
                <th scope="col">
                    Product
                </th>
                <th scope="col">Unit Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Sub Total</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                    <input class="form-check-input" type="checkbox" name="" id="">
                </td>
                <td>
                    <div class="table-product-container">
                        <div class="cart-table-img">
                            <img src="{{ asset('frontend/assets/images/details-side-img-1.png') }}" alt="">
                        </div>
                        <div class="cart-product-title">
                            Bosh BT Earphone
                        </div>
                    </div>

                </td>
                <td>$30</td>
                <td>
                    <div class="product-details-quantity-container d-flex align-items-center gap-3 ">
                        <div class="decrease-btn">-</div>
                        <div class="product-details-quantity">
                          <input class="product-details-quantity-input" value="1" min="1" type="number">
                        </div>
                        <div class="increase-btn">+</div>
                    </div>
                </td>
                <td>
                    $300
                </td>
                <td>
                    <svg style="cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M3 5.5H4.66667H18" stroke="#F64C4C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.3337 5.50008V17.1667C16.3337 17.6088 16.1581 18.0327 15.8455 18.3453C15.5329 18.6578 15.109 18.8334 14.667 18.8334H6.33366C5.89163 18.8334 5.46771 18.6578 5.15515 18.3453C4.84259 18.0327 4.66699 17.6088 4.66699 17.1667V5.50008M7.16699 5.50008V3.83341C7.16699 3.39139 7.34259 2.96746 7.65515 2.6549C7.96771 2.34234 8.39163 2.16675 8.83366 2.16675H12.167C12.609 2.16675 13.0329 2.34234 13.3455 2.6549C13.6581 2.96746 13.8337 3.39139 13.8337 3.83341V5.50008" stroke="#F64C4C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.83301 9.66675V14.6667" stroke="#F64C4C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.167 9.66675V14.6667" stroke="#F64C4C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </td>
              </tr>
              <tr>
                <td>
                    <input class="form-check-input" type="checkbox" name="" id="">
                </td>
                <td>
                    <div class="table-product-container">
                        <div class="cart-table-img">
                            <img src="{{ asset('frontend/assets/images/details-side-img-1.png') }}" alt="">
                        </div>
                        <div class="cart-product-title">
                            Bosh BT Earphone
                        </div>
                    </div>

                </td>
                <td>$30</td>
                <td>
                    <div class="product-details-quantity-container d-flex align-items-center gap-3 ">
                        <div class="decrease-btn">-</div>
                        <div class="product-details-quantity">
                          <input class="product-details-quantity-input" value="1" min="1" type="number">
                        </div>
                        <div class="increase-btn">+</div>
                    </div>
                </td>
                <td>
                    $300
                </td>
                <td>
                    <svg style="cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M3 5.5H4.66667H18" stroke="#F64C4C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.3337 5.50008V17.1667C16.3337 17.6088 16.1581 18.0327 15.8455 18.3453C15.5329 18.6578 15.109 18.8334 14.667 18.8334H6.33366C5.89163 18.8334 5.46771 18.6578 5.15515 18.3453C4.84259 18.0327 4.66699 17.6088 4.66699 17.1667V5.50008M7.16699 5.50008V3.83341C7.16699 3.39139 7.34259 2.96746 7.65515 2.6549C7.96771 2.34234 8.39163 2.16675 8.83366 2.16675H12.167C12.609 2.16675 13.0329 2.34234 13.3455 2.6549C13.6581 2.96746 13.8337 3.39139 13.8337 3.83341V5.50008" stroke="#F64C4C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.83301 9.66675V14.6667" stroke="#F64C4C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.167 9.66675V14.6667" stroke="#F64C4C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </td>
              </tr>
            </tbody>
        </table>
    </div>
    <!-- cart table end -->

    <!-- cart calculation start -->
     <div class="cart-calculation-container ms-auto">
          <div class="cart-calculation">
            <div class="item">
                <span>Sub Total</span>
                <span>$619</span>
            </div>
            <div class="item">
                <span>Dispatch Fee</span>
                <span>$25</span>
            </div>
            <div class="item total">
                <span>Total</span>
                <span>$644</span>
            </div>
          </div>
          <div class="d-flex flex-column ">
            <a href="{{ route('checkout') }}" class="section-btn text-center w-100 mt-4">Proceed to checkout</a>
            <a style="color: #FB8C00;" href="{{ route('home') }}" class="section-btn bg-white text-center w-100 mt-4">Continue Shopping</a>
          </div>
     </div>
    <!-- cart calculation end -->

 </div>
<!-- cart content end -->

<!-- products container start -->
 <div class="section-padding-x m-top m-bottom">
  <div class="section-sub-title">
    Featured Products
  </div>
  <div class="products-container">
    <div class="item">
      <a href="./product-details.html" class="img-content">
        <img src="{{ asset('frontend/assets/images/product-1.png') }}" alt="">
      </a>
      <div class="text-content">
        <div>
          <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
            <div >
              <a class="title" href="./product-details.html">Bosh BT Earphone</a>
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
          <a href="" class="action-btn">
            Add to cart
          </a>
        </div>
      </div>
    </div>
    <div class="item">
      <a href="./product-details.html" class="img-content">
        <img src="{{ asset('frontend/assets/images/product-2.png') }}" alt="">
      </a>
      <div class="text-content">
        <div>
          <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
            <div >
              <a class="title" href="./product-details.html">Bosh BT Earphone</a>
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
          <a href="" class="action-btn">
            Add to cart
          </a>
        </div>
      </div>
    </div>
    <div class="item">
      <a href="./product-details.html" class="img-content">
        <img src="{{ asset('frontend/assets/images/product-3.png') }}" alt="">
      </a>
      <div class="text-content">
        <div>
          <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
            <div >
              <a class="title" href="./product-details.html">Bosh BT Earphone</a>
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
          <a href="" class="action-btn">
            Add to cart
          </a>
        </div>
      </div>
    </div>
    <div class="item">
      <a href="./product-details.html" class="img-content">
        <img src="{{ asset('frontend/assets/images/product-4.png') }}" alt="">
      </a>
      <div class="text-content">
        <div class="text-content-top" >
          <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
            <div >
              <a class="title" href="./product-details.html">Bosh BT Earphone</a>
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
          <a href="" class="action-btn">
            Add to cart
          </a>
        </div>
      </div>
    </div>
    <div class="item">
      <a href="./product-details.html" class="img-content">
        <img src="{{ asset('frontend/assets/images/product-1.png') }}" alt="">
      </a>
      <div class="text-content">
        <div>
          <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
            <div >
              <a class="title" href="./product-details.html">Bosh BT Earphone</a>
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
          <a href="" class="action-btn">
            Add to cart
          </a>
        </div>
      </div>
    </div>
    <div class="item">
      <a href="./product-details.html" class="img-content">
        <img src="{{ asset('frontend/assets/images/product-2.png') }}" alt="">
      </a>
      <div class="text-content">
        <div>
          <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
            <div >
              <a class="title" href="./product-details.html">Bosh BT Earphone</a>
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
          <a href="" class="action-btn">
            Add to cart
          </a>
        </div>
      </div>
    </div>
    <div class="item">
      <a href="./product-details.html" class="img-content">
        <img src="{{ asset('frontend/assets/images/product-3.png') }}" alt="">
      </a>
      <div class="text-content">
        <div>
          <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
            <div >
              <a class="title" href="./product-details.html">Bosh BT Earphone</a>
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
          <a href="" class="action-btn">
            Add to cart
          </a>
        </div>
      </div>
    </div>
    <div class="item">
      <a href="./product-details.html" class="img-content">
        <img src="{{ asset('frontend/assets/images/product-4.png') }}" alt="">
      </a>
      <div class="text-content">
        <div class="text-content-top" >
          <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
            <div >
              <a class="title" href="./product-details.html">Bosh BT Earphone</a>
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
          <a href="" class="action-btn">
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
