@extends('backend.app')

@section('title', 'Create Sub Categories')

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
        <h2 class="section-title">Create Sub Categories</h2>
        <nav aria-label="breadcrumb tm-breadcumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item tm-breadcumb-item">
                    <a href="{{ route('subcategories.index') }}">Sub Categories</a>
                </li>
                <li class="breadcrumb-item tm-breadcumb-item active" aria-current="page">
                    Create New Sub Category
                </li>
            </ol>
        </nav>

        <div class="addbooking-form-area">
            <form action="{{ route('subcategories.store') }}" method="POST" class="tm-form">
                @csrf

                <div>

                    {{-- CategoryId Field --}}
                    <div class="form-field-wrapper" style="margin-bottom: 20px;"> <!-- Add margin-bottom here -->
                        <div class="form-group">
                            <label for="category_id">Category<span class="text-danger">*</span></label>
                            <select class="form-select @error('category_id') is-invalid @enderror" id="category_id"
                                name="category_id" style="z-index: 1; position: relative;"> <!-- Add z-index and position -->
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Name Field --}}
                    <div class="form-field-wrapper">
                        <div class="form-group">
                            <label for="name">Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}" placeholder="Enter sub category name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="button-group" style="display: flex; gap: 10px;">
                    <button type="submit" class="tm-dashboard-btn">Add</button>
                    <a href="{{ route('dynamicPages.index') }}" class="tm-dashboard-btn"
                        style="text-decoration: none; background-color: red; color: #fff;">Cancel</a>
                </div>
            </form>
        </div>

    </main>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#category_id').select2(); // Apply Select2 to category select field
        });
    </script>
@endpush
