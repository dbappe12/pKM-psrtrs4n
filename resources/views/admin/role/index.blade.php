@extends('admin.layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('template/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('plugins/flatpicker/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatable/dataTables.checkboxes.css') }}">
@endpush
@section('content')
    <style>

    </style>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $title }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <a href="#" class="btn btn-sm btn-primary" id="btn_tambah"><i
                                            class="fas fa-plus"></i> Tambah harga</a>
                                    {{-- <a href="#" class="btn btn-sm btn-warning" id="btn_pengaturan_harga"><i
                                            class="fas fa-tools"></i> Pengaturan Harga</a> --}}
                                    <a style="display: none" href="#" class="btn btn-sm btn-danger"
                                        id="btn_hapus_masal"><i class="fas fa-trash"></i> Hapus Masal</a>
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="card-body table-responsive">
                                        <table id="datatable" class="table table-bordered" style="width:100%">
                                            <thead>
                                            <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Guard</th>
                            <th>Description</th>
                            <th class="text-center">Users</th>
                            <th class="text-center">Permission</th>
                            <th>CreatedAt</th>
                            @canany(['update role', 'delete role'])
                                <th>Action</th>
                            @endcanany
                        </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@include('admin.role.modal-create')

@endsection
@push('js')
    <script src="{{ asset('template/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {
            let datatable = $("#datatable").DataTable({
                serverSide: true,
                processing: true,
                paginate:false,
                aaSorting: [],
                order: [
                    [1, 'asc']
                ],
                scrollX: true,
                bAutoWidth: false,
                fixedColumns: true,
                ajax: @json(route('role.index')),
                columns: [{
                        data: "DT_RowIndex",
                        orderable: false,
                        searchable: false,
                    },
                    {
                        data: 'name',
                    },
                    {
                        data: 'guard_name',
                        searchable: false,
                    },
                    {
                        data: 'guard_name',
                        searchable: false,
                    },
                    {
                        data: 'user',
                        className: 'dt-body-center',
                    },
                    {
                        data: 'permissions',
                        className: 'dt-body-center',
                    },
                    {
                        data: 'created_at',
                        searchable: false,
                    },
                    {
                        data: "action",
                        orderable: false,
                        searchable: false,
                        width: '10%',
                    },
                ]
            })


            $('#btn_add').click(function(e) {
                e.preventDefault()
                _clearInput()
                $('#modal_create_edit').modal('show')
            })

            
            $("#form_create_edit").submit(function(e) {
                e.preventDefault()
                const formData = new FormData(this)
                $.ajax({
                    type: 'POST',
                    url: route('role.store'),
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        _showLoading()
                    },
                    success: (response) => {
                        if (response) {
                            $('#modal_create_edit').modal('hide')
                            datatable.ajax.reload()
                            alertSuccess()
                        }
                    },
                    error: function(response) {
                        _showError(response)
                    }
                })
            })


            $('#datatable').on('click', '.btn_delete', function(e) {
                e.preventDefault()
                Swal.fire({
                    title: 'Are you sure, you want to delete this data Role ?',
                    text: $(this).attr('data-action'),
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6 ',
                    confirmButtonText: 'Yes, Delete'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                _method: 'DELETE'
                            },
                            url: $(this).attr('data-url'),
                            beforeSend: function() {
                                _showLoading()
                            },
                            success: (response) => {
                                datatable.ajax.reload()
                                _alertSuccess(response.message)
                            },
                            error: function(response) {
                                _showError(response)
                            }
                        })
                    }
                })
            })

        })
        
       
    </script>
@endpush
