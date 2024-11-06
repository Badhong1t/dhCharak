<footer>
    <div class="footer-container section-padding-x">
        <div class="footer-col">
            <a href="index.html" class="footer-logo">
            <img src="{{ asset('frontend/assets/images/bulksail-01 [Converted] 2.png') }}"
                    alt="site_logo" srcset>
            </a>
            <p class="common-para footer-para">Bulksail connects
                distributors and
                retailers across the islands, providing a seamless
                platform for
                sourcing products and managing inventory. Simplifying
                cross-island
                trade, we help businesses access goods from Puerto Rico
                with
                ease.</p>
        </div>
        <div class="footer-col">
            <h3>Quick links</h3>
            <ul>
                <li><a href="./products.html">Products</a></li>
                <li><a href="./special-order.html">Special orders</a></li>
                <li><a href="./how-works.html">How it works</a></li>
                <li><a href="./delivery-schedule.html">Delivery Schedule</a></li>
                <li><a href="./pickup-locations.html">Pickup location</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>About us</h3>
            <ul>
                <li><a href="{{ route('termsAndConditions') }}">Terms & Conditions</a></li>
                <li><a href="{{ route('privacyStatement') }}">Privacy Statement</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Follow Us on</h3>
            <div class="footer-social-icons">
                <a href="#"><img src="{{ asset('frontend/assets/images/Facebook.png') }}" alt
                        srcset></a>
                <a href="#"><img src="{{ asset('frontend/assets/images/instagram.png') }}" alt
                        srcset></a>
            </div>
        </div>
        <!-- <div class="footer-col payment-partner-wrapper">
            <div class="payment-partner-item">
                <h3>Payment Methods</h3>
                <div class="payment-methods">
                    <img src="{{ asset('frontend/assets/images/Payment method icon.svg') }}"
                        alt="visa">
                    <img src="{{ asset('frontend/assets/images/mastercard.svg') }}"
                        alt="mastercard">
                    <img src="{{ asset('frontend/assets/images/paypal.svg') }}" alt="paypal">
                </div>
            </div>
            <div class="payment-partner-item">
                <h3>Our partners</h3>
                <div class="partners">
                    <img src="{{ asset('frontend/assets/images/google.png') }}" alt="Google">
                    <img src="{{ asset('frontend/assets/images/logo bg subtract.png') }}"
                        alt="Walmart">
                </div>
            </div>
        </div> -->
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024-2025 Bulksail All Rights Reserved</p>
    </div>
</footer>
