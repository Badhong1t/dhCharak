@extends('backend.app')
@section('title', 'Social Links')
@section('title_url')
    <a href="{{ route('dashboard') }}">Home</a>
@endsection
@section('tabName')
    Social Links
@endsection

{{-- Push additional styles if needed --}}
@push('style')
    <link href="{{ asset('vendor/flasher/flasher.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
    <style>
        .form-input {
            border: 2px solid #f0f3f7;
            border-radius: 6px;
        }

        .dropify-wrapper {
            height: 230px;
        }

        .dropify-wrapper .dropify-preview .dropify-render img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .dropify-wrapper .dropify-message p {
            font-size: 20px !important;
        }
    </style>
@endpush

@section('content')
    <main class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="card-title mb-4">Add New Social Links</h4>
                <form action="{{ route('socialLinks.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="social_name" class="form-label">Social Name <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="social_name" id="social_name" class="form-control form-input" />
                            @error('social_name')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="link" class="form-label">Social Link <span class="text-danger">*</span></label>
                            <input type="text" name="link" id="link" class="form-control form-input" />
                            @error('link')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="icon" class="form-label">Icon <span class="text-danger">*</span></label>
                            <input type="file" name="icon" id="icon" class="form-control form-input" />
                            @error('icon')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="tm-dashboard-btn">Add</button>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">All Social Links</h4>
                <table id="basic_tables" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Social Name</th>
                            <th>Social Links</th>
                            <th>Icon</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </main>
@endsection

@push('script')
    <script src="{{ asset('backend/js/datatables/jquery-3.7.0.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/data-tables.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/datatables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatables/buttons.print.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('vendor/flasher/flasher.min.js') }}"></script>
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.dropify').dropify();

            $("#title").on('keyup', function() {
                $("#slug").val(generateSlug($(this).val()))
            });
        });

        $(document).ready(function() {
            let dTable = $('#basic_tables').DataTable({
                order: [], // Default ordering
                destroy: true, // Allow re-initialization
                lengthMenu: [
                    [25, 50, 100, 200, 500, -1],
                    [25, 50, 100, 200, 500, "All"]
                ],
                processing: true, // Show processing indicator
                responsive: true, // Make table responsive
                serverSide: true, // Enable server-side processing
                language: {
                    processing: `<div class="text-center">
                            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                         </div>`
                },
                dom: "<'row justify-content-between'<'col-md-6'l><'col-md-6'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row justify-content-between'<'col-md-6'i><'col-md-6'p>>",
                ajax: {
                    url: "{{ route('socialLinks.index') }}",
                    type: "GET",
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'social_name',
                        name: 'social_name'
                    },
                    {
                        data: 'link',
                        name: 'link',
                        render: function(data) {
                            return data.length > 100 ? data.substring(0, 100) + '...' : data;
                        }
                    },
                    {
                        data: 'icon',
                        name: 'icon',
                        orderable: false,
                        searchable: false,
                    },
                    {
                        data: 'status',
                        name: 'status',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                    }
                ]
            });
        });


        function deleteRecord(event, id) {
            event.preventDefault();
            let deleteUrl = '{{ route('socialLinks.destroy', ':id') }}'.replace(':id', id);

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: deleteUrl,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                response.success,
                                'success'
                            );
                            $('#basic_tables').DataTable().ajax.reload(); // Reload DataTable
                        },
                        error: function(response) {
                            Swal.fire(
                                'Error!',
                                response.responseJSON.error || 'An error occurred.',
                                'error'
                            );
                        }
                    });
                }
            });
        }

        function changeStatus(event, id) {
            event.preventDefault();
            let statusUrl = '{{ route('socialLinks.status', ':id') }}'.replace(':id', id);

            Swal.fire({
                title: 'Are you sure?',
                text: "You want to change the status of this dynamic page.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, change it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: statusUrl,
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            Swal.fire(
                                'Status Updated!',
                                response.success,
                                'success'
                            );
                            $('#basic_tables').DataTable().ajax.reload(); // Reload DataTable
                        },
                        error: function(response) {
                            Swal.fire(
                                'Error!',
                                response.responseJSON.error || 'An error occurred.',
                                'error'
                            );
                        }
                    });
                }
            });
        }
    </script>
@endpush
