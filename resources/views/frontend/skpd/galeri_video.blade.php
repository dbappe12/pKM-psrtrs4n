@extends('frontend.layouts.app')
@section('content')

        <!--Team One Start-->
        <section class="team-one">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">GALERI VIDEO
                        </h2>
                </div>
                <div class="row">
                    
                @foreach($galeri_video as $row)  
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="{{$row->foto}}" alt="" height="200px">
                                </div>
                                <div class="news-one__date">
                                    <p>{{$row->created_at}}</p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <h3 class="news-one__title"><a href="{{$row->link}}">{{ substr($row->judul,0,30) }} ...!</a></h3>
                                
                            </div>
                        </div>
                    </div>
                    <!--Team One Single Startade-->
                    
                    @endforeach
                    {{ $galeri_video->links() }}

                </div>
            </div>
        </section>
        <!--Team One End-->
          
            @endsection