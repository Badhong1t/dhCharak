@extends('frontend.main')

@section('title', 'Privacy Statement')

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
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}" /> --}}
@endpush

@section('content')
<section class="privacy-terms-section m-bottom">
    <div class="section-padding-x">
        <div class="tm-terms-privacy-statement">
            <h1>Terms & Conditions</h1>
            <h2>1. Introduction</h2>
            <p>Welcome to the Signage Booking Platform ShaShh. These
                Terms and Conditions govern your use of the Website and
                the services provided through it. By using the Website,
                you agree to comply with these Terms. If you do not
                agree with any part of these Terms, please do not use
                the App.</p>

            <h2>2. Services</h2>
            <p>The App allows users to locate, book, and make payments
                for public signage spaces. Additional services include
                content display, artwork services, and promotional
                features.</p>

            <h2>3. User Accounts</h2>
            <p>The App allows users to locate, book, and make payments
                for public signage spaces. Additional services include
                content display, artwork services, and promotional
                features.</p>

            <h2>4. Booking and Payments</h2>
            <p>All bookings and payments made through the App are
                subject to availability and confirmation. Payment
                methods include Mada, Visa, Mastercard, Apple Pay, and
                STC Pay.</p>

            <h2>5. Content Upload</h2>
            <p>Users can upload content (images or short videos) for
                display on public signage. All content must comply with
                our content guidelines, and we reserve the right to
                remove any content that violates these guidelines.</p>

            <h2>6. Cancellations and Refunds</h2>
            <p>Bookings can be canceled according to our Refund Policy.
                Refunds will be processed as per the conditions outlined
                in the Refund Policy.</p>

            <h2>7. Intellectual Property</h2>
            <p>All content and materials available on the App, including
                but not limited to text, graphics, logos, and software,
                are the property of the App or its licensors and are
                protected by copyright and other intellectual property
                laws.</p>

            <h2>8. Limitation of Liability</h2>
            <p>Bookings can be canceled according to our Refund Policy.
                Refunds will be processed as per the conditions outlined
                in the Refund Policy.</p>

            <h2>9. Governing Law</h2>
            <p>These Terms are governed by and construed in accordance
                with the laws of Saudi Arabia. Any disputes arising
                under these Terms shall be subject to the exclusive
                jurisdiction of the courts of Saudi Arabia.</p>

            <h2>10. Changes to Terms</h2>
            <p>We reserve the right to modify these Terms at any time.
                Any changes will be posted on the App, and your
                continued use of the App after such changes have been
                posted will constitute your acceptance of the
                changes.</p>
        </div>
    </div>
</section>
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
