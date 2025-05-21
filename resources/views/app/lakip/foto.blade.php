<?php

$jns_kelamin = json_decode(json_encode(
    array(
            ['value'=>'Laki-Laki','text'=>'Laki-Laki'],
            ['value'=>'Perempuan','text'=>'Perempuan']
        )
));
?>
@extends('admin.layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('template/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('plugins/flatpicker/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/filepond/filepond.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/filepond/filepond-plugin-image-preview.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/filepond/filepond-plugin-get-file.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/filepond/filepond-plugin-image-overlay.css') }}">
    <link rel="stylesheet" href="{{ asset('template/admin/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/magnific/magnific-popup.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('plugins/filepond/filepond-plugin-file-poster.css') }}"  />
    <style>
     #file_pdf .filepond--item {
            cursor: pointer;
        }
        .filepond--list-scroller {
            cursor: default;
        }
        .filepond--root {
            height: auto;
        }
        @media (min-width: 576px) {
            #file_cover_multi .filepond--item {
                width: calc(32% - 0.5em);
            }
        }
        a {
            color: dodgerblue;
            text-decoration: none;
        }
        a:hover {
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
    @endpush
@section('content')
    <style>

    </style>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{$title}}</h1>
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
                                            class="fas fa-plus"></i> Tambah Kegiatan</a>
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="card-body table-responsive">
                                        <table id="datatable" class="table table-bordered" style="width:100%">
                                            <thead>
                                            <tr>
                                                    <th>No</th>
                                                    <th>Nama</th> 
                                                    <th>Foto</th> 
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
@include('app.kegiatan.modal-create-foto')

@endsection
@push('js')
    <script src="{{ asset('template/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('plugins/flatpicker/flatpickr.min.js') }}"></script>
    <script src="{{ asset('plugins/flatpicker/id.min.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2-min.js') }}"></script>
    <script src="{{ asset('plugins/filepond/filepond-plugin-file-poster.js') }}"></script>
    <script src="{{ asset('plugins/filepond/filepond.js') }}"></script>
    <script src="{{ asset('plugins/filepond/filepond-plugin-file-metadata.js') }}"></script>
    <script src="{{ asset('plugins/filepond/filepond-plugin-file-encode.js') }}"></script>
    <script src="{{ asset('plugins/filepond/filepond-plugin-file-validate-type.js') }}"></script>
    <script src="{{ asset('plugins/filepond/filepond-plugin-file-validate-size.js') }} "></script>
    <script src="{{ asset('plugins/filepond/filepond-plugin-image-preview.js') }}"></script>

    <script src="{{ asset('plugins/filepond/filepond-get-files.js') }}"></script>
    <script src="{{ asset('plugins/magnific/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('template/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>

    <script src="https://unpkg.com/filepond-plugin-pdf-preview/dist/filepond-plugin-pdf-preview.min.js"></script>
    <link href="https://unpkg.com/filepond@4.30.6/dist/filepond.css" rel="stylesheet">
    <script src="https://unpkg.com/filepond@4.30.6/dist/filepond.js"></script>
    {{-- password toggle show/hide --}}
    <script src="{{ asset('plugins/toggle-password.js') }}"></script>

    {{-- masking input currency,date input --}}
    <script src="{{ asset('plugins/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('plugins/filepond/filepond-plugin-image-overlay.js') }}"></script>
    <script>

        
        function preview() {
            foto.src=URL.createObjectURL(event.target.files[0]);
        }
        $(document).ready(function() {



            FilePond.registerPlugin(
                //  FilePondPluginGetFile,
                FilePondPluginFileEncode,
                FilePondPluginImagePreview,
                FilePondPluginFilePoster,
                FilePondPluginPdfPreview,
                FilePondPluginFileValidateType,
                FilePondPluginFileValidateSize)



                const foto = FilePond.create(document.querySelector('#foto'),{
                    storeAsFile: true,
                    fileValidateTypeDetectType: true,
                    acceptedFileTypes: ['image/*'],
                    maxFileSize: 2000000, //10 mbs max size
                    allowFileSizeValidation: true,
                });
               
                foto.setOptions({
                allowImagePreview: true,
                allowPdfPreview: true,
                pdfPreviewHeight: 320,
                pdfComponentExtraParams: 'toolbar=0&view=fit&page=1'  
                 })




            $('.select2bs4').select2({
                theme: 'bootstrap4',
            })

            const flatpicker = flatpickr("#tanggal", {
                allowInput: true,
                dateFormat: "Y-d-m",
                locale: "id",
            });

            
            $('#summernote').summernote({
                height: 200,
                imageTitle: {
                    specificAltField: true,
                },
                imageAttributes: {
                    icon: '<i class="note-icon-pencil"/>',
                    figureClass: 'figureClass',
                    figcaptionClass: 'captionClass',
                    captionText: 'Caption Goes Here.',
                    manageAspectRatio: true // true = Lock the Image Width/Height, Default to true
                },
                popover: {
                    image: [
                        ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                        ['float', ['floatLeft', 'floatRight', 'floatNone']],
                        ['remove', ['removeMedia']],
                        ['custom', ['imageAttributes']],
                    ],
                },
            })



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
                bAutoWidth: false,
                fixedColumns: true,
                ajax: @json(route('kegiatan.show',$kegiatan_id)),
                columns: [{
                data: "DT_RowIndex",
                orderable: false,
                searchable: false,
                },
                
                {
                data: 'nama',
                },

                { 
                        "data": "foto",
                        "render": function(data, type, row) {
                            return '<img src="' + '{{ asset("frontend/kegiatan/") }}' + '/' + data + '" height="50" width="50"/>';
                        }
                 },
                    
        
                {
                    data: "action",
                    orderable: false,
                    searchable: false,
                    width: '10%',
                },
                 ]
               })
          


          

        



            $("#btn_tambah").click(function() {
                clearInput()
                foto.removeFile();

                $('#modal_create').modal('show')
                $('.modal-title').text('Tambah Data')
            });

              
            $("#form_tambah").submit(function(e) {
                e.preventDefault();
                const formData = new FormData(this);
                formData.append('method', 'PUT');
                $.ajax({
                    type: 'POST',
                    url: @json(route('kegiatan.store')),
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
                $('#modal_create').modal('show')
                $('.modal-title').text('Ubah Data')
                $('.error').hide();
                foto.removeFile();
                let id = $(this).attr("data-id");
                let url = $(this).attr('data-url');
                $.get(url, function(response) {
                    $('#id').val(response.data.id)
                    $('#nama').val(response.data.nama)
              
                    const externalImageUrl = "{{ asset('frontend/kegiatan/') }}"+"/"+response.data.foto;

                    // Add the external image to FilePond
                    foto.addFile(externalImageUrl).then((file) => {
                        // File added successfully
                        console.log('File added:', file);
                    }).catch((error) => {
                        // Error adding file
                        console.error('Error adding file:', error);
                    });

                        

           


                })
            });

            $('#datatable').on('click', '.btn_hapus', function(e) {
                let data = $(this).attr('data-hapus');
                Swal.fire({
                    title: 'Apakah anda yakin ingin menghapus data ini?',
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

             

        })
    </script>
@endpush
