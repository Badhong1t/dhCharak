@extends('backend.app')

@section('title', 'Edit Product')

@push('style')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
    {{-- Select2 and custom styling --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
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

        .ck-editor__editable[role="textbox"] {
            min-height: 150px;
        }

        .dropify-wrapper .dropify-message .file-icon p {
            font-size: 25px;
        }
    </style>
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 col-md-4 order-1">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Product</h4>
                            <form action="{{ route('products.update', $product->id) }}" method="POST" class="mt-4"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="form-group mb-3 col-lg-4">
                                        <label for="name" class="form-lable">Title <span
                                                class="text-danger">*</span></span></label>
                                        <input type="text" id="title"
                                            class="form-control @error('title') is-invalid @enderror" name="title"
                                            value="{{ $product->title }}">
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3 col-lg-4">
                                        <label for="slug" class="form-lable">slug <span
                                                class="text-danger">*</span></span></label>
                                        <input type="text" id="slug"
                                            class="form-control @error('slug') is-invalid @enderror" name="slug" readonly
                                            value="{{ $product->slug }}">
                                        @error('slug')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3 col-lg-4">
                                        <label for="sku" class="form-lable">SKU</label>
                                        <input type="text" id="sku"
                                            class="form-control @error('sku') is-invalid @enderror" name="sku"
                                            value="{{ $product->sku }}">
                                        @error('sku')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-3 col-lg-4">
                                        <label for="barcode" class="form-lable">Barcode</label>
                                        <input type="text" id="barcode"
                                            class="form-control @error('barcode') is-invalid @enderror" name="barcode"
                                            value="{{ $product->barcode }}">
                                        @error('barcode')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3 col-lg-4">
                                        <label for="category_id" class="form-lable">Category <span
                                                class="text-danger">*</span></span></label>
                                        <select name="category_id" id="category_id"
                                            class="form-control @error('category_id') is-invalid @enderror">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                                    {{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3 col-lg-4">
                                        <label for="subcategory_id" class="form-lable">Sub Category <span
                                                class="text-danger">*</span></span></label>
                                        <select name="subcategory_id" id="subcategory_id"
                                            class="form-control @error('subcategory_id') is-invalid @enderror">
                                            @foreach ($subcategories as $subcategory)
                                                <option value="{{ $subcategory->id }}"
                                                    {{ $subcategory->id == $product->subcategory_id ? 'selected' : '' }}>
                                                    {{ $subcategory->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('subcategory_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-3 col-lg-4">
                                        <label for="customer_price" class="form-lable">Price <span
                                                class="text-danger">*</span></span></label>
                                        <input type="text" id="customer_price"
                                            class="form-control @error('customer_price') is-invalid @enderror"
                                            name="customer_price" value="{{ $product->customer_price }}">
                                        @error('customer_price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3 col-lg-4">
                                        <label for="business_price" class="form-lable">Business Price <span
                                                class="text-danger">*</span></span></label>
                                        <input type="text" id="business_price"
                                            class="form-control @error('business_price') is-invalid @enderror"
                                            name="business_price" value="{{ $product->business_price }}">
                                        @error('business_price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3 col-lg-4">
                                        <label for="quantity" class="form-lable">Quantity <span
                                                class="text-danger">*</span></span></label>
                                        <input type="number" id="quantity"
                                            class="form-control @error('quantity') is-invalid @enderror" name="quantity"
                                            value="{{ $product->quantity }}">
                                        @error('quantity')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-3 col-lg-6">
                                        <label for="" class="form-lable">Short Description</label>
                                        <textarea name="short_description" id="" cols="30" rows="7"
                                            class="form-control @error('short_description') is-invalid @enderror">{{ $product->short_description }}</textarea>
                                        @error('short_description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3 col-lg-6">
                                        <label for="status" class="form-lable">Thumbnail <span
                                                class="text-danger">*</span></span></label>
                                        <input type="file" id="thumbnail"
                                            class="form-control dropify @error('thumbnail') is-invalid @enderror"
                                            name="thumbnail"
                                            data-default-file="{{ asset($product->thumbnail ? $product->thumbnail : 'backend/images/placeholder/image_placeholder.png') }}">
                                        @error('thumbnail')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-3 col-lg-6">
                                        <label for="" class="form-lable">Description <span
                                                class="text-danger">*</span></label>
                                        <textarea name="description" id="" cols="30" rows="3"
                                            class="form-control ck-editor @error('description') is-invalid @enderror">{{ $product->description }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3 col-lg-6">
                                        <label for="additional_information" class="form-lable">Additional
                                            Information</label>
                                        <textarea name="additional_information" id="" cols="30" rows="3"
                                            class="form-control ck-editor1 @error('additional_information') is-invalid @enderror">{{ $product->additional_information }}</textarea>
                                        @error('additional_information')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row gallery-images mb-4">
                                    <div class="flex items-center justify-between gap-5 mb-2">
                                        <label for="gallery_images" class="form-lable">Product Images</label>
                                        <button type="button" id="add-gallery-image" class="btn btn-danger btn-sm"
                                            style="float: right">
                                            Add image
                                        </button>
                                    </div>
                                    <div class="row" id="gallery-images-section">
                                        @if (!empty($product->images) && count($product->images) > 0)
                                            @foreach ($product->images as $index => $image)
                                                <div class="col-lg-4 flex justify-center items-center border single-gallery-image position-relative mb-4 mr-2"
                                                    style="height: 200px">
                                                    <div class="position-absolute top-0 end-0 px-2 py-1 rounded-full">
                                                        <button
                                                            onclick="showDeleteConfirm({{ $image->id }},this,'image','{{ $image }}')"
                                                            class="btn btn-denger btn-sm"
                                                            style="border-radius: 30%; border: 0; background-color: #fb1c1c; color: #fff">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                    <img class="" style="width: 100%; height: 195px;"
                                                        src="{{ asset($image->image_url) }}" alt="gallery image">
                                                </div>
                                            @endforeach
                                        @endif
                                        <div class="col-lg-4 single-gallery-image mb-2">
                                            <input type="file" name="gallery_images[0]" id="gallery_0"
                                                class="dropify @error('gallery_images') is-invalid @enderror"
                                                data-default-file="{{ asset('backend/images/placeholder/image_placeholder.png') }}" />
                                            @error('gallery_images')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h5 class="mb-3">
                                        Product Attributes
                                        <button type="button" id="add-attribute" class="btn btn-primary btn-sm"
                                            style="float: right">Add</button>
                                    </h5>
                                    @if ($product->attribute_value)
                                        @php
                                            $data = $product->attribute_value->groupBy('attribute_id')->toArray();
                                        @endphp
                                        @foreach ($data as $attribute_id => $attribute_values)
                                            <div class="row attribute-section" data-id="0">
                                                <div class="form-group mb-3 col-lg-6">
                                                    <label for="attribute" class="form-lable">Attribute</label>
                                                    <select name="product_attribute[0][attribute_id]" id="attribute"
                                                        class="form-control attribute @error('attribute_id') is-invalid @enderror">
                                                        <option value="">Select Attribute</option>
                                                        @foreach ($attributes as $attribute)
                                                            <option value="{{ $attribute->id }}"
                                                                {{ $attribute_id == $attribute->id ? 'selected' : '' }}>
                                                                {{ $attribute->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('attribute_id')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- Loop through each attribute value for this attribute_id -->
                                                <div class="attribute_value form-group mb-3 col-lg-6"
                                                    id="product_attribute_0">
                                                    <label for="attribute_value" class="form-lable">Attribute
                                                        Value</label>
                                                    <select name="product_attribute[0][attribute_value_id][]"
                                                        id="attribute_values" class="form-control selectpicker"
                                                        data-live-search="true" multiple>
                                                        <option value="">Select </option>
                                                        @foreach ($attribute_values as $attribute_value)
                                                            @php
                                                                $value = App\Models\AttributeValue::where(
                                                                    'id',
                                                                    $attribute_value['value_id'],
                                                                )->first();
                                                            @endphp
                                                            <option value="{{ $value->id ?? '' }}"
                                                                {{ $attribute_value['value_id'] ?? '' == $value->id ?? '' ? 'selected' : '' }}>
                                                                {{ $value->value ?? '' }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('attribute_value')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endforeach

                                    @endif
                                    <div class="row attribute-section" data-id="0">
                                        <div class="form-group mb-3 col-lg-6">
                                            <label for="attribute" class="form-lable">Attribute</label>
                                            <select name="product_attribute[0][attribute_id]" id="attribute" class="form-control attribute @error('attribute_id') is-invalid @enderror">
                                                <option value="">Select Attribute</option>
                                                @foreach ($attributes as $attribute)
                                                    <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('attribute_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="attribute_value form-group mb-3 col-lg-6" id="product_attribute_0">
                                            <!-- Attribute values will be loaded here -->
                                        </div>
                                    </div>
                                    <div class="row" id="allgroupOfInput">

                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('products.index') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <script>
        $('.selectpicker').selectpicker();
        ClassicEditor
            .create(document.querySelector('.ck-editor1'), {
                removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle',
                    'ImageToolbar', 'ImageUpload', 'MediaEmbed'
                ],
                height: '500px'
            })
            .catch(error => {
                console.error(error);
            });
        $(".single-select").select2({
            theme: "classic"
        });
        $(document).ajaxStart(function() {
            NProgress.start();
        });

        $(document).ajaxComplete(function() {
            NProgress.done();
        });
        $('.dropify').dropify();
    </script>
    <script>
        function generateSlug(text) {
            return text
                .toLowerCase() // Convert to lowercase
                .trim() // Remove whitespace from both sides
                .replace(/[^a-z0-9\s-]/g, '') // Remove special characters
                .replace(/\s+/g, '-') // Replace spaces with hyphens
                .replace(/-+/g, '-'); // Replace multiple hyphens with a single hyphen
        }
        $(document).ready(function() {
            $('#category_id').select2();
        });
        $(document).ready(function() {
            $('#subcategory_id').select2();
        });
        //title to slug
        $("#title").on('keyup', function() {
            $("#slug").val(generateSlug($(this).val()))
        });
    </script>

    <script>
        //ajax request send for collect childcategory
        $('#category_id').change(function() {
            var id = $(this).val();
            $.ajax({
                url: "{{ url('/get-sub-category/') }}/" + id,
                type: 'get',
                success: function(data) {
                    $('select[name="subcategory_id"]').empty();
                    $.each(data, function(key, data) {
                        $('select[name="subcategory_id"]').append('<option value="' + data.id +
                            '">' + data.name + '</option>');
                    });
                }

            });
        });
    </script>
    <script>
        //add gallery image
        let imageSectionCount = 0
        $('#add-gallery-image').click(function() {
            imageSectionCount++
            $('#gallery-images-section').append(`<div class="col-lg-4 position-relative single-gallery-image mb-2">
             <button type="button" class="remove-gallery-section p-1 bg-danger text-white position-absolute" style="top: 0; right: -2px; z-index: 999; border-radius: 50%; border: 0">
                 <i class='bx bx-x'></i>
             </button>
             <input type="file" name="gallery_images[${imageSectionCount}]" id="gallery_${imageSectionCount}"
                    class="dropify form-control @error('gallery_images') is-invalid @enderror" data-default-file="{{ asset('backend/images/placeholder/image_placeholder.png') }}" />
                @error('gallery_images')
                    <div class="text-red-600 text-sm font-semibold">{{ $message }}</div>
                @enderror
         </div>`)
            $('.dropify').dropify();
        })

        //remove gallery image
        $(document).on('click', '.remove-gallery-section', function() {
            $(this).parent().remove()
        })
    </script>
    <script>
        $(document).ready(function() {
            let productVariationNumber = 0;
            let maxAttributes = {{ $attributes->count() }};
            $(document).on('click', '#add-attribute', function() {
                productVariationNumber++;
                let newInputGroup = `<div class="row position-relative attribute-section" data-id="${productVariationNumber}">
                            <div class="form-group mb-3 col-lg-5">
                                <label for="attribute" class="form-lable">Attribute</label>
                                <select name="product_attribute[${productVariationNumber}][attribute_id]" id="attribute" class="form-control attribute @error('attribute_id') is-invalid @enderror">
                                    <option value="">Select Attribute</option>
                                    @foreach ($attributes as $attribute)
                                        <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                    @endforeach
                                </select>
                                @error('attribute_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-lg-1">
                                <label for="attribute_value" class="form-lable"></label>
                                 <button class="btn btn-danger btn-sm remove-attribute mt-7"><i class='bx bx-x'></i></button>
                            </div>
                            <div class="attribute_value form-group mb-3 col-lg-6" id="product_attribute_${ productVariationNumber }">

                            </div>

                        </div>
                    `;
                $('#allgroupOfInput').append(newInputGroup);
                // Check if limit is reached, and hide the add button if so
                if (productVariationNumber >= maxAttributes - 1) {
                    $('#add-attribute').hide();
                }
            });
            // Remove an attribute section if needed and update counts and options
            $(document).on('click', '.remove-attribute', function() {
                $(this).closest('.attribute-section').remove();
                productVariationNumber--;

                // Show the add button again if the limit is not reached
                if (productVariationNumber < maxAttributes) {
                    $('#add-attribute').show();
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // When attribute is selected, load the corresponding attribute values
            $(document).on('change', '#attribute', function() {
                var attributeId = $(this).val();
                var attributeContainer = $(this).closest('.attribute-section');
                var productId = attributeContainer.data('id');

                if (attributeId) {
                    // Send AJAX request to fetch attribute values
                    $.ajax({
                        url: "{{ route('get-attribute-value', ':attributeId') }}".replace(
                            ':attributeId', attributeId),
                        type: "GET",
                        success: function(data) {
                            var valuesHTML =
                                '<label for="attribute_values">Attribute Values</label>';
                            valuesHTML += '<select name="product_attribute[' + productId +
                                '][attribute_value_id][]" id="attribute_values" class="form-control selectpicker" data-live-search="true" multiple>';
                            valuesHTML += '<option value="">Select </option>';
                            data.forEach(function(value) {
                                valuesHTML += '<option value="' + value.id + '")>' +
                                    value.value + '</option>';
                            });
                            valuesHTML += '</select>';
                            // Append the generated HTML into the form
                            attributeContainer.find('.attribute_value').html(valuesHTML);
                            $('.selectpicker').selectpicker();
                        },
                        error: function() {
                            alert("Error loading attribute values.");
                        }
                    });
                } else {
                    $(attributeContainer).html('');
                }
            });
        });
        // Delete Confirm
        function showDeleteConfirm(id, element, type = 'variant', path = null) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure you want to delete this record?',
                text: 'If you delete this, it will be gone forever.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.isConfirmed && type === 'variant') {
                    deleteVariant(id, element);
                } else if (result.isConfirmed) {
                    deleteImage(id, element, path)
                }
            });
        }

        function deleteImage(id, element, path) {
            $.ajax({
                url: "{{ route('product.delete-image', ':id') }}".replace(':id', id),
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                },
                data: {
                    path
                },
                success: function(data) {
                    if (data.success) {
                        flasher.success(data.message);
                        setTimeout(() => {
                            location.reload();
                        }, 1500)
                    } else {
                        flasher.error(data.message)
                    }
                }.bind(this),
                error: function(xhr) {
                    if (xhr.responseJSON?.message) {
                        flasher.error(xhr.responseJSON?.message)
                    } else {
                        flasher.error('Something was wrong.')
                    }
                }
            });
        }
    </script>
@endpush
