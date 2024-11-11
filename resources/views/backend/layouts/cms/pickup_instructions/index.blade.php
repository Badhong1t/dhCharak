@extends('backend.app')

@section('title', 'CMS')

@push('style')
    <link href="{{ asset('vendor/flasher/flasher.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">

    <style>
        .ck-editor__editable_inline {
            min-height: 150px;
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

    <section class="container-xxl flex-grow-1 container-p-y">

        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Update Pickup Instructions</h3>
            </div>

            <div class="card-body">
                <form method="post" action="{{ route('pickupInstructionsUpdate') }}">
                    @csrf

                    <div>
                        <div class="form-group">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                id="title" value="{{ old('title', $data->title ?? '') }}">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">
                            {{ old('description', $data->description ?? '') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="tm-dashboard-btn">Update</button>
                    </div>

                </form>

            </div>

        </div>

    </section>

    <section class="container-xxl flex-grow-1 container-p-y">
        <div class="card mt-4">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Update Images</h3>
            </div>

            <form method="post" action="{{ route('pickupInstructionsImage.update') }}" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="image1" class="form-label">Image 1</label>
                            <input type="file" class="dropify form-control @error('image1') is-invalid @enderror"
                                name="image1" id="image1"
                                data-default-file="{{ old('image1') ?? $image1->image ?? '' }}">
                            @error('image1')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="image2" class="form-label">Image 2</label>
                            <input type="file" class="dropify form-control @error('image2') is-invalid @enderror"
                                name="image2" id="image2"
                                data-default-file="{{ old('image2') ?? $image2->image ?? '' }}">
                            @error('image2')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="image3" class="form-label">Image 3</label>
                            <input type="file" class="dropify form-control @error('image3') is-invalid @enderror"
                                name="image3" id="image3"
                                data-default-file="{{ old('image3') ?? $image3->image ?? '' }}">
                            @error('image3')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group">
                        <button type="submit" class="tm-dashboard-btn">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </section>


@endsection



@push('script')
    <script src="{{ asset('backend/js/datatables/data-tables.min.js') }}"></script>
    <!--buttons dataTables-->
    <script src="{{ asset('backend/js/datatables/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/buttons.print.min.js') }}"></script>

    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>

    <script>
        /* $(document).ready(function() {
            // AJAX for the text form
            $('#submitTextForm').click(function(e) {
                e.preventDefault();
                let formData = new FormData($('#updateTextForm')[0]);

                $.ajax({
                    type: 'POST',
                    url: $('#updateTextForm').attr('action'),
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        alert('Text form updated successfully!');
                    },
                    error: function(xhr) {
                        alert('An error occurred: ' + xhr.responseText);
                    }
                });
            });

            // AJAX for the image form
            $('#submitImageForm').click(function(e) {
                e.preventDefault();
                let formData = new FormData($('#updateImageForm')[0]);

                $.ajax({
                    type: 'POST',
                    url: $('#updateImageForm').attr('action'),
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        alert('Image form updated successfully!');
                    },
                    error: function(xhr) {
                        alert('An error occurred: ' + xhr.responseText);
                    }
                });
            });
        }); */
    </script>

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
