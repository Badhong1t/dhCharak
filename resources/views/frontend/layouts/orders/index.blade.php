@extends('frontend.main')

@section('title', 'My Cart')

@push('styles')
    <!-- ==== All Css Links ==== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/aos.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/magnific-popup.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins/nice-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/fontawesome.min.css') }}">

    <!-- All custom CSS Links -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/helper.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/common.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/tarek.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/product.css') }}" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}" />
@endpush

@section('content')
    <main>
        <section class="account-details-section m-top m-bottom">
            <div class="section-padding-x">
                <h2 class="common-heading-2 text-start mb-3">Account</h2>
                <div class="account-details-content-wrapper d-flex align-items-baseline">
                    <div class="menu-wrapper d-flex flex-column">
                        <a class="menu-wrapper-item" href="{{ route('accountDetails') }}">Account Details</a>
                        <a class="menu-wrapper-item active" href="{{ route('orders') }}">Orders</a>
                        <button class="menu-wrapper-item">Logout</button>
                    </div>
                    <div class="details-component overflow-hidden">
                        <div class="order-table-container table-responsive">
                            <table class="order-table">
                                <thead>
                                    <tr class="tm-tr">
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tm-tr">
                                        <td>#1921</td>
                                        <td>March 12, 2025</td>
                                        <td>Processing</td>
                                        <td>$125.0 for 2 items</td>
                                        <td><a href="#" class="view-link">View</a></td>
                                    </tr>
                                    <tr class="tm-tr">
                                        <td>#1921</td>
                                        <td>March 12, 2025</td>
                                        <td>Processing</td>
                                        <td>$125.0 for 2 items</td>
                                        <td><a href="#" class="view-link">View</a></td>
                                    </tr>
                                    <tr class="tm-tr">
                                        <td>#1921</td>
                                        <td>March 12, 2025</td>
                                        <td>Processing</td>
                                        <td>$125.0 for 2 items</td>
                                        <td><a href="#" class="view-link">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
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
