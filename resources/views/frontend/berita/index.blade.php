@extends('frontend.layouts.app')
@section('content')


<style>
   .cropped1 {
    width: 210px; /* width of container */
    height: 203px; /* height of container */
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
     
     
</style>

        <!--News One Start-->
        <section class="news-one">
            <div class="container">
            {{ Breadcrumbs::render('berita.index') }}
            </ul>
                <div class="section-title text-center">
                    <h2 class="section-title__title">Berita</h2>
                </div>
                <div class="row">
                    <!--News One Single Start-->
                    
                    @foreach($berita as $row)  
           
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                <img class="cropped1"    src="{{$row->gambar}}"alt="">
                                </div>
                                <div class="news-one__date">
                                    <p>{{$row->tanggal}}</p>
                                </div>
                                <ul class="news-one__meta list-unstyled">
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin <bold>| </bold>{{$row->tanggal}}</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="news-one__content">
                            <h3 class="news-two__title"><a href="{{route('read', ['id' =>$row->id,'title'=>$row->judul])}}">{{ substr($row->judul,0,50) }} ...</a></h3>
                               
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{ $berita->links() }}

                    <!--News One Single End-->
                    
                 
                    <!--News One Single End-->
                </div>
                
            </div>
        </section>
       
            @endsection