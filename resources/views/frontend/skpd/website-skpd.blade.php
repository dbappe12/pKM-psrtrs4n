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
    width: 570px; /* width of container */
    height: 436px; /* height of container */
    object-fit: cover;
    object-position: 20% 10%; /* try 20px 10px */ 
    border: 0px solid black;
}  
.skpd {
    width: 100px; /* width of container */
    height: 100px; /* height of container */
    object-fit: cover;
    border: 0px solid black;
}
</style>

        <!--Team One Start-->
        <section  class="team-one">
            <div class="container">
                <div class="section-title text-center">
                {{ Breadcrumbs::render('website_skpd') }}
                    <h2   class="section-title__title">WEBSITE SKPD
                        </h2>
                </div>
                <div class="row">

                <div >
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                
                                @foreach($website_skpds as $berita)  
                                <?php
                                        $url = URL::to("baca/".$berita->id."/".str_replace(' ','-',$berita->judul)."/".$berita->judul);
                                        ?>  
                                <li>
                                        <div class="sidebar__post-image">
                                        <a   target="_blank" href="{{$berita->link}}"><img   class="skpd" src="{{$berita->foto}}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                            <a  target="_blank" href="{{$berita->link}}">{{$berita->judul}} <bold>| </bold>{{$berita->opd}}</a>
                                                <span class="sidebar__post-content-meta">{{$berita->keterangan}}</span>
                                             
                                            </h3>
                                        </div>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <!--Team One Single Start-->
                    
                    <!-- @foreach($website_skpds as $row)  
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                            <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                <a href="{{$row->link}}"><img src="{{asset('frontend/website-skpd/'.$row->foto)}}" alt="">
                                                   </a>
                                                   
                                                </div>
                                                <div class="testimonial-one__content">
                                                   
                                                    <h3 class="testimonial-one__client-name">{{$row->judul}}</h3>
                                                    <p class="testimonial-one__client-sub-title">{{$row->opd}}</p>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">{{$row->keterangan}}</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{ $website_skpds->links() }} -->

                </div>
            </div>
        </section>
        <!--Team One End-->
            @endsection