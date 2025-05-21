@extends('frontend.layouts.app')
    <!-- @push('css')
    <link rel="stylesheet" href="{{ asset('css/front_layout_index.css') }}">
    @endpush -->
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

.infografis {
    width: 270px; /* width of container */
    height: 370px; /* height of container */
    object-fit: cover;
    border: 0px solid black;
}

.skpd {
    width: 100px; /* width of container */
    height: 100px; /* height of container */
    object-fit: cover;
    border: 0px solid black;
}
   
/* Styling untuk pop-up */
.popup {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
}

.popup-content {
    position: relative;
    margin: 5% auto;
    padding: 20px;
    width: 90%;
    max-width: 600px;
    background-color: white;
    border-radius: 8px;
    text-align: center;
}

.popup-content img {
    width: 100%;
    height: auto;
    padding: 20px;
    max-height: 80vh; /* Maksimum tinggi gambar relatif terhadap viewport */
    border-radius: 8px;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    color: #333;
    cursor: pointer;
}

.close-btn:hover {
    color: red;
}

/* Penyesuaian untuk perangkat kecil */
@media (max-width: 600px) {
    .popup-content {
        padding: 10px;
        width: 95%;
    }

    .close-btn {
        font-size: 20px;
        top: 5px;
        right: 10px;
    }
}
.main-slider .swiper-slide .image-layer {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh; /* Ensure full height on mobile */
}

@media (max-width: 767px) {
    .main-slider .swiper-slide .image-layer {
        height: 60vh; /* Adjust the height for mobile */
    }
}

.main-slider__content {
    position: relative;
    z-index: 2;
}

.main-slider .swiper-slide {
    position: relative;
}

.section-title__tagline {
      display: block;
      text-align: auto; /* Aligns text to the left */
      font-size: 16px;
      color: #333; /* Default color */
      cursor: pointer; /* Indicates the text is clickable */
      padding: 10px;
      transition: color 0.3s ease; /* Smooth color transition */
    }

    /* Hover effect */
    .section-title__tagline:hover {
      color: #007bff; /* Blue on hover (change as desired) */
    }

    /* Clicked state */
    .section-title__tagline.clicked {
      color: #dc3545; /* Red when clicked (change as desired) */
    }


     
     
