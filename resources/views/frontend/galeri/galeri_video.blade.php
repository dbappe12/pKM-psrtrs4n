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
.galeri {
    width: 270px; /* width of container */
    height: 370px; /* height of container */
    object-fit: cover;
    border: 0px solid black;
}

.vidio {
    width: 370px; /* width of container */
    height: 450px; /* height of container */
    object-fit: cover;
    border: 0px solid black;
}
    
     
     
</style>

        <!--Team One Start-->
        <section class="project-two">
            <div class="project-two__shape-1 float-bob-x">
                <img src="{{ asset('frontend/assets/images/shapes/project-two-shape-1.png')}}" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                {{ Breadcrumbs::render('galeri_video') }}
                    <h2 class="section-title__title">Video </h2>
                </div>
                <div class="project-two__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    "items": 1,
                    "margin": 30,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "nav":false,
                    "dots":true,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":1
                        },
                        "992":{
                            "items": 1
                        },
                        "1200":{
                            "items": 1
                        }
                    }

                }'>
                    <!--Project Two Single Start-->
                    @foreach($galeri_video as $row)     
                    <div class="item">
                        <div class="project-two__single">
                            <div class="project-two__img">
                                <img class="vidio" src="{{$row->foto}}" alt="">
                                <div class="project-two__arrow">
                                <a href="{{ $row->link }}" target="_blank"><br><span class="fa fa-solid fa-play"></span></a>
                                </div>
                            </div>
                            <div class="project-two__content">
                                <p class="project-two__sub-title">{{$row->judul}}</p>
                               
                                </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--Project Two Single End-->
                </div>
            </div>
        </section>
        <!--Team One End-->
          
            @endsection