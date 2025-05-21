<?php

$tbh_menu = json_decode(json_encode(
    array(
            ['value'=>'Buat Baru','text'=>'Buat Baru'],
            ['value'=>'Sudah Ada','text'=>'Sudah Ada']
        )
));
?>
@extends('admin.layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('template/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('plugins/flatpicker/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
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
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Master Aplikasi</a></li>
                            <li class="breadcrumb-item active">{{ $title }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                @can('create user')
                                    <a href="#" class="btn btn-sm btn-primary" id="btn_tambah"><i
                                            class="fas fa-plus"></i> Tambah User</a>
                                @endcan            
                                </h3>
                            </div>
                            <div class="card-body">
                <table id="datatable" class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Kontak</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Last Login</th>
                                    <th>IP</th>
                                    @canany(['update user', 'delete user'])
                                        <th>Action</th>
                                    @endcanany
                                </tr>
                            </thead>
                </table>
                         
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@include('admin.user.modal-create')

@endsection
@push('js')
    <script src="{{ asset('template/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('plugins/flatpicker/flatpickr.min.js') }}"></script>
    <script src="{{ asset('plugins/flatpicker/id.min.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2-min.js') }}"></script>
    <script>
        $(document).ready(function() {

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
                ajax: @json(route('user.index')),
                columns: [{
                        data: "DT_RowIndex",
                        orderable: false,
                        searchable: false,
                        width: '1%'
                    },
                       
                {
                    data: 'username',
                    orderable: false,
                },
                {
                    data: 'name',
                    orderable: true,
                },

                {
                    data: 'kontak',
                    orderable: true,
                },
               

                {
                    data: 'role',
                    orderable: true,
                },
                {
                    data: 'status',
                    className: 'dt-body-center',
                    orderable: true,
                    width: '10px',
                    searchable: false,
                },
                {
                    data: 'last_login_human',
                    data: 'last_login_at',
                    className: 'dt-body-center',
                    orderable: true,
                    searchable: false,
                },
                {
                    data: 'last_login_ip',
                    className: 'dt-body-center',
                    orderable: true,
                    searchable: false,
                },
                {
                    data: "action",
                    orderable: false,
                    searchable: false,
                },
                ]
            })



            

            $('.select2bs4').select2({
                theme: 'bootstrap4',
            })

            const flatpicker = flatpickr("#tanggal_lahir", {
                allowInput: true,
                dateFormat: "d-m-Y",
                locale: "id",
            });

            
  


         

            $("#btn_tambah").click(function() {
                clearInput()
                $('#modal_create').modal('show')
                $('.modal-title').text('Tambah Data')
            });

            
              
            $("#form_tambah").submit(function(e) {
                e.preventDefault();
                const formData = new FormData(this);
                formData.append('method', 'PUT');
                $.ajax({
                    type: 'POST',
                    url: @json(route('user.store')),
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function() {
                        showLoading()
                    },
                    success: (response) => {
                        if (response) {
                            this.reset()
                            $('#modal_create').modal('hide')
                            Swal.fire({
                                icon: 'success',
                                title: response.message,
                                showCancelButton: true,
                                allowEscapeKey: false,
                                showCancelButton: false,
                                allowOutsideClick: false,
                            }).then((result) => {
                                swal.hideLoading()
                                datatable.ajax.reload()
                            })
                            swal.hideLoading()
                        }
                    },
                    error: function(response) {
                        showError(response)
                    }
                });
            });
     
            $('#datatable').on('click', '.btn_edit', function(e) {
               clearInput()
                $('#modal_create').modal('show')
                $('.modal-title').text('Ubah Data')
                $('.error').hide();
                let url = $(this).attr('data-url');
                $.get(url, function(response) {
                  $('#id').val(response.data.id)
                  $('#nama').val(response.data.name)
                  $('#username').val(response.data.username)
                  $('#kontak').val(response.data.kontak)
                  $('#alamat').val(response.data.alamat)
                  $('#role').val(response.data.role).trigger("change")
                 

                
                
                 
                })
            });

            $('#datatable').on('click', '.btn_hapus', function(e) {
                let data = $(this).attr('data-hapus');
                Swal.fire({
                    title: 'Apakah anda yakin ingin menghapus data pegawai?',
                    text: data,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).find('#form-delete').submit();
                    }
                })
            });

     $(document).ready(function () {
        // Initial setup: hide the target select
        $('#jenis').hide();
        $('#grup').hide();
      //  $('#targetSelectLabel').hide();

        // Event listener for the change event on the trigger select
        $('#type').change(function () {
            // Check the selected value
            var selectedValue = $(this).val();

            // Show or hide the target select based on the selected value
            if (selectedValue === 'tree') {
                $('#jenis').show();
                
               /// document.getElementById("jns").required = true;
             
                // $('#targetSelectLabel').show();
            } else {
                $('#jenis').hide();
                $('#grup').hide();
              
                // $('#targetSelectLabel').hide();
            }
        });
    });

    $(document).ready(function () {
        // Initial setup: hide the target select
       // $('#jenis').hide();
       $('#jenis').hide();
        $('#grup').hide();
      //  $('#targetSelectLabel').hide();

        // Event listener for the change event on the trigger select
        $('#jns').change(function () {
            // Check the selected value
            var selectedValue = $(this).val();

            // Show or hide the target select based on the selected value
            if (selectedValue === 'Sudah Ada') {
                $('#grup').show();
             
                // $('#targetSelectLabel').show();
            } else {
                $('#grup').hide();
              
                // $('#targetSelectLabel').hide();
            }
        });
    });




        })
    </script>
@endpush
