@extends('backend.app')

@section('title', 'Edit Category')

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
        <h2 class="section-title">Edit Category</h2>
        <nav aria-label="breadcrumb tm-breadcumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item tm-breadcumb-item">
                    <a href="{{ route('categories.index') }}">Categories</a>
                </li>
                <li class="breadcrumb-item tm-breadcumb-item active" aria-current="page">
                    Edit Category
                </li>
            </ol>
        </nav>

        <div class="addbooking-form-area">
            <form action="{{ route('categories.update', $category->id) }}" method="POST" class="tm-form mt-5">
                @csrf
                @method('PUT')

                <div class="form-field-wrapper">
                    {{-- Name Field --}}
                    <div class="form-group">
                        <label for="name" class="form-lable required">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                               id="name" name="name" value="{{ old('name', $category->name) }}" placeholder="Enter category name">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="tm-booking-btn-wrapper" style="justify-content: start;">
                    <button type="submit" class="btn btn-primary">Update</button>
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
