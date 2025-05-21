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
                                            class="fas fa-plus"></i> Tambah Foto</a>
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="card-body table-responsive">
                                        <table id="datatable" class="table table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Foto</th> 
                                                    <th>Ket</th> 
                                                    <th>created_at</th>
                                                    <th>updated_at</th>
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
@include('app.popup.modal-create')

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
    <script src="{{ asset('plugins/filepond/filepond-plugin-image-validate-size.js')}}"></script>
    <script src="{{ asset('plugins/filepond/filepond-plugin-image-preview.js') }}"></script>
    <script src="{{ asset('plugins/filepond/filepond-plugin-file-rename.js') }}"></script>
    <script src="{{ asset('plugins/filepond/filepond-plugin-image-crop.js') }}"></script>
    <script src="{{ asset('plugins/filepond/filepond-plugin-image-transform.js') }}"></script>></script>

    <script src="{{ asset('plugins/filepond/filepond-get-files.js') }}"></script>
    <script src="{{ asset('plugins/magnific/jquery.magnific-popup.min.js') }}"></script>


   
    <script src="{{ asset('template/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>


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
                    FilePondPluginFileEncode,
                    FilePondPluginImagePreview,
                    FilePondPluginFilePoster,
                    FilePondPluginImageValidateSize,
                  
                    FilePondPluginImageCrop,
                    FilePondPluginFileValidateType,
                    FilePondPluginImageTransform,
                    FilePondPluginFileValidateSize
                );

                // FilePond.registerPlugin(FilePondPluginFilePoster);

                const inputElement = document.querySelector('input[type="file"]');
                const pond = FilePond.create(inputElement, {
                    storeAsFile: true,
                    acceptedFileTypes: ['image/*'],
                    fileValidateTypeDetectType: true,
                  
                    imageTransformOutputQuality: 90,  // Kualitas gambar hasil crop
                    imageTransformOutputMimeType: 'image/jpeg',  // Format output
                    allowImageTransform: true  , 
                
                  
                    maxFileSize: '5MB', // Max file size (5MB in this case)
                    allowFileSizeValidation: true,
                });

                pond.setOptions({
                    allowImagePreview: true,
                    allowFileMetadata: true
                });


           



            

            $('.select2bs4').select2({
                theme: 'bootstrap4',
            })

            const flatpicker = flatpickr("#tanggal_lahir", {
                allowInput: true,
                dateFormat: "d-m-Y",
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
                ajax: @json(route('popup.index')),

                columns: [{
                        data: "DT_RowIndex",
                        orderable: false,
                        searchable: false,
                        width: '1%'
                    },
                    { 
                        "data": "foto",
                        "render": function(data, type, row) {
                            return '<img src="'+ data +'" height="50" width="50"/>';
                        }
                   },
                    {
                        data: 'ket',
                    },
                    {
                        data: 'created_at',
                    },
                    {
                        data: 'updated_at',
                    },
                    {
                        data: "action",
                        orderable: false,
                        searchable: false,
                    },
                ]
            });

            $("#btn_tambah").click(function() {
                pond.removeFile();
              
                // const img = document.getElementById('foto');
                // img.setAttribute('src', '');
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
                    url: @json(route('popup.store')),
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
                pond.removeFile();
                $('.modal-title').text('Ubah Data')
                $('.error').hide();
                let url = $(this).attr('data-url');
                $.get(url, function(response) {
                    $('#id').val(response.data.id)
                    $('#keterangan').val(response.data.ket)    
                    $('input:radio[name=status][value='+response.data.status+']')[0].checked = true;
                    const externalImageUrl_cover = response.data.foto;
                    pond.setOptions({
                        allowImagePreview: true,
                        allowFileMetadata: true,
                        files: [
                            {
                                source: externalImageUrl_cover,
                                options: {
                                    type: 'local',
                                    file: {
                                    
                                        type: 'image/jpeg'
                                    },
                                    metadata: {
                                        poster: externalImageUrl_cover
                                    }
                                }
                            }
                        ]
                    });

                //     pond.addFile(externalImageUrl_cover).then((file) => {
                //     // File added successfully
                //         console.log('File added:', file);
                //     }).catch((error) => {
                //         // Error adding file
                //         console.error('Error adding file:', error);
                //     });

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
