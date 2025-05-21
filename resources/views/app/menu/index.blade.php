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
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                @can('create pegawai')
                                    <a href="#" class="btn btn-sm btn-primary" id="btn_tambah"><i
                                            class="fas fa-plus"></i> Tambah Menu</a>
                                @endcan            
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="card-body table-responsive">
                                        <table id="datatable" class="table table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Type</th> 
                                                    <th>Judul</th> 
                                                    <th>Sub Menu</th> 
                                                    <th>Hak Akses</th> 
                                                    
                                                    <th>#Aksi</th>
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
@include('app.menu.modal-create')

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


            

            $('.select2bs4').select2({
                theme: 'bootstrap4',
            })

            const flatpicker = flatpickr("#tanggal_lahir", {
                allowInput: true,
                dateFormat: "d-m-Y",
                locale: "id",
            });

        


            let datatable = $("#datatable").DataTable({
                serverSide: true,
                processing: true,
                searching: true,
                lengthChange: true,
                responsive: true,
                paging: true,
                info: true,
                ordering: true,
                order: [
                    [2, 'desc']
                ],
                ajax: @json(route('menu.index')),

                columns: [{
                        data: "DT_RowIndex",
                        orderable: false,
                        searchable: false,
                        width: '1%'
                    },
                    {
                        data: 'type',
                    },
                    {
                        data: 'title',
                    },
                    {
                        data: 'total_menu',
                    },
                    {
                        data: 'hak_akses',
                    },
                  
                   
                    {
                        data: "action",
                        orderable: false,
                        searchable: false,
                    },
                ]
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
                    url: @json(route('menu.store')),
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
              
                $('#jns').prop("disabled", true);
                $('.modal-title').text('Ubah Data')
                $('.error').hide();
                let url = $(this).attr('data-url');
                $.get(url, function(response) {
                  $('#id').val(response.data.id)
                  $('#type').val(response.data.type).trigger('change');
                //   $("#role").val(('["superadmin","admin","operator"]')).trigger('change');
                  $("#role").val(response.data.hakakses).change()
                  $('#judul').val(response.data.title)
                  $('#url').val(response.data.url)
                  $('#icon').val(response.data.icon)
           

              
               
                
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

    //  $(document).ready(function () {
    //     // Initial setup: hide the target select
    //     $('#jenis').hide();
    //     $('#grup').hide();
    //   //  $('#targetSelectLabel').hide();

    //     // Event listener for the change event on the trigger select
    //     $('#type').change(function () {
    //         // Check the selected value
    //         var selectedValue = $(this).val();

    //         // Show or hide the target select based on the selected value
    //         if (selectedValue === 'tree') {
    //             $('#jenis').show();
                
    //            /// document.getElementById("jns").required = true;
             
    //             // $('#targetSelectLabel').show();
    //         } else {
    //             $('#jenis').hide();
    //             $('#grup').hide();
              
    //             // $('#targetSelectLabel').hide();
    //         }
    //     });
    // });

    // $(document).ready(function () {
    //     // Initial setup: hide the target select
    //    // $('#jenis').hide();
    //    $('#jenis').hide();
    //     $('#grup').hide();
    //   //  $('#targetSelectLabel').hide();

    //     // Event listener for the change event on the trigger select
    //     $('#jns').change(function () {
    //         // Check the selected value
    //         var selectedValue = $(this).val();

    //         // Show or hide the target select based on the selected value
    //         if (selectedValue === 'Sudah Ada') {
    //             $('#grup').show();
             
    //             // $('#targetSelectLabel').show();
    //         } else {
    //             $('#grup').hide();
              
    //             // $('#targetSelectLabel').hide();
    //         }
    //     });
    // });




        })
    </script>
@endpush
