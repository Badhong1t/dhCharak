@extends('backend.app')

@section('title', 'CMS')

@push('style')

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">

    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }

        .dropify-wrapper {
            background-color: #f5f8fa;
            /* Light background */
            border: 2px dashed #007bff;
            /* Custom border */
            border-radius: 15px;
            /* Rounded corners */
            transition: all 0.3s ease;
        }

        .dropify-wrapper:hover {
            border-color: #0056b3;
            /* Darker border on hover */
            background-color: #e6f7ff;
            /* Change background on hover */
        }

        .dropify-wrapper .dropify-message {
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .dropify-wrapper .dropify-message p {
            font-size: 18px;
            /* Larger font */
            margin: 10px 0;
        }

        .dropify-wrapper .dropify-preview .dropify-render img {
            max-width: 100%;
            /* Responsive image */
            border-radius: 10px;
        }

    </style>
@endpush

@section('content')

    <main class="container-xxl flex-grow-1 container-p-y">

        <div class="card box-shadow-0">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Edit Special Orders</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('specialOrders.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="form-group">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                                placeholder="Enter title here" value="{{ old('title') ?? $data->title ?? '' }}">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description" class="form-label">Content</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description">{{ old('description') ?? $data->description ?? '' }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image" class="form-label">Icon</label>
                            <input type="file" class="dropify form-control @error('image') is-invalid @enderror" name="image" id="image"
                            data-default-file="{{ old('image') ?? $data->image ?? '' }}">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                    </div>
                    <div class="button-group" style="display: flex; gap: 10px;">
                        <button type="submit" class="tm-dashboard-btn">Submit</button>
                        <a href="{{ route('specialOrders.index') }}" class="tm-dashboard-btn"
                            style="text-decoration: none; background-color: red; color: #fff;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

    </main>

@endsection

@push('script')

    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>

    <script>

        //dropify
        $(document).ready(function() {
            $('.dropify').dropify();
        });

        // Initialize CKEditor for the description field
        ClassicEditor
            .create(document.querySelector('#description'), {
                height: '500px',
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
