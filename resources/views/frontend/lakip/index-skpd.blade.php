@extends('frontend.layouts.app')
@section('content')

    <link href="{{asset('plugins/datatable/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
   
    <script src="{{ asset('plugins/jquery/jquery-3.5.1.js') }}"></script>
   

  

<?php
$years = [];

// Define the start year and end year
$startYear = 2013;
$currentYear = date('Y'); // Get the current year

// Loop through the years and add them to the array
for ($year = $startYear; $year <= $currentYear; $year++) {
    $years[] = ['value' => $year, 'text' => $year];
}

// Encode the array to JSON
$json = json_decode(json_encode($years));

?>


<style>
     .post-info {
            font-size: 14px;
            color: #555;
            margin-top: 20px;
        }
   .cropped1 {
    width: 70px; /* width of container */
    height: 73px; /* height of container */
    object-fit: cover;
    border: 0px solid black;
}
.cropped2 {
    width: 570px; /* width of container */
    height: 436px; /* height of container */
    object-fit: cover;
    object-position: 20% 10%; /* try 20px 10px */ 
    border: 0px solid black;
}  
.galeri {
    width: 270px; /* width of container */
    height: 370px; /* height of container */
    object-fit: cover;
    border: 0px solid black;
}


        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
</style>
        <!--News Details Start-->
        <section class="news-details">
            <div class="container">
            {{ Breadcrumbs::render('lakip') }}
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            <div class="sidebar__single sidebar__post">
                      
                       
                                 <h3 class="news-details__title">{{$judul}}</h3>
                       
                        
    
                
                                <x-select2 id="tahun" label="Filter Tahun" required="false"
                                placeholder="Tahun">
                                <option value="all">All</option>
                                    @foreach ($json as $item)
                                    <option value="{{ $item->value }}">{{ $item->text }}</option>
                                    @endforeach
                                </x-select2>

                               
                                    <x-datatable id="data-table" class="table table-bordered data-table" style="width:100%" :th="[
                                        'No',
                                        'Nama',
                                        'aksi',
                                    ]"></x-datatable>
                            </div>
                        </div>

                                <div class="post-info">
                                    Diposting Oleh <strong>DISKOMINFO Kab. Batang Hari</strong>  <strong>|</strong> 14 Februari 2014
                                </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                
                                @foreach($berita_terbaru as $berita)  
                                <?php
                                        $url = URL::to("baca/".$berita->id."/".str_replace(' ','-',$berita->judul)."/".$berita->tanggal);
                                        ?>  
                                <li>
                                        <div class="sidebar__post-image">
                                            <img   class="cropped1" src="{{$berita->gambar}}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i>by Admin <bold>| </bold>{{$berita->tanggal}}</span>
                                                <a href="{{route('read', ['id' =>$berita->id,'title'=>$berita->judul])}}">{{$berita->judul}}</a>
                                            </h3>
                                        </div>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
</section>
<script type="text/javascript">
  $(function () {

    $('.select2bs4').select2({
                theme: 'bootstrap4',
    })
            

    var currentYear = new Date().getFullYear();

// Call function to load data with current year
load_data(currentYear);

   
    
function load_data(tahun=''){

    $('.data-table').DataTable({
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
        ajax: {
            url:'{{ route("lakip.lakip_skpd") }}',
            data:{tahun:tahun}
        },
       
        columns: [
            {
                        data: "DT_RowIndex",
                        orderable: false,
                        searchable: false,
                        width: '1%'
                    },
          
            {data: 'judul', name: 'judul'},
            {data: "link_download",className: 'dt-center',
                    "render": function(data, type, row) {
                            return '<a target="_blank" href="'+ data + '"><i class="fas fa-download"></i></a>';
                }
            },

        ]
    });

}
   

    $('#tahun').on('change', function() {
            var tahun = $(this).val();
            $('.data-table').DataTable().destroy();
            load_data(tahun);
     });
      
  });
</script> 


        <!--News Details End-->

                  
@endsection