@extends('backend.app')
@section('title', 'Edit Social Link')
@section('title_url')
    <a href="{{ route('dashboard') }}">Home</a>
@endsection
@section('tabName')
    Edit Social Link
@endsection

@push('style')
    <link href="{{ asset('vendor/flasher/flasher.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
    <style>
        .form-input {
            border: 2px solid #f0f3f7;
            border-radius: 6px;
        }
    </style>
@endpush

@section('content')
    <main class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="card-title mb-4">Edit Social Link</h4>
                <form action="{{ route('socialLinks.update', $socialLink->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="social_name" class="form-label">Social Name <span class="text-danger">*</span></label>
                            <input type="text" name="social_name" id="social_name" value="{{ $socialLink->social_name }}" class="form-control form-input" />
                            @error('social_name')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="link" class="form-label">Social Link <span class="text-danger">*</span></label>
                            <input type="text" name="link" id="link" value="{{ $socialLink->link }}" class="form-control form-input" />
                            @error('link')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="icon" class="form-label">Icon</label>
                            <input type="file" name="icon" id="icon" class="form-control form-input dropify" data-default-file="{{ $socialLink->icon ? asset($socialLink->icon) : '' }}" data-allowed-file-extensions="jpg png jpeg svg" />
                            @error('icon')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="button-group" style="display: flex; gap: 10px;">
                        <button type="submit" class="tm-dashboard-btn">Update</button>
                        <a href="{{ route('socialLinks.index') }}" class="tm-dashboard-btn"
                            style="text-decoration: none; background-color: red; color: #fff;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection

@push('script')
    <script src="{{ asset('vendor/flasher/flasher.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
@endpush
