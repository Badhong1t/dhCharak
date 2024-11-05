@extends('backend.app')

@section('title', 'Profile')

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" type="text/css">
@endpush

@section('content')
    <main class="container-xxl flex-grow-1 container-p-y">
        <h2 class="section-title">Profile Settings</h2>

        <div class="d-flex align-items-center mb-4">
            <img id="profile-picture" class="rounded-circle me-3"
                src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : asset('backend/assets/images/dashboard-profile.png') }}"
                alt="Profile Picture" style="width: 64px; height: 64px;">

            <input type="file" id="profile-image-input" class="d-none">

            <button type="button" id="upload-button" class="btn btn-primary">Upload New Picture</button>
        </div>


        {{-- Tab list --}}
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="profile-setting-tab" data-bs-toggle="tab"
                    data-bs-target="#profile-setting" type="button" role="tab" aria-controls="profile-setting"
                    aria-selected="true">
                    Profile Settings
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-password-setting-tab" data-bs-toggle="tab"
                    data-bs-target="#profile-password-setting" type="button" role="tab"
                    aria-controls="profile-password-setting" aria-selected="false">
                    Update Password
                </button>
            </li>
        </ul>

        {{-- Tab content --}}
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="profile-setting" role="tabpanel"
                aria-labelledby="profile-setting-tab">
                <form action="{{ route('profile.update') }}" method="POST" class="tm-form mt-5"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-field-wrapper">
                        {{-- first name input field --}}
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name"
                                class="form-control @error('first_name') is-invalid @enderror" required
                                placeholder="Enter first name here" value="{{ old('first_name', $user->first_name) }}">
                            @error('first_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="form-field-wrapper">

                        {{-- last name input field --}}
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name"
                                class="form-control @error('last_name') is-invalid @enderror" required
                                placeholder="Enter last name here" value="{{ old('last_name', $user->last_name) }}">
                            @error('last_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="form-field-wrapper">

                        {{-- Phone input field --}}
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                required placeholder="000-000-0000" value="{{ old('phone', $user->phone) }}">
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="form-field-wrapper">

                        {{-- Email input field --}}
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                required placeholder="Email Address" value="{{ old('email', $user->email) }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>


                    <div class="form-field-wrapper">

                        {{-- address input field --}}
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                                required placeholder="Enter your address" value="{{ old('address', $user->address) }}">
                            @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <button type="submit" class="tm-dashboard-btn" style="align-self: flex-start;">Update</button>
                </form>
            </div>

            <div class="tab-pane fade" id="profile-password-setting" role="tabpanel"
                aria-labelledby="profile-password-setting-tab">
                <form action="{{ route('profile.password') }}" method="POST" class="tm-form mt-5">
                    @csrf
                    {{-- Old password input field --}}
                    <div class="user-box password-wrapper col-6">
                        <input type="password" name="old_password" required placeholder="Enter Old Password">
                        <button type="button" class="password-toggle-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20"
                                fill="none">
                                <path d="M2 1L20 19" stroke="#BFBFBF" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M9.58445 8.58704C9.20917 8.96205 8.99823 9.47079 8.99805 10.0013C8.99786 10.5319 9.20844 11.0408 9.58345 11.416C9.95847 11.7913 10.4672 12.0023 10.9977 12.0024C11.5283 12.0026 12.0372 11.7921 12.4125 11.417"
                                    stroke="#BFBFBF" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M8.363 3.36506C9.22042 3.11978 10.1082 2.9969 11 3.00006C15 3.00006 18.333 5.33306 21 10.0001C20.222 11.3611 19.388 12.5241 18.497 13.4881M16.357 15.3491C14.726 16.4491 12.942 17.0001 11 17.0001C7 17.0001 3.667 14.6671 1 10.0001C2.369 7.60506 3.913 5.82506 5.632 4.65906"
                                    stroke="#BFBFBF" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    @error('old_password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    {{-- New password input field --}}
                    <div class="user-box password-wrapper col-6">
                        <input type="password" name="password" id="new-password" required placeholder="New Password">
                        <button type="button" class="password-toggle-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20"
                                fill="none">
                                <path d="M2 1L20 19" stroke="#BFBFBF" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M9.58445 8.58704C9.20917 8.96205 8.99823 9.47079 8.99805 10.0013C8.99786 10.5319 9.20844 11.0408 9.58345 11.416C9.95847 11.7913 10.4672 12.0023 10.9977 12.0024C11.5283 12.0026 12.0372 11.7921 12.4125 11.417"
                                    stroke="#BFBFBF" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M8.363 3.36506C9.22042 3.11978 10.1082 2.9969 11 3.00006C15 3.00006 18.333 5.33306 21 10.0001C20.222 11.3611 19.388 12.5241 18.497 13.4881M16.357 15.3491C14.726 16.4491 12.942 17.0001 11 17.0001C7 17.0001 3.667 14.6671 1 10.0001C2.369 7.60506 3.913 5.82506 5.632 4.65906"
                                    stroke="#BFBFBF" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    {{-- Confirm password input field --}}
                    <div class="user-box password-wrapper col-6">
                        <input type="password" name="password_confirmation" required placeholder="Confirm Password">
                        <button type="button" class="password-toggle-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20"
                                fill="none">
                                <path d="M2 1L20 19" stroke="#BFBFBF" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M9.58445 8.58704C9.20917 8.96205 8.99823 9.47079 8.99805 10.0013C8.99786 10.5319 9.20844 11.0408 9.58345 11.416C9.95847 11.7913 10.4672 12.0023 10.9977 12.0024C11.5283 12.0026 12.0372 11.7921 12.4125 11.417"
                                    stroke="#BFBFBF" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M8.363 3.36506C9.22042 3.11978 10.1082 2.9969 11 3.00006C15 3.00006 18.333 5.33306 21 10.0001C20.222 11.3611 19.388 12.5241 18.497 13.4881M16.357 15.3491C14.726 16.4491 12.942 17.0001 11 17.0001C7 17.0001 3.667 14.6671 1 10.0001C2.369 7.60506 3.913 5.82506 5.632 4.65906"
                                    stroke="#BFBFBF" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="tm-dashboard-btn" style="align-self: flex-start;">Update
                        Password</button>
                </form>
            </div>
        </div>
    </main>
@endsection
@push('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
        <script>
            document.getElementById('upload-button').addEventListener('click', function() {
                document.getElementById('profile-image-input').click();
            });

            document.getElementById('profile-image-input').addEventListener('change', function() {
                let formData = new FormData();
                formData.append('profile_picture', this.files[0]);

                fetch("{{ route('profilePicture.update') }}", {
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            document.getElementById('profile-picture').src = data.image_url;
                            // alert('Photo uploaded successfully');
                        } else {
                            alert(data.message || 'Failed to upload photo');
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.dropify').dropify();
            });
        </script>
    @endpush
