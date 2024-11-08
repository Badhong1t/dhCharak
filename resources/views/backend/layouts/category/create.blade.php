@extends('backend.app')

@section('title', 'Create Categories')

@push('styles')
    {{-- Select2 and custom styling --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <style>
        .form-field-wrapper {
            margin-bottom: 1.5rem;
        }
        .tm-form .form-lable.required::after {
            content: '*';
            color: #dc3545;
            margin-left: 0.25rem;
        }
        .tm-booking-btn-wrapper {
            display: flex;
            gap: 10px;
        }
    </style>
@endpush

@section('content')
    <main class="container-xxl flex-grow-1 container-p-y">
        <h2 class="section-title">Create Categories</h2>
        <nav aria-label="breadcrumb tm-breadcumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item tm-breadcumb-item">
                    <a href="{{ route('categories.index') }}">Categories</a>
                </li>
                <li class="breadcrumb-item tm-breadcumb-item active" aria-current="page">
                    Create New Category
                </li>
            </ol>
        </nav>

        <div class="addbooking-form-area">
            <form action="{{ route('categories.store') }}" method="POST" class="tm-form my-5">
                @csrf

                <div class="form-field-wrapper">
                    {{-- Name Field --}}
                    <div class="form-group">
                        <label for="name" class="form-lable required">Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                               id="name" name="name" value="{{ old('name') }}" placeholder="Enter category name">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="tm-booking-btn-wrapper" style="display: flex; gap: 10px;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </main>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#name').select2();
        });
    </script>
@endpush
