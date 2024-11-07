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
            <h1>Privacy Statement</h1>
            <h2>1. Introduction</h2>
            <p>This Privacy Policy explains how we collect, use,
                disclose, and protect your personal information when you
                use the Signage Booking Website ShaShh.</p>

            <h2>2. Information We Collect</h2>
            <p>We collect information that you provide to us when you
                create an account, make a booking, or upload content.
                This may include your name, email address, payment
                information, and any other information you choose to
                provide.</p>

            <h2>3. Use of Information</h2>
            <p>We use the information we collect to provide and improve
                our services, process payments, communicate with you,
                and for other customer service purposes. We may also use
                your information for marketing and promotional
                purposes.</p>

            <h2>4. Disclosure of Information</h2>
            <p>We may disclose your information to third parties in the
                following circumstances:</p>
            <ul>
                <li>To service providers who perform services on our
                    behalf.</li>
                <li>To comply with legal obligations.</li>
                <li>To protect our rights and property.</li>
            </ul>

            <h2>5. Security</h2>
            <p>We take reasonable measures to protect your personal
                information from unauthorized access, use, or
                disclosure. However, no internet-based service can be
                completely secure, and we cannot guarantee the absolute
                security of your information.</p>

            <h2>6. Your Rights</h2>
            <p>You have the right to access, correct, or delete your
                personal information. You can exercise these rights by
                contacting us at support@shashh.com.</p>

            <h2>7. Changes to Privacy Policy</h2>
            <p>We may update this Privacy Policy from time to time. Any
                changes will be posted on the App, and your continued
                use of the App after such changes have been posted will
                constitute your acceptance of the changes.</p>
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
