@extends('frontend.main')

@section('title', 'Product Details')

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
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/product.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}" />
@endpush

@section('content')
    <div class="product-details-container section-padding-x m-top m-bottom ">
        <div class="left">
            <div class="side-products">
                @if ($product->images->count() > 0)
                    @foreach ($product->images as $key => $image)
                        <div class="item {{ $key == 0 ? 'active' : '' }} ">
                            <img src="{{ asset($image->image_url) }}" alt="">
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="product-img">
                <img id="main-product-img"
                    src="{{ asset($product->thumbnail) ? asset($product->thumbnail) : asset('frontend/assets/images/product-1.png') }}"
                    alt="">
            </div>
        </div>
        <div class="right">
            <div class="section-title">
                {{ $product->title ?? '' }}
            </div>
            <div class="product-price mt-4">
                ${{ $product->customer_price ?? '' }}
            </div>
            <div class="section-text mt-3 mb-5">
                {{ $product->short_description ?? '' }}
            </div>
            <div class="sizes-container">
                <input id="product-size" value="" type="hidden" name="product-size">
                <div class="title">Size:</div>
                @if ($product->attribute_value->count() > 0)
                    @foreach ($product->attribute_value as $key => $attribute_value)
                        <div id="{{ $attribute_value->value->id }}" class="size {{ $key == 0 ? 'active' : '' }}">
                            {{ $attribute_value->type == 'size' ? $attribute_value->value->value : '' }}</div>
                    @endforeach
                @endif
                {{--  <div id="s" class="size">s</div>
            <div id="m" class="size">m</div>
            <div id="l" class="size">l</div>
            <div id="xl" class="size">xl</div>  --}}
            </div>
            <div class="product-details-quantity-container d-flex align-items-center gap-3 mt-5 mb-3">
                <div id="product-details-minus-btn" class="decrease-btn">-</div>
                <div class="product-details-quantity">
                    <input id="product-details-quantity-input" value="1" min="1" type="number">
                </div>
                <div id="product-details-plus-btn" class="increase-btn">+</div>
            </div>
            <button class="section-btn mt-4">Add to cart</button>
        </div>
    </div>
    <!-- product-details-container end -->

    <!-- description start -->
    <div class="section-padding-x m-top m-bottom">
        <div class="product-description-container  ">
            <div class="section-title">
                Product Description
            </div>
            <div class="product-description-list">
                <div class="item">
                    <div class="text mt-2 lg-mt-4">
                        {!! $product->description !!}
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
                            <div>
                                <a class="title" href="">Bosh BT Earphone</a>
                            </div>
                            <div class="price">$29</div>
                        </div>
                        <div class="text mt-1">
                            Noise cancelation Bluetooth headphone.
                        </div>
                    </div>
                    <div class="action">
                        <div class="product-quantity-container">
                            <input value="1" type="hidden" class="product-final-quantity" name="">
                            <div class="quantity-btn">
                                <span class="product-quantity">1</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path d="M4 6L8 10L12 6" stroke="black" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="quantity-modal">
                                <div class="quantity-number">1</div>
                                <div class="quantity-number">2</div>
                                <div class="quantity-number">3</div>
                                <div class="quantity-number">4</div>
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
                            <div>
                                <a class="title" href="">Bosh BT Earphone</a>
                            </div>
                            <div class="price">$29</div>
                        </div>
                        <div class="text mt-1">
                            Noise cancelation Bluetooth headphone
                        </div>
                    </div>
                    <div class="action">
                        <div class="product-quantity-container">
                            <input value="1" type="hidden" class="product-final-quantity" name="">
                            <div class="quantity-btn">
                                <span class="product-quantity">1</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path d="M4 6L8 10L12 6" stroke="black" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="quantity-modal">
                                <div class="quantity-number">1</div>
                                <div class="quantity-number">2</div>
                                <div class="quantity-number">3</div>
                                <div class="quantity-number">4</div>
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
                            <div>
                                <a class="title" href="">Bosh BT Earphone</a>
                            </div>
                            <div class="price">$29</div>
                        </div>
                        <div class="text mt-1">
                            Noise cancelation Bluetooth headphone
                        </div>
                    </div>
                    <div class="action">
                        <div class="product-quantity-container">
                            <input value="1" type="hidden" class="product-final-quantity" name="">
                            <div class="quantity-btn">
                                <span class="product-quantity">1</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path d="M4 6L8 10L12 6" stroke="black" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="quantity-modal">
                                <div class="quantity-number">1</div>
                                <div class="quantity-number">2</div>
                                <div class="quantity-number">3</div>
                                <div class="quantity-number">4</div>
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
                    <div class="text-content-top">
                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                            <div>
                                <a class="title" href="">Bosh BT Earphone</a>
                            </div>
                            <div class="price">$29</div>
                        </div>
                        <div class="text mt-1">
                            Noise cancelation Bluetooth headphone
                        </div>
                    </div>
                    <div class="action">
                        <div class="product-quantity-container">
                            <input value="1" type="hidden" class="product-final-quantity" name="">
                            <div class="quantity-btn">
                                <span class="product-quantity">1</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path d="M4 6L8 10L12 6" stroke="black" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="quantity-modal">
                                <div class="quantity-number">1</div>
                                <div class="quantity-number">2</div>
                                <div class="quantity-number">3</div>
                                <div class="quantity-number">4</div>
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
                            <div>
                                <a class="title" href="">Bosh BT Earphone</a>
                            </div>
                            <div class="price">$29</div>
                        </div>
                        <div class="text mt-1">
                            Noise cancelation Bluetooth headphone.
                        </div>
                    </div>
                    <div class="action">
                        <div class="product-quantity-container">
                            <input value="1" type="hidden" class="product-final-quantity" name="">
                            <div class="quantity-btn">
                                <span class="product-quantity">1</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path d="M4 6L8 10L12 6" stroke="black" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="quantity-modal">
                                <div class="quantity-number">1</div>
                                <div class="quantity-number">2</div>
                                <div class="quantity-number">3</div>
                                <div class="quantity-number">4</div>
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
                            <div>
                                <a class="title" href="">Bosh BT Earphone</a>
                            </div>
                            <div class="price">$29</div>
                        </div>
                        <div class="text mt-1">
                            Noise cancelation Bluetooth headphone
                        </div>
                    </div>
                    <div class="action">
                        <div class="product-quantity-container">
                            <input value="1" type="hidden" class="product-final-quantity" name="">
                            <div class="quantity-btn">
                                <span class="product-quantity">1</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path d="M4 6L8 10L12 6" stroke="black" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="quantity-modal">
                                <div class="quantity-number">1</div>
                                <div class="quantity-number">2</div>
                                <div class="quantity-number">3</div>
                                <div class="quantity-number">4</div>
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
                            <div>
                                <a class="title" href="">Bosh BT Earphone</a>
                            </div>
                            <div class="price">$29</div>
                        </div>
                        <div class="text mt-1">
                            Noise cancelation Bluetooth headphone
                        </div>
                    </div>
                    <div class="action">
                        <div class="product-quantity-container">
                            <input value="1" type="hidden" class="product-final-quantity" name="">
                            <div class="quantity-btn">
                                <span class="product-quantity">1</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path d="M4 6L8 10L12 6" stroke="black" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="quantity-modal">
                                <div class="quantity-number">1</div>
                                <div class="quantity-number">2</div>
                                <div class="quantity-number">3</div>
                                <div class="quantity-number">4</div>
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
                    <div class="text-content-top">
                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between ">
                            <div>
                                <a class="title" href="">Bosh BT Earphone</a>
                            </div>
                            <div class="price">$29</div>
                        </div>
                        <div class="text mt-1">
                            Noise cancelation Bluetooth headphone
                        </div>
                    </div>
                    <div class="action">
                        <div class="product-quantity-container">
                            <input value="1" type="hidden" class="product-final-quantity" name="">
                            <div class="quantity-btn">
                                <span class="product-quantity">1</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path d="M4 6L8 10L12 6" stroke="black" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="quantity-modal">
                                <div class="quantity-number">1</div>
                                <div class="quantity-number">2</div>
                                <div class="quantity-number">3</div>
                                <div class="quantity-number">4</div>
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

        <div class="d-flex justify-content-center mt-5">
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
            Sign up to be the first to hear about exclusive offers, new product arrivals, and important updates. Join our
            community and get the latest deals delivered straight to your inbox.
        </div>
        <div class="d-flex justify-content-center mt-5">
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
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
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
    </script>
@endpush
