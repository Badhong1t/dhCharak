@extends('frontend.main')
@push('styles')
    <!-- All custom CSS Links -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/helper.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/tarek.css') }}" />
@endpush
@section('title', 'Profile')

@section('content')

<!-- main area starts -->
    <main>
      <section class="account-details-section m-top m-bottom overflow-hidden">
        <div class="section-padding-x">
          <h2 class="common-heading-2 text-start mb-3">Account</h2>
          <div class="account-details-content-wrapper d-flex ">
            <div class="menu-wrapper d-flex flex-column">
              <a class="menu-wrapper-item active"
                href="account-details.html">Account Details</a>
              <a class="menu-wrapper-item"
                href="order.html">Orders</a>
              <a href="{{ route('user.logout') }}" class="menu-wrapper-item">Logout</a>
            </div>
            <div class="details-component">
              <form class="login-form">
                <div
                  class="account-details-edit-wrapper d-flex justify-content-between align-items-center">
                  <p class="common-para fw-700">Personal
                    Information's</p>
                  <!-- <button
                    class="border-0 bg-body common-para">
                    <svg xmlns="http://www.w3.org/2000/svg"
                      width="24" height="24"
                      viewBox="0 0 24 24" fill="none">
                      <path
                        d="M12 3.99985H6C4.89543 3.99985 4 4.89528 4 5.99985V17.9998C4 19.1044 4.89543 19.9998 6 19.9998H18C19.1046 19.9998 20 19.1044 20 17.9998V11.9998M18.4142 8.41405L19.5 7.32829C20.281 6.54724 20.281 5.28092 19.5 4.49988C18.7189 3.71883 17.4526 3.71883 16.6715 4.49989L15.5858 5.58563M18.4142 8.41405L12.3779 14.4504C12.0987 14.7296 11.7431 14.9199 11.356 14.9974L8.41422 15.5857L9.00257 12.644C9.08001 12.2568 9.27032 11.9012 9.54951 11.622L15.5858 5.58563M18.4142 8.41405L15.5858 5.58563"
                        stroke="#333333"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg> Edit
                  </button> -->
                </div>

                <div class="tm-form-main-input-wrapper">
                  <div class="account-type-island-wrapper">
                    <!-- Account Type -->
                    <div class="tm-input-group account-type-div">
                      <label>Account Type<span>*</span></label>
                      <div class="account-type-options">
                        <label
                          class="tm-option-label checkbox style-c tm-style-c-checkbox"
                          id="terms">
                          <input type="radio"
                            name="accountType"
                            value="customer" checked />
                          <div class="checkbox__checkmark rounded-circle"></div>
                          I am a
                          customer<span>*</span>
                        </label>
                        <label
                          class="tm-option-label checkbox style-c tm-style-c-checkbox"
                          id="terms">
                          <input type="radio"
                            name="accountType"
                            value="business" />
                          <div class="checkbox__checkmark rounded-circle"></div>
                          Business
                          account
                        </label>
                      </div>
                    </div>

                    <!-- Island selection -->
                    <div class="tm-input-group island-div">
                      <label for="island">Select your
                        Island<span>*</span></label>
                      <select id="island"
                        class="tm-select-island">
                        <option value>Your
                          Island</option>
                        <option value="island1">Island
                          1</option>
                        <option value="island2">Island
                          2</option>
                      </select>
                    </div>
                  </div>

                  <!-- Business Name (conditionally displayed for business accounts) -->
                  <div
                    class="tm-input-group business-fields tm-hidden">
                    <label for="businessName">Business
                      Name<span>*</span></label>
                    <input type="text" id="businessName"
                      placeholder="Business Name">
                  </div>

                  <!-- First and Last Name -->
                  <div class="tm-input-group">
                    <label for="firstName">First
                      Name<span>*</span></label>
                    <input type="text" id="firstName"
                      placeholder="First Name">
                  </div>
                  <div class="tm-input-group">
                    <label for="lastName">Last
                      Name<span>*</span></label>
                    <input type="text" id="lastName"
                      placeholder="Last Name">
                  </div>

                  <!-- User Name -->
                  <div class="tm-input-group">
                    <label for="username">User
                      Name<span>*</span></label>
                    <input type="text" id="username"
                      placeholder="Adam_Smith">
                  </div>

                  <!-- Email -->
                  <div class="tm-input-group">
                    <label
                      for="email">Email<span>*</span></label>
                    <input type="email" id="email"
                      placeholder="adam_smith@email.com">
                  </div>

                  <!-- Phone Number -->
                  <div class="tm-input-group">
                    <label for="phone">Phone
                      Number<span>*</span></label>
                    <input type="text" id="phone"
                      placeholder="+669-789213">
                  </div>

                  <!-- Address -->
                  <div class="tm-input-group">
                    <label
                      for="address">Address<span>*</span></label>
                    <input type="text" id="address"
                      placeholder="21st Street, 5 No House">
                  </div>
                </div>

                <div
                  class="account-details-edit-wrapper d-flex justify-content-between align-items-center mt-5">
                  <p class="common-para fw-700">Change Password</p>
                  <!-- <button
                    class="border-0 bg-body common-para">
                    <svg xmlns="http://www.w3.org/2000/svg"
                      width="24" height="24"
                      viewBox="0 0 24 24" fill="none">
                      <path
                        d="M12 3.99985H6C4.89543 3.99985 4 4.89528 4 5.99985V17.9998C4 19.1044 4.89543 19.9998 6 19.9998H18C19.1046 19.9998 20 19.1044 20 17.9998V11.9998M18.4142 8.41405L19.5 7.32829C20.281 6.54724 20.281 5.28092 19.5 4.49988C18.7189 3.71883 17.4526 3.71883 16.6715 4.49989L15.5858 5.58563M18.4142 8.41405L12.3779 14.4504C12.0987 14.7296 11.7431 14.9199 11.356 14.9974L8.41422 15.5857L9.00257 12.644C9.08001 12.2568 9.27032 11.9012 9.54951 11.622L15.5858 5.58563M18.4142 8.41405L15.5858 5.58563"
                        stroke="#333333"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg> Edit
                  </button> -->
                </div>

                <div class="tm-form-main-input-wrapper">

                  <!-- Current Password -->
                  <div class="tm-input-group">
                    <label for="currentPassword">Current
                      Password<span>*</span></label>
                    <input type="password"
                      id="currentPassword"
                      placeholder="**********">
                  </div>

                  <!-- New Password -->
                  <div class="tm-input-group">
                    <label for="newPassword">New
                      Password<span>*</span></label>
                    <input type="password" id="newPassword"
                      placeholder="**********">
                  </div>

                  <!-- Confirm Password -->
                  <div class="tm-input-group">
                    <label for="confirmPassword">Confirm
                      Password<span>*</span></label>
                    <input type="password"
                      id="confirmPassword"
                      placeholder="**********">
                  </div>
                </div>
                <!-- Terms & Submit Button -->
                <div class="options">

                </div>
                <button type="submit" class="common-btn-2 w-100"
                  id="submitBtn@">Save Changes</button>
              </form>
            </div>
          </div>
        </div>
      </section>

    </main>
    <!-- main area ends -->

@endsection
@push('scripts')
      <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/tarek.js') }}"></script>
@endpush
