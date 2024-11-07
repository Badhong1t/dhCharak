@extends('backend.app')
@push('style')

@endpush

@section('title', 'Attribute Value Edit Page')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-9 col-md-4 order-1 m-auto">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Attribute Value</h4>
                    <form action="{{ route('attribute_values.update',$data->id) }}" method="POST" class="mt-4">
                        @csrf
                        @method('PUT')
                        <input type="text" name="attribute_id" value="{{ $data->attribute_id }}" hidden>
                        <div class="form-group mb-3">
                            <label for="name" class="form-lable">Value <span class="text-danger">*</span></span></label>
                            <input type="text" id="name" class="form-control @error('value') is-invalid @enderror" name="value" value="{{ $data->value }}" >
                            @error('value')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
@endsection

@push('scripts')

@endpush