</style>
        <!--Main Slider Start-->

        
    @if($popup->status=='YA')    
    <div id="popup" class="popup">
        <div class="popup-content">
       
      
        <!-- <p class="about-two__text-1">{{$popup->ket}}</p> -->
            <span class="close-btn" id="closePopup">&times;</span>
            <img src="{{$popup->foto}}" alt="Popup Image">
        </div>
    </div>
    @endif
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                            "effect": "fade",
                            "pagination": {
                            "el": "#main-slider-pagination",
                            "type": "bullets",
                            "clickable": true
                            },
                            "navigation": {
                            "nextEl": "#main-slider__swiper-button-next",
                            "prevEl": "#main-slider__swiper-button-prev"
                            },
                            "autoplay": {
                            "delay": 5000
                            }}'>
                <div class="swiper-wrapper">
                    @foreach($imageSlider as $row)
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(frontend/slider-image/{{$row->foto}});"></div>
                            <!-- <div class="image-layer"
                            style="background-image: url(frontend/assets/images/backgrounds/main-slider-1-1.jpg);"></div>
                         -->
                            <!-- /.image-layer -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">{{$row->judul}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>

                <div class="swiper-pagination" id="main-slider-pagination"></div>
                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>

            </div>
        </section>


        <section class="news-two">
            <div class="news-two__shape-1" style="background-image: url(frontend/assets/images/shapes/news-two-shape-1.png);">
            </div>
            <div class="container">
                <div class="section-title text-center"> 
                <h2 class="section-title__title">Berita {{config('app.nama_pic')}}</h2>
                <a href="{{url('berita')}}">
                <span class="section-title__tagline">Berita Lainnya</span></a>
                </div>
                <div class="row">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">
                             
                               
                        <div class="news-two__left">
   
                            <div class="news-two__left-img">
                            
                            <img   style="width: 570px; height: 436px; object-fit: none;"  src="{{$latestRecord->gambar}}"alt="">
                          
                                <div class="news-two__left-img-content">
                                    <ul class="news-two__left-meta list-unstyled">
                                        <li>
                                        <a href="{{route('read', ['id' =>$latestRecord->id,'title'=>$latestRecord->judul])}}"><i class="fas fa-user-circle"></i>by Admin</a>
                                        </li>
                                        <li>
                                        <a href="{{route('read', ['id' =>$latestRecord->id,'title'=>$latestRecord->judul])}}"><i class="fas fa-calendar-week"></i></i>{{$latestRecord->tanggal}}</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-two__left-title"><a href="{{route('read', ['id' =>$latestRecord->id,'title'=>$latestRecord->judul])}}">{{ substr($latestRecord->judul,0,50) }} ...!</a></h3>
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-two__right">
                            <ul class="list-unstyled news-two__list">
                            @foreach($beritaTerbaruNew  as $row)  
                                      
                                <li>
                                    <div class="news-two__single">
                                        <div class="news-two__img">
                                            <img class="cropped1"   src="{{ $row->gambar }}"alt="">
                                        </div>
                                        <div class="news-two__content">
                                            <ul class="news-two__meta list-unstyled">
                                                <li>
                                                    <a href="{{route('read', ['id' =>$row->id,'title'=>$row->judul])}}"><i class="fas fa-user-circle"></i>by
                                                        Admin</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('read', ['id' =>$row->id,'title'=>$row->judul])}}"><i class="fas fa-calendar-week"></i>{{$row->tanggal}}</a>
                                                </li>
                                            </ul>
                                            <h3 class="news-two__title">  <a href="{{route('read', ['id' =>$row->id,'title'=>$row->judul])}}">{{ substr($row->judul,0,50) }} ...</a></h3>
                                        </div>
                                    </div>
                                </li>
                                @endforeach  
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--News One Start-->
        <section class="team-two">
            <div class="team-two__shape-2" style="background-image: url(frontend/assets/images/shapes/team-two-shape-2.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Infografis {{config('app.nama_pic')}}</h2>
                    <a href="{{url('infografis')}}">
                    <span class="section-title__tagline">Infografis Lainnya</span></a> 
                </div>
                <div class="row">
                @foreach($infografis as $row)  
                    <!--Team Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-two__single">
                            <div class="team-two__img-box">
                                <div class="team-two__img">
                                <img class="infografis zoom-image" src="{{$row->gambar}}" alt="" data-image="{{$row->gambar}}">
                                </div>
                                <ul class="list-unstyled team-two__social">
                                    <li><a href="{{$row->file}}" target="_blank"><i class="fas fa-download"></i></a></li>
                                  
                                    <!-- <li><a  target="_blank" href="{{$row->file }}"><i class="fab far fa-eye"></i></a></li> -->
                                    <li><a href="#" class="zoom-image" data-image="{{$row->gambar}}"><i class="far fa-eye"></i></a></li>
                                  
                                </ul>
                            </div>
                            <div class="team-two__content text-center">
                                <h3 class="team-two__name">{{$row->judul}}</a></h3>
                                <p class="team-two__sub-title"></p>
                                <ul class="list-unstyled team-two__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team Two Single End-->
                    <!--Team Two Single Start-->
                  
                @endforeach   
                    <!--Team Two Single End-->
                </div>
            </div>
        </section>
        <!--News One End-->
        <!--Testimonial One Start-->

      

        



        <!-- <section class="testimonial-one">
            <div class="testimonial-one__bg"
                style="background-image: url(/assets/images/backgrounds/testimonial-one-bg.png);"></div>
            <div class="testimonial-one__shape-1"
                style="background-image: url(frontend/assets/images/shapes/testimonial-shape-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left">
                            <a href="{{url('website-skpd')}}"><span class="section-title__tagline">Indeks Website SKPD </span></a>
                            <h2 class="section-title__title">Website SKPD</h2>
                           </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="testimonial-one__right">
                            <div class="testimonial-one__carousel thm-owl__carousel owl-theme owl-carousel"
                                data-owl-options='{
                                "items": 1,
                                "margin": 30,
                                "smartSpeed": 700,
                                "loop":true,
                                "autoplay": 6000,
                                "nav":true,
                                "dots":false,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
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
                                        "items": 1.185555
                                    }
                                }

                            }'>
                               @foreach($websiteSkpds as $row) 
                               <div class="item">
                                   

                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                <a href="{{ $row->link }}" target="_blank">
                                                    <img class="skpd" src="{{ $row->foto }}" alt="">
                                                </a>

                                                   
                                                </div>
                                                <div class="testimonial-one__content">
                                                   
                                                    <h3 class="testimonial-one__client-name">{{$row->judul}}</h3>
                                                    <p class="testimonial-one__client-sub-title">{{$row->opd}}</p>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">{{ \Illuminate\Support\Str::limit($row->keterangan, 200) }}</p>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--Testimonial One End-->
        <!--Services Two Start-->
        <section class="services-two">
            <div class="services-two__shape-1 float-bob-x">
                <img src="{{ asset('frontend/assets/images/shapes/services-two-shape-1.png')}}" alt="">
            </div>
            <div class="services-two__shape-2 float-bob-y">
                <img src="{{ asset('frontend/assets/images/shapes/services-two-shape-2.png')}}" alt="">
            </div>
            <div class="container">
                <div class="services-two__top">
                
                <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="services-two__left">
                                <div class="section-title text-left">
                                    <h2 class="section-title__title">Galeri {{config('app.nama_pic')}}</h2>
                                    <a href="{{url('galeri-foto')}}">
                                    <span class="section-title__tagline">Indeks Galeri </span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="services-two__right">
                                <p class="services-two__text">Foto terbaru dan terkini terkait kegiatan dan program-program yang dilakukan oleh {{config('app.nama_pic')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($galeri as $row)     
                    <!--Services Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-two__single">
                            <div class="services-two__img-box">
                                
                                <div class="services-two__img">
                                    <img class="galeri"  src="{{ $row->foto }}" alt="">
                                </div>
                               
                            </div>
                            <div class="services-two__content">
                            <h3 class="project-two__sub-title"><a href="#">{{$row->judul}}</a></h3>
                             
                              
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--Services Two End-->

        <section class="project-two">
            <div class="project-two__shape-1 float-bob-x">
                <img src="{{ asset('frontend/assets/images/shapes/project-two-shape-1.png')}}" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                <!-- <a href="{{url('galeri-video')}}"><span class="section-title__tagline">Indeks Video </span></a> -->
                    <h2 class="section-title__title">Video {{config('app.nama_pic')}}</h2>
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
                    @foreach($video as $row)     
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

     
 
        <section class="about-two">
            <div class="about-two__shape-1 float-bob-x">
                <img src="{{asset('frontend/assets/images/shapes/about-two-shape-1.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="about-two__left">
                            <div class="about-two__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-two__img">
                                <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
                                <div id="gpr-kominfo-widget-container"></div>
                                </div>
                                <div class="about-two__small-img">
                                    <img src="assets/images/resources/about-two-small-img.jpg" alt="">
                                </div>
                             
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                    <div class="about-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline"></span>
                                <h2 class="section-title__title">Berita Terkait</h2>
                            </div>
                            <p class="about-two__text-1">Batanghari Tangguh, Batanghari Maju</p>
                            <p class="about-one__text">Informasi berita terkait yang saling berhubungan dengan Pemerintah Kabupaten Batanghari</p>
                            <ul class="about-one__points-box list-unstyled">
                                <li>
                                    <div class="about-one__points-title">
                                        <p>Penyuluh Tangguh</p>
                                    </div>
                                    <div class="about-one__points-content">
                                        <div class="about-one__points-icon">
                                            <span class="icon-planet-earth"></span>
                                        </div>
                                        <div class="about-one__points-text">
                                            <p>-</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-one__points-title">
                                        <p>Dokter Tangguh</p>
                                    </div>
                                    <div class="about-one__points-content">
                                        <div class="about-one__points-icon">
                                            <span class="icon-quality"></span>
                                        </div>
                                        <div class="about-one__points-text">
                                            <p>-</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="about-one__btn-box">
                                <!-- <a href="about.html" class="about-one__btn thm-btn">Discover more</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <!--Team One End-->
            <!-- Zoom Modal -->
            <div id="zoomModal" class="zoom-modal">
                <span class="zoom-modal-close">×</span>
                <img class="zoom-modal-content" id="zoomImage" src="" alt="">
            </div>
        </section>     
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const modal = document.getElementById("zoomModal");
                const modalImg = document.getElementById("zoomImage");
                const closeBtn = document.querySelector(".zoom-modal-close");
                const zoomElements = document.querySelectorAll(".zoom-image");

                // Open modal when clicking the eye icon or image
                zoomElements.forEach(element => {
                    element.addEventListener("click", function (e) {
                        e.preventDefault();
                        modal.style.display = "block";
                        modalImg.src = this.getAttribute("data-image");
                        modal.style.zIndex = '99999';
                    });
                });

                // Close modal when clicking the close button
                closeBtn.addEventListener("click", function () {
                    modal.style.display = "none";
                });

                // Close modal when clicking outside the image
                modal.addEventListener("click", function (e) {
                    if (e.target === modal) {
                        modal.style.display = "none";
                    }
                });
            });
            </script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    // Menampilkan pop-up saat halaman selesai dimuat
    const popup = document.getElementById("popup");
    const closePopup = document.getElementById("closePopup");

    popup.style.display = "block";

    // Menutup pop-up saat tombol 'x' diklik
    closePopup.addEventListener("click", function () {
        popup.style.display = "none";
    });

    // Menutup pop-up saat area di luar konten diklik
    window.addEventListener("click", function (event) {
        if (event.target === popup) {
            popup.style.display = "none";
        }
    });
});

</script>
@endsection