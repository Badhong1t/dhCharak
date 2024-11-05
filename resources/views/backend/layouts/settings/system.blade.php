@extends('backend.app')

@section('title', 'System Settings')

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.3.0/ckeditor5.css">
    <style>
        .ck-editor__editable_inline {
            min-height: 150px;
        }

        /* Center the dropify image preview */
        .dropify-wrapper .dropify-message p {
            text-align: center;
        }

        .dropify-wrapper .dropify-preview .dropify-render img {
            display: block;
            margin: 0 auto;
        }
    </style>
@endpush

@section('content')
    <main class="container-xxl flex-grow-1 container-p-y">
        <h2 class="section-title">System Settings</h2>

        {{-- Tab list --}}
        <ul class="nav nav-tabs" id="settingsTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="system-settings-tab" data-bs-toggle="tab"
                    data-bs-target="#system-settings" type="button" role="tab" aria-controls="system-settings"
                    aria-selected="true">
                    System Settings
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="mail-settings-tab" data-bs-toggle="tab" data-bs-target="#mail-settings"
                    type="button" role="tab" aria-controls="mail-settings" aria-selected="false">
                    Mail Settings
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="stripe-settings-tab" data-bs-toggle="tab" data-bs-target="#stripe-settings"
                    type="button" role="tab" aria-controls="stripe-settings" aria-selected="false">
                    Stripe Settings
                </button>
            </li>
        </ul>

        {{-- Tab content --}}
        <div class="tab-content" id="settingsTabContent">
            <!-- System Settings Form -->
            <div class="tab-pane fade show active" id="system-settings" role="tabpanel"
                aria-labelledby="system-settings-tab">
                <form action="{{ route('system.settingsUpdate') }}" method="POST" class="tm-form mt-5" enctype="multipart/form-data">
                    @csrf

                    <div class="form-field-wrapper">
                        {{-- Title input field --}}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control @error('title') is-invalid @enderror" required type="text" name="title"
                                 placeholder="Enter Title here" value="{{ old('title', $setting->title ?? '') }}">
                            @error('title')
                                <div id="title-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- System Name input field --}}
                        <div class="form-group">
                            <label for="system_name">System Name</label>
                            <input class="form-control @error('system_name') is-invalid @enderror" type="text"
                                name="system_name" required placeholder="Enter System Name here"
                                value="{{ old('system_name', $setting->system_name ?? '') }}">
                            @error('system_name')
                                <div id="system_name-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-field-wrapper">
                        {{-- Contact Number input field --}}
                        <div class="form-group">
                            <label for="contact_number">Contact Number</label>
                            <input class="form-control @error('contact_number') is-invalid @enderror" type="text"
                                name="contact_number" required placeholder="Enter Contact Number here"
                                value="{{ old('contact_number', $setting->contact_number ?? '') }}">
                            @error('contact_number')
                                <div id="contact_number-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Email input field --}}
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
                                required placeholder="Enter Email here" value="{{ old('email', $setting->email ?? '') }}">
                            @error('email')
                                <div id="email-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-field-wrapper">
                        {{-- Copyright Text input field --}}
                        <div class="form-group">
                            <label for="copyright_text">Copyright Text</label>
                            <input class="form-control @error('copyright_text') is-invalid @enderror" type="text"
                                name="copyright_text" required placeholder="Enter Copyright Text here"
                                value="{{ old('copyright_text', $setting->copyright_text ?? '') }}">
                            @error('copyright_text')
                                <div id="copyright_text-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Company Open Hour input field --}}
                        <div class="form-group">
                            <label for="company_open_hour">Company Open Hour</label>
                            <input class="form-control @error('company_open_hour') is-invalid @enderror" type="text"
                                name="company_open_hour" required placeholder="Enter Company Open Hour here"
                                value="{{ old('company_open_hour', $setting->company_open_hour ?? '') }}">
                            @error('company_open_hour')
                                <div id="company_open_hour-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-field-wrapper">
                        {{-- Address input field --}}
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea  class="form-control @error('address') is-invalid @enderror" name="address" required
                                placeholder="Enter Address here" id="address">{{ old('address', $setting->address ?? '') }}</textarea>
                            @error('address')
                                <div id="address-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Description input field --}}
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                                required placeholder="Enter Description here" id="description">{{ old('description', $setting->description ?? '') }}</textarea>
                            @error('description')
                                <div id="description-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Logo and Favicon fields --}}
                    <div class="form-field-wrapper">
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <input class="dropify form-control @error('logo') is-invalid @enderror" type="file"
                                name="logo"
                                data-default-file="{{ asset($setting->logo ?? 'backend/assets/img/favicon/user.png') }}">
                            @error('logo')
                                <div id="logo-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="favicon">Favicon</label>
                            <input class="dropify form-control @error('favicon') is-invalid @enderror" type="file"
                                name="favicon"
                                data-default-file="{{ asset($setting->favicon ?? 'backend/assets/img/favicon/user.png') }}">
                            @error('favicon')
                                <div id="favicon-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>



                    <button type="submit" class="tm-dashboard-btn" style="align-self: flex-start;">Update</button>
                </form>
            </div>

            <!-- Mail Settings Form -->
            <div class="tab-pane fade" id="mail-settings" role="tabpanel" aria-labelledby="mail-settings-tab">
                <form action="{{ route('system.mailSettingsUpdate') }}" method="POST" class="tm-form mt-5">
                    @csrf
                    <div class="form-field-wrapper">
                        {{-- Mail Mailer input field --}}
                        <div class="form-group">
                            <label for="mail_mailer">Mail Mailer</label>
                            <input class="form-control @error('mail_mailer') is-invalid @enderror" type="text"
                                name="mail_mailer" required placeholder="Enter Mail Mailer here"
                                value="{{ old('mail_mailer', env('MAIL_MAILER') ?? '') }}">
                            @error('mail_mailer')
                                <div id="mail_mailer-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Mail Host input field --}}
                        <div class="form-group">
                            <label for="mail_host">Mail Host</label>
                            <input class="form-control @error('mail_host') is-invalid @enderror" type="text"
                                name="mail_host" required placeholder="Enter Mail Host here"
                                value="{{ old('mail_host', env('MAIL_HOST') ?? '') }}">
                            @error('mail_host')
                                <div id="mail_host-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- Mail Port input field --}}
                    <div class="form-field-wrapper">
                        <div class="form-group">
                            <label for="mail_port">Mail Port</label>
                            <input class="form-control @error('mail_port') is-invalid @enderror" type="text"
                                name="mail_port" required placeholder="Enter Mail Port here"
                                value="{{ old('mail_port', env('MAIL_PORT') ?? '') }}">
                            @error('mail_port')
                                <div id="mail_port-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Mail Username input field --}}
                        <div class="form-group">
                            <label for="mail_username">Mail Username</label>
                            <input class="form-control @error('mail_username') is-invalid @enderror" type="text"
                                name="mail_username" required placeholder="Enter Mail Username here"
                                value="{{ old('mail_username', env('MAIL_USERNAME') ?? '') }}">
                            @error('mail_username')
                                <div id="mail_username-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- Mail Password input field --}}
                    <div class="form-field-wrapper">
                        <div class="form-group">
                            <label for="mail_password">Mail Password</label>
                            <input class="form-control @error('mail_password') is-invalid @enderror" type="password"
                                name="mail_password" required placeholder="Enter Mail Password here"
                                value="{{ old('mail_password', env('MAIL_PASSWORD') ?? '') }}">
                            @error('mail_password')
                                <div id="mail_password-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Mail Encryption input field --}}
                        <div class="form-group">
                            <label for="mail_encryption">Mail Encryption</label>
                            <input class="form-control @error('mail_encryption') is-invalid @enderror" type="text"
                                name="mail_encryption" required placeholder="Enter Mail Encryption here"
                                value="{{ old('mail_encryption', env('MAIL_ENCRYPTION') ?? '') }}">
                            @error('mail_encryption')
                                <div id="mail_encryption-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- Mail From Address input field --}}
                    <div class="form-field-wrapper">
                        <div class="form-group">
                            <label for="mail_from_address">Mail From Address</label>
                            <input class="form-control @error('mail_from_address') is-invalid @enderror" type="email"
                                name="mail_from_address" required placeholder="Enter Mail From Address here"
                                value="{{ old('mail_from_address', env('MAIL_FROM_ADDRESS') ?? '') }}">
                            @error('mail_from_address')
                                <div id="mail_from_address-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group"></div>
                    </div>
                    <button type="submit" class="tm-dashboard-btn" style="align-self: flex-start;">Update</button>
                </form>
            </div>

            <!-- Stripe Settings Form -->
            <div class="tab-pane fade" id="stripe-settings" role="tabpanel" aria-labelledby="stripe-settings-tab">
                <form action="{{ route('system.stripeSettingsUpdate') }}" method="POST" class="tm-form mt-5">
                    @csrf
                    <div class="form-field-wrapper">
                        {{-- STRIPE SECRET KEY input field --}}
                        <div class="form-group">
                            <label for="stripe_secret_key">STRIPE SECRET KEY</label>
                            <input class="form-control @error('stripe_secret_key') is-invalid @enderror" type="text"
                                name="stripe_secret_key" required placeholder="Enter Stripe Secret Key here"
                                value="{{ old('stripe_secret_key', env('STRIPE_SECRET_KEY') ?? '') }}">
                            @error('stripe_secret_key')
                                <div id="stripe_secret_key-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- STRIPE PUBLIC KEY input field --}}
                    <div class="form-field-wrapper">
                        <div class="form-group">
                            <label for="stripe_public_key">STRIPE PUBLIC KEY</label>
                            <input class="form-control @error('stripe_public_key') is-invalid @enderror" type="text"
                                name="stripe_public_key" required placeholder="Enter Stripe Public Key here"
                                value="{{ old('stripe_public_key', env('STRIPE_PUBLIC_KEY') ?? '') }}">
                            @error('stripe_public_key')
                                <div id="stripe_public_key-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- STRIPE WEBHOOK SECRET input field --}}
                    <div class="form-field-wrapper">
                        <div class="form-group">
                            <label for="stripe_webhook_secret">STRIPE WEBHOOK SECRET</label>
                            <input class="form-control @error('stripe_webhook_secret') is-invalid @enderror"
                                type="text" name="stripe_webhook_secret" required
                                placeholder="Enter Stripe Webhook Secret here"
                                value="{{ old('stripe_webhook_secret', env('STRIPE_WEBHOOK_SECRET') ?? '') }}">
                            @error('stripe_webhook_secret')
                                <div id="stripe_webhook_secret-error" class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="tm-dashboard-btn" style="align-self: flex-start;">Update</button>
                </form>
            </div>
        </div>
    </main>
@endsection
@push('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- Dropify script --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

    {{-- CKEditor script --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

    <script>
        // Initialize Dropify
        $('.dropify').dropify();

        // Initialize CKEditor for the description field
        // ClassicEditor
        //     .create(document.querySelector('#description'),{
        //         height: '500px',
        //     })
        //     .catch(error => {
        //         console.error(error);
        //     });

        // ClassicEditor
        //     .create(document.querySelector('#address'),{
        //         height: '500px',
        //     })
        //     .catch(error => {
        //         console.error(error);
        //     });
    </script>
@endpush
