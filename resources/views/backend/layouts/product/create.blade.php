@extends('backend.app')

@section('title', 'Create Product')

@push('styles')
    {{-- Select2 and custom styling --}}
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
                    <h4 class="card-title">Create New Product</h4>
                    <form action="{{ route('products.store') }}" method="POST" class="mt-4" enctype="multipart/form-data">
                        @csrf
                       <div class="row">
                            <div class="form-group mb-3 col-lg-4">
                                <label for="name" class="form-lable">Title <span class="text-danger">*</span></span></label>
                                <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-lg-4">
                                <label for="slug" class="form-lable">slug <span class="text-danger">*</span></span></label>
                                <input type="text" id="slug" class="form-control @error('slug') is-invalid @enderror" name="slug" readonly>
                                @error('slug')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-lg-4">
                                <label for="sku" class="form-lable">SKU <span class="text-danger">*</span></span></label>
                                <input type="text" id="sku" class="form-control @error('sku') is-invalid @enderror" name="sku">
                                @error('sku')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                       </div>
                        <div class="row">
                            <div class="form-group mb-3 col-lg-4">
                                <label for="barcode" class="form-lable">Barcode <span class="text-danger">*</span></span></label>
                                <input type="text" id="barcode" class="form-control @error('barcode') is-invalid @enderror" name="barcode">
                                @error('barcode')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-lg-4">
                                <label for="price" class="form-lable">Category <span class="text-danger">*</span></span></label>
                                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-lg-4">
                                <label for="subcategory_id" class="form-lable">Sub Category <span class="text-danger">*</span></span></label>
                                <select name="subcategory_id" id="subcategory_id" class="form-control @error('subcategory_id') is-invalid @enderror">

                                </select>
                                @error('subcategory_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-3 col-lg-7">
                                <label for="" class="form-lable">Short Description</label>
                                <textarea name="short_description" id="" cols="30" rows="3" class="form-control @error('short_description') is-invalid @enderror"></textarea>
                                @error('short_description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-lg-5">
                                <label for="status" class="form-lable">Is Featured <span class="text-danger">*</span></span></label>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" id="form-check-input" style="border-radius: 25rem;" name="status">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-3 col-lg-6">
                                <label for="" class="form-lable">Description</label>
                                <textarea name="description" id="" cols="30" rows="3" class="form-control ck-editor @error('description') is-invalid @enderror"></textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-lg-6">
                                <label for="" class="form-lable">Additional Information</label>
                                <textarea name="description" id="" cols="30" rows="3" class="form-control ck-editor1 @error('description') is-invalid @enderror"></textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <script>
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
                .toLowerCase()                     // Convert to lowercase
                .trim()                             // Remove whitespace from both sides
                .replace(/[^a-z0-9\s-]/g, '')       // Remove special characters
                .replace(/\s+/g, '-')               // Replace spaces with hyphens
                .replace(/-+/g, '-');               // Replace multiple hyphens with a single hyphen
        }
        $(document).ready(function() {
            $('#name').select2();
        });
        //title to slug
        $("#title").on('keyup',function (){
            $("#slug").val(generateSlug($(this).val()))
         });
    </script>

    <script>
        //ajax request send for collect childcategory
    $('#category_id').change(function(){
        var id = $(this).val();
        $.ajax({
          url:"{{ url("/get-sub-category/") }}/"+id,
          type:'get',
          success:function(data) {
            $('select[name="subcategory_id"]').empty();
            $.each(data,function(key,data){
              $('select[name="subcategory_id"]').append('<option value="'+data.id+'">'+data.name+'</option>');
            });
          }

        });
    });
    </script>
@endpush