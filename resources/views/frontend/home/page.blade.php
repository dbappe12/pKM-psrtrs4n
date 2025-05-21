@extends('frontend.layouts.app')
@section('content')


<style>
   .cropped1 {
    width: 70px; /* width of container */
    height: 73px; /* height of container */
    object-fit: cover;
    border: 0px solid black;
}
.cropped2 {
    width: 210px; /* width of container */
    height: 203px; /* height of container */
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
</style>
        <!--Page Header End-->
        <!--News Details Start-->
       
            
                
                   
                       
                    
           
         
     
        <section class="news-details">
            <div class="container">
            
                        @if ($slug == 'pemerintah-batanghari')
                {{ Breadcrumbs::render('page', $slug) }}
            @elseif($slug=='akuntabiltas-pemerintahan')
                {{ Breadcrumbs::render('page', $slug) }}
            @elseif($slug=='akuntabiltas-pelaporan')
                {{ Breadcrumbs::render('page', $slug) }}
            @else($slug=='akuntabilitas-batanghari')
                {{ Breadcrumbs::render('page.tampil', $slug) }}
            @endif
                     
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                           
                            <div class="news-details__content">
        
                                <h3 class="news-details__title">{{$judul}}</h3>
                                <p class="news-details__text-1">
                                <?php echo $isi;?>
                                </p>
                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                
                                @foreach($beritaTerbaru as $berita)  
                               
                                <li>
                                        <div class="sidebar__post-image">
                                            <img   class="cropped1" src="{{$berita->gambar}}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i>by Admin <bold>| </bold>{{$berita->tanggal}} </span>
                                                <a href="{{route('read', ['id' =>$berita->id,'title' =>$berita->judul])}}">{{$berita->judul}}</a>
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
        <!--News Details End-->

            @endsection