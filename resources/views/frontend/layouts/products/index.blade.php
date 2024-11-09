@extends('frontend.main')

@section('title', 'Products')

@push('styles')

@endpush

@section('content')
<div class="section-padding-x">
    <div class="section-sub-title mt-3 lg-mt-5">
      Filter Products
    </div>
      <div class="products-filter-container mt-3 lg-mt-5">
        <div class="product-filter">
          <div class="accordion" id="accordionExample">
            @if($categories->count() > 0)
            @foreach ($categories as $key => $item)
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                  {{ $item->name }}
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="filter-items">
                    @php
                    $subcategories = DB::table('sub_categories')->where('category_id', $item->id)->get();
                    @endphp
                    @if($subcategories->count() > 0)
                    @foreach ($subcategories as $subCategory)
                    <div class="item">
                      <input class="form-check-input" type="checkbox" id="essentials">
                      <label for="essentials">{{ $subCategory->name }}</label>
                    </div>
                    @endforeach
                    @endif
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @endif

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
        @if($products->count() > 0)
        @foreach ($products as $product)
        <div class="item">
          <a href="" class="img-content">
            <img src="{{ asset($product->thumbnail ?? 'frontend/assets/images/product-1.png') }}" alt="">
          </a>
          <div class="text-content">
            <div>
              <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                <div >
                  <a class="title" href="{{ route('productDetails', $product->slug) }}">{{ substr($product->title ,0 ,25) }}</a>
                </div>
                <div class="price">${{ $product->customer_price }}</div>
              </div>
              <div class="text mt-1">
                {{ substr($product->short_description ,0 ,120) }}...
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
        @endforeach
        @endif
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
    <script src="{{ asset('frontend/assets/js/tarek.js') }}"></script>
    <script>
        document.querySelectorAll('.side-products .item').forEach(item => {
            item.addEventListener('click', function() {
                // Remove 'active' class from all items
                document.querySelectorAll('.side-products .item').forEach(i => i.classList.remove(
                'active'));

                // Add 'active' class to the clicked item
                this.classList.add('active');

                // Get the clicked item's image src
                const newSrc = this.querySelector('img').getAttribute('src');

                // Update the main product image
                document.getElementById('main-product-img').setAttribute('src', newSrc);
            });
        });

        // for update product quantity

        // Select the elements
        const plusBtn = document.getElementById("product-details-plus-btn");
        const minusBtn = document.getElementById("product-details-minus-btn");
        const quantityInput = document.getElementById("product-details-quantity-input");

        // Update UI function
        function updateQuantity(value) {
            quantityInput.value = value;
        }

        // Increment function
        plusBtn.addEventListener("click", () => {
            let currentValue = parseInt(quantityInput.value) || 1; // Default to 1 if value is NaN
            currentValue++;
            updateQuantity(currentValue);
        });

        // Decrement function
        minusBtn.addEventListener("click", () => {
            let currentValue = parseInt(quantityInput.value) || 1; // Default to 1 if value is NaN
            if (currentValue > 1) { // Prevent going below 1
                currentValue--;
                updateQuantity(currentValue);
            }
        });

        // Manual input - allow typing freely but validate on blur or Enter key
        quantityInput.addEventListener("input", () => {
            // Allow typing, don't validate immediately to prevent issues like typing "20"
        });

        // Validate input when user leaves the input field (blur event) or presses Enter
        quantityInput.addEventListener("blur", () => {
            validateQuantity();
        });

        quantityInput.addEventListener("keydown", (e) => {
            if (e.key === "Enter") {
                validateQuantity();
            }
        });

        // Function to validate the input and update the UI
        function validateQuantity() {
            let inputValue = parseInt(quantityInput.value);
            if (isNaN(inputValue) || inputValue < 1) { // Default to 1 if input is invalid
                updateQuantity(1);
            } else {
                updateQuantity(inputValue);
            }
        }


        //   update size input
        const sizeElements = document.querySelectorAll('.size');
        const inputElement = document.getElementById('product-size');
        sizeElements.forEach(size => {
            size.addEventListener('click', function() {
                // Remove 'active' class from all sizes
                sizeElements.forEach(s => s.classList.remove('active'));

                // Add 'active' class to clicked size
                this.classList.add('active');

                // Set hidden input value to clicked size's id
                inputElement.value = this.id;
            });
        });
    </>
@endpush
