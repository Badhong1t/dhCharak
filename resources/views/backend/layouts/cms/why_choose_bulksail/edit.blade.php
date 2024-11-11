@extends('backend.app')

@section('title', 'CMS')

@push('style')
    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }
    </style>
@endpush

@section('content')

    <main class="container-xxl flex-grow-1 container-p-y">

        <div class="card box-shadow-0">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Edit, Why Choose Bulksail?</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('whyChooseBulksail.update', $data->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="form-group">
                            <label for="sub_title" class="form-label">Sub Title</label>
                            <input class="form-control @error('sub_title') is-invalid @enderror" name="sub_title" id="sub_title"
                                placeholder="Enter sub title here" value="{{ old('sub_title') ?? $data->sub_title ?? '' }}">
                            @error('sub_title')
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
                    </div>
                    <div class="button-group" style="display: flex; gap: 10px;">
                        <button type="submit" class="tm-dashboard-btn">Submit</button>
                        <a href="{{ route('whyChooseBulksail.index') }}" class="tm-dashboard-btn"
                            style="text-decoration: none; background-color: red; color: #fff;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

    </main>

@endsection

@push('script')
    <script>
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
