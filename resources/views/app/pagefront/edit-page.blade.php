@extends('admin.layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('template/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/flatpicker/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('plugins/flatpicker/flatpickr.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template/admin/plugins/summernote/summernote-bs4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('plugins/filepond/filepond.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/filepond/filepond-plugin-image-preview.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/filepond/filepond-plugin-get-file.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/filepond/filepond-plugin-image-overlay.css') }}">

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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <form id="form_tambah">
                               <input hidden   id="id" name="id" value='{{$record}}'/>
                               <input hidden   id="url" name="url" value='{{ route('front.show', $record) }}'>
                               <input hidden   id="jenis" name="jenis" value='edit'/>
                                <x-input label="Judul" id="judul"  info="Info : Sample Data Description Info"
                                    placeholder="Judul" />

                             <x-input label="Slug" id="slug"  info="Info : Sample Data Description Info"
                                    placeholder="Slug" />
                              
                              
                               
                              
                                    <x-summernote id="summernote" name="body" label="Summenote Editor" />
                               <div class="modal-footer">
                                    <button type="submit" class="btn_submit btn btn-primary">Simpan</button>
                              </div>
                           </form>
                               

                            </div>

                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
   
@endsection

@push('js')

<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('template/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('template/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>

{{-- currency format input --}}
<script src="{{ asset('plugins/autoNumeric.min.js') }}"></script>

{{-- flatcpiker format date input --}}
<script src="{{ asset('plugins/flatpicker/flatpickr.min.js') }}"></script>
<script src="{{ asset('plugins/flatpicker/id.min.js') }}"></script>

{{-- filepond --}}
<script src="{{ asset('plugins/filepond/filepond-plugin-file-poster.js') }}"></script>
<script src="{{ asset('plugins/filepond/filepond.js') }}"></script>
<script src="{{ asset('plugins/filepond/filepond-plugin-file-metadata.js') }}"></script>
<script src="{{ asset('plugins/filepond/filepond-plugin-file-encode.js') }}"></script>
<script src="{{ asset('plugins/filepond/filepond-plugin-file-validate-type.js') }}"></script>
<script src="{{ asset('plugins/filepond/filepond-plugin-file-validate-size.js') }} "></script>
<script src="{{ asset('plugins/filepond/filepond-plugin-image-preview.js') }}"></script>

<script src="{{ asset('plugins/filepond/filepond-get-files.js') }}"></script>
<script src="{{ asset('plugins/magnific/jquery.magnific-popup.min.js') }}"></script>




{{-- password toggle show/hide --}}
<script src="{{ asset('plugins/toggle-password.js') }}"></script>

{{-- masking input currency,date input --}}
<script src="{{ asset('plugins/jquery.mask.min.js') }}"></script>
<script src="{{ asset('plugins/filepond/filepond-plugin-image-overlay.js') }}"></script>
<script>
        $(document).ready(function() {

            $('.select2bs4').select2({
                theme: 'bootstrap4',
            })
            
            const flatpicker = flatpickr("#tanggal", {
                allowInput: true,
                dateFormat: "d M Y",
                locale: "id",
            });

            FilePond.registerPlugin(
                //  FilePondPluginGetFile,
                FilePondPluginFileEncode,
                FilePondPluginImagePreview,
                FilePondPluginFilePoster,
                
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
               
            
                 })



             
                let url = $(this).attr('data-url');
              
                var id = $('#id').val();
                var link = $('#url').val();
                $.get(link, function(response) {
                    $('#judul').val(response.judul)
                    $('#slug').val(response.slug)
                    $("#summernote").summernote('code', response.isi);
                    flatpicker.setDate(response.tanggal)

                    
                  
                })

          
         

            

            const format = AutoNumeric.multiple('.rupiah', {
                //  currencySymbol: 'Rp ',
                digitGroupSeparator: '.',
                decimalPlaces: 0,
                minimumValue: 0,
                decimalCharacter: ',',
                formatOnPageLoad: true,
                allowDecimalPadding: false,
                alwaysAllowDecimalCharacter: false
            })

            $("#form_tambah").submit(function(e) {
                e.preventDefault();
                const formData = new FormData(this);
                formData.append('pemilik_mobil_id', $("#pemilik_mobil_id").val());
                $.ajax({
                    type: 'POST',
                    url: @json(route('front.store')),
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
                            $('#summernote').summernote('code', '');
                            Swal.fire({
                                icon: 'success',
                                title: response.message,
                                showCancelButton: true,
                                allowEscapeKey: false,
                                showCancelButton: false,
                                allowOutsideClick: false,
                            }).then((result) => {
                                //datatable.ajax.reload(null, false)
                                window.location.href = @json(route('front.index'));
                            })
                            swal.hideLoading()
                        }
                    },
                    error: function(response) {
                        showError(response)
                    }
                });
            });

          

                $(document).ready(function() {
                    var customButtons = [
                        ['style', ['style']],
                        ['fontname', ['fontname']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['insert', ['link', 'picture', 'video']],
                        ['fontsize', ['fontsize']],
                        ['table', ['table']],
                        ['view', ['fullscreen', 'codeview']]
                    ];

                    $('#summernote').summernote({
                        toolbar: customButtons,
                        height: 300,
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
                                ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                                ['remove', ['removeMedia']],
                                ['custom', ['imageAttributes']],
                            ]
                        },
                
                    });
                });




          

           


          
  

          
         
        
        })
    </script>
@endpush
