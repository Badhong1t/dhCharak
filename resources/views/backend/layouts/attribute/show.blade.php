@extends('backend.app')
@push('style')

@endpush

@section('title', 'Attribute Value Page')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-9 mb-4 order-0">
            <div class="card">
                <div class="card-header">
                    <h2>Attribute Values</h2>
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $attribute->name }}</h4>
                    <div class="table-responsive mt-4 p-4">
                        <table class="table table-hover table-striped table-bordered" id="data-table">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Value</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
          <div class="col-lg-3 col-md-4 order-1">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Value</h4>
                        <form action="{{ route('attribute_values.store') }}" method="POST" class="mt-4">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name" class="form-lable">Attribute Name <span class="text-danger">*</span></span></label>
                                <input type="text" id="name" class="form-control" name="" value="{{ $attribute->name }}" readonly>
                                <input type="text" name="attribute_id" value="{{ $attribute->id }}" hidden>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name" class="form-lable">Value <span class="text-danger">*</span></span></label>
                                <input type="text" id="name" class="form-control @error('value') is-invalid @enderror" name="value">
                                @error('value')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="name" class="form-lable">Type <span class="text-danger">*</span></span></label>
                                <input type="text" id="name" class="form-control" name="type" value="{{ $attribute->name }}" readonly>
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

@push('script')
    <script src="{{ asset('backend/js/datatables/data-tables.min.js') }}"></script>
    <!--buttons dataTables-->
    <script src="{{ asset('backend/js/datatables/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/buttons.print.min.js') }}"></script>
<script>
    $(document).ready(function() {
        var searchable = [];
        var selectable = [];
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            }
        });
        if (!$.fn.DataTable.isDataTable('#data-table')) {
            let dTable = $('#data-table').DataTable({
                order: [],
                lengthMenu: [
                    [25, 50, 100, 200, 500, -1],
                    [25, 50, 100, 200, 500, "All"]
                ],
                processing: true,
                responsive: true,
                serverSide: true,

                language: {
                    processing: `<div class="text-center">
                        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                        <span class="visually-hidden">Loading...</span>
                      </div>
                        </div>`
                },

                scroller: {
                    loadingIndicator: false
                },
                pagingType: "full_numbers",
                dom: "<'row justify-content-between table-topbar'<'col-md-2 col-sm-4 px-0'l><'col-md-2 col-sm-4 px-0'f>>tipr",
                ajax: {
                    url: "{{ route('attributes.show', $attribute->id ) }}",
                    type: "get",
                },

                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'value',
                        name: 'value',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
            });

            dTable.buttons().container().appendTo('#file_exports');

            new DataTable('#example', {
                responsive: true
            });
        }
    });

    // delete Confirm
    function showDeleteConfirm(id) {
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
            if (result.isConfirmed) {
                deleteItem(id);
            }
        });
    };
    // Delete Button
    function deleteItem(id) {
        var url = '{{ route('attribute_values.destroy', ':id') }}';
        var csrfToken = '{{ csrf_token() }}';
        $.ajax({
            type: "DELETE",
            url: url.replace(':id', id),
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(resp) {
                console.log(resp);
                // Reloade DataTable
                $('#data-table').DataTable().ajax.reload();
                if (resp.success === true) {
                    // show toast message
                    Swal.fire({
                        title: "Good job!",
                        text: resp.message,
                        icon: "success"
                    });

                } else if (resp.errors) {
                    toastr.error(resp.errors[0]);
                } else {
                    toastr.error(resp.message);
                }
            }, // success end
            error: function(error) {
                // location.reload();
            } // Error
        });
    }
</script>
@endpush
