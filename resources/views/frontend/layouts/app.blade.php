<style>
.main-menu__list a.active {
    color: red; /* Change this to whatever styling you need */
    font-weight: bold;
}

.main-menu__list .dropdown.active > a {
    color: red; /* Styling for the parent dropdown */
    font-weight: bold;
}

     
</style>
<?php 
use Carbon\Carbon;

$today = Carbon::today()->toDateString();
$currentMonth = Carbon::now();
      $setting = DB::table('settings')->first();
     $statistik = DB::table('statistik_pengunjungs')->first();

     $website_skpds =  DB::table('website_skpds')->orderBy('id','desc')->offset(0)->limit(5)->get();
      ?>
      <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> .:: Situs {{config('app.nama_pic')}}::. </title>
    <!-- favicons Icons -->
     <!-- New css -->
    <link rel="stylesheet" href="{{ asset('css/front_layout_index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/wa-style.css') }}">
    <!-- End new css -->

    <!-- other css stack -->
    <!-- @stack('css')
    @push('css')
    <style>
        .cropped1 {
            width: 210px;
            height: 203px;
            object-fit: cover;
            border: 0px solid black;
        }
    </style>
    @endpush -->

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontend/logo/logo_pkm.png')}}" />
   
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Situs Pemerintah Kabupaten Batanghari" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/austry-icons/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/timepicker/timePicker.css')}}" />
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/austry.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/austry-responsive.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/color-2.css')}}" />

</head>


<body>


<!-- 
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>  -->
    <!-- /.preloader -->




    <div class="page-wrapper">
        <header    background-color: #000000; class="main-header-two">
            <div class="main-header-two__top">
                <div class="main-header-two__top-wrapper">
                    <div class="main-header-two__top-inner">
                        <div class="main-header-two__top-left">
                            <ul class="list-unstyled main-header-two__contact-list">
                                <li>
                                    <div class="icon">
                                        <i class="icon-email"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:{{$setting->email}}">{{$setting->email}}</a>                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-pin"></i>
                                    </div>
                                    <div class="text">
                                        <p>{{$setting->alamat}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="main-header-two__top-right">
                            <div class="main-header-two__social">
                            <a href="{{ $setting->tiktok }}" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-brands fa-tiktok"></i>
</a>
<a target="_blank" href="{{ $setting->facebook }}" rel="noopener noreferrer">
    <i class="fab fa-facebook"></i>
</a>
<a href="{{ $setting->instagram }}" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-instagram"></i>
</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="main-menu main-menu-two">
                <div class="main-menu-two__wrapper">
                    <div class="main-menu-two__wrapper-inner">
                        <div class="main-menu-two__left">
                            <div class="main-menu-two__logo">
                                <a href="{{url('/')}}"><img src="{{ asset('frontend/assets/images/resources/logo_pkm.png')}}" alt=""></a>
                            </div>
                            <div class="main-menu-two__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                <!-- <li><a href="{{url('berita')}}" target="_blank">PPID</a></li> -->
                                <li><a href="{{ url('berita') }}" class="{{ request()->is(['berita*','read*']) ? 'dropdown current' : '' }}">Berita</a></li>
                                <li class="dropdown {{ request()->is('/') ? 'dropdown current' : '' }}">
                                    <a href="{{ url('/') }}">Tentang {{config('app.nama_pic')}}</a>
                                    <ul>
                                        <!-- <li class="dropdown {{ request()->is('page/profil-batanghari*') ? 'dropdown current' : '' }}">
                                            <a href="#">Profil</a>
                                            <ul>
                                                <li><a href="{{ url('page/profil-puskesmas-batin') }}" class="{{ request()->is('page/profil-puskesmas-batin') ? 'dropdown current' : '' }}">Profil {{config('app.nama_pic')}}</a></li>
                                                <li><a href="{{ url('page/arti-lambang') }}" class="{{ request()->is('page/arti-lambang') ? 'dropdown current' : '' }}">Arti Lambang</a></li>
                                                <li><a href="{{ url('page/kondisi-demografi') }}" class="{{ request()->is('page/kondisi-demografi') ? 'dropdown current' : '' }}">Kondisi Demografi</a></li>
                                                <li><a href="{{ url('page/peta-batanghari') }}" class="{{ request()->is('page/peta-batanghari') ? 'dropdown current' : '' }}">Peta Batanghari</a></li>
                                                <li><a href="{{ url('page/visi-dan-misi') }}" class="{{ request()->is('page/visi-dan-misi') ? 'dropdown current' : '' }}">Visi & Misi</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="{{ url('page/profil-puskesmas-batin') }}" class="{{ request()->is('page/profil-puskesmas-batin') ? 'dropdown current' : '' }}">Profil {{config('app.nama_pic')}}</a></li>
                                        <li><a href="{{ url('page/visi-dan-misi') }}" class="{{ request()->is('page/visi-dan-misi') ? 'dropdown current' : '' }}">Visi dan Misi</a></li>
                                        <li><a href="{{ url('page/struktur-organisasi') }}" class="{{ request()->is('page/struktur-organisasi') ? 'dropdown current' : '' }}">Struktur Organisasi</a></li>                                        
                                        <!-- <li><a href="{{ url('page/pemerintah-batanghari') }}" class="{{ request()->is('page/pemerintah-batanghari') ? 'dropdown current' : '' }}">Pemerintahan Batanghari</a></li>
                                        <li><a href="{{ url('page/akuntabiltas-pemerintahan') }}" class="{{ request()->is('page/akuntabiltas-pemerintahan') ? 'dropdown current' : '' }}">Akuntabiltas Pemerintahan</a></li>
                                        <li><a href="{{ url('page/akuntabiltas-pelaporan') }}" class="{{ request()->is('page/akuntabiltas-pelaporan') ? 'dropdown current' : '' }}">Akuntabiltas Pelaporan</a></li> -->
                                        <!-- <li class="dropdown {{ request()->is('lakip*') ? 'dropdown current' : '' }}">
                                        <a href="#">LAKIP</a>
                                             <ul>
                                                <li><a href="{{ url('lakip') }}" class="{{ request()->is('lakip') ? 'dropdown current' : '' }}">Lakip Batanghari</a></li>
                                                <li><a href="{{ url('lakip_skpd') }}" class="{{ request()->is('lakip_skpd') ? 'dropdown current' : '' }}">Lakip SKPD</a></li>
                                               
                                            </ul>
                                        </li> -->
                                        <!-- <li><a href="{{ url('akuntabilitas-batanghari') }}" class="{{ request()->is('akuntabilitas-batanghari') ? 'dropdown current' : '' }}">Transparansi Anggaran</a></li> -->
                                    </ul>
                                </li>
                                <li class="dropdown {{ request()->is('/') ? 'dropdown current' : '' }}">
                                    <a href="{{ url('/') }}">Jenis Pelayanan</a>
                                    <ul>
                                        <li><a href="{{ url('page/klaster-i-pelayanan-manajemen') }}" class="{{ request()->is('page/klaster-i-pelayanan-manajemen') ? 'dropdown current' : '' }}">Klaster I Pelayanan Manajemen</a></li>
                                        <li><a href="{{ url('page/klaster-ii-pelayanan-kesehatan-ibu-dan-anak') }}" class="{{ request()->is('page/klaster-ii-pelayanan-kesehatan-ibu-dan-anak') ? 'dropdown current' : '' }}">Klaster II Pelayanan Kesehatan Ibu dan Anak</a></li>
                                        <li><a href="{{ url('page/klaster-iii-pelayanan-kesehatan-dewasa-dan-lanjut-usia') }}" class="{{ request()->is('page/klaster-iii-pelayanan-kesehatan-dewasa-dan-lanjut-usia') ? 'dropdown current' : '' }}">Klaster III Pelayanan Kesehatan Dewasa dan Lanjut Usia</a></li>
                                        <li><a href="{{ url('page/klaster-iv-pelayanan-penanggulangan-penyakit-menular-dan-kesehatan-lingkungan') }}" class="{{ request()->is('page/klaster-iv-pelayanan-penanggulangan-penyakit-menular-dan-kesehatan-lingkungan') ? 'dropdown current' : '' }}">Klaster IV  PelayananPenanggulangan Penyakit Menular dan Kesehatan Lingkungan</a></li>
                                        <li><a href="{{ url('page/pelayanan-lintas-klaster') }}" class="{{ request()->is('page/pelayanan-lintas-klaster') ? 'dropdown current' : '' }}">Pelayanan Lintas Klaster</a></li>                                       
                                    </ul>
                                </li>
                                <li class="dropdown {{ request()->is('/') ? 'dropdown current' : '' }}">
                                    <a href="{{ url('/') }}">Informasi</a>
                                    <ul>
                                        <li><a href="{{ url('page/alur-pelayanan') }}" class="{{ request()->is('page/alur-pelayanan') ? 'dropdown current' : '' }}">Alur Pelayanan {{config('app.nama_pic')}}</a></li>
                                        <li><a href="{{ url('page/jadwal-pelayanan') }}" class="{{ request()->is('page/jadwal-pelayanan') ? 'dropdown current' : '' }}">Jadwal Pelayanan</a></li>
                                        <li><a href="{{ url('page/tarif-retribusi') }}" class="{{ request()->is('page/tarif-retribusi') ? 'dropdown current' : '' }}">Tarif Retribusi</a></li>
                                        <li><a href="{{ url('page/jadwal-pusling-puskesmas') }}" class="{{ request()->is('page/jadwal-pusling-puskesmas') ? 'dropdown current' : '' }}">Jadwal Pusling Puskesmas</a></li>
                                        <li><a href="{{ url('page/jadwal-pelayanan-usg') }}" class="{{ request()->is('page/jadwal-pelayanan-usg') ? 'dropdown current' : '' }}">Jadwal Pelayanan USG</a></li>
                                        <li><a href="{{ url('page/jadwal-pelayanan-posyandu') }}" class="{{ request()->is('page/jadwal-pelayanan-posyandu') ? 'dropdown current' : '' }}">Jadwal Pelayanan Posyandu</a></li>
                                        <li><a href="{{ url('page/denah-dan-ruangan-puskesmas') }}" class="{{ request()->is('page/denah-dan-ruangan-puskesmas') ? 'dropdown current' : '' }}">Denah dan Ruangan Puskesmas</a></li>                                       
                                    </ul>
                                </li>
                                        <li class="dropdown {{ request()->is('berita*') || request()->is('galeri-foto*') || request()->is('galeri-video*') ? 'active' : '' }}">
                                            <a href="#">Galeri</a>
                                            <ul>
                                                <!-- <li>
                                                    <a href="{{ url('berita') }}" class="{{ request()->is(['berita*','read*']) ? 'dropdown current' : '' }}">Berita</a>
                                                </li> -->
                                                <li>
                                                    <a href="{{ url('galeri-foto') }}" class="{{ request()->is('galeri-foto*') ? 'dropdown current' : '' }}">Galeri Foto</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('galeri-video') }}" class="{{ request()->is('galeri-video*') ? 'dropdown current' : '' }}">Galeri Video</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('infografis') }}" class="{{ request()->is('infografis*') ? 'dropdown current' : '' }}">Infografis</a>
                                                </li>
                                            </ul>
                                        </li>      
                                </ul>
                            </div>
                        </div>
                        <div class="main-menu-two__right">
                            <div class="main-menu-two__search-cart-btn-box">
                                <div class="main-menu-two__search-box">
                                    <a href="#" class="main-menu-two__search search-toggler icon-magnifying-glass"></a>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        @yield('content')

    
        
        
        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="container">
                <div class="site-footer__top">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href=""><img src="{{asset('frontend/logo/logo-menu.png')}}" height="50px" alt=""></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">Batang Hari adalah kabupaten yang terletak di bagian tengah provinsi Jambi, Indonesia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-8 col-md-8 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Statistik Pengunjung</h4>
                                </div>
                
                               <ul class="footer-widget__links-list list-unstyled">
                                <li>{{$statistik->hari_ini}} x Hari ini</li>
                                <li>{{$statistik->bulan_ini}} x Bulan ini</li>
                                 <li>{{$statistik->dilihat}}  x Semua</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-8 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__contact">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Contact</h4>
                                </div>
                                <p class="footer-widget__contact-text">{{$setting->alamat}}</p>
                                <ul class="footer-widget__Contact-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-telephone"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:{{$setting->telepon}}">{{$setting->telepon}}</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__newsletter">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Media Sosial</h4>
                                </div>
                                <div class="site-footer__social">
                                    <a href="{{ $setting->tiktok }}"><i class="fab fa-brands fa-tiktok"></i></a>
                                    <a href="{{ $setting->facebook }}"><i class="fab fa-facebook"></i></a>
                                   
                                    <a href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a>
                                   </div>
                                   <!-- <br>
                                   <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100068441723342" data-tabs="timeline" data-width="50" data-height="50" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/profile.php?id=100068441723342" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/profile.php?id=100068441723342">Batanghari Jambi</a></blockquote></div> -->
                        <!-- Foto Kepala and Caption -->
                        <div class="kepala-profile" style="text-align: center; margin-top: 20px;">
                            <img src="{{ asset('img/kepala1.jpg') }}" alt="Kepala {{config('app.nama_pic')}}" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 2px solid #01805E;">
                            <p style="margin-top: 10px; font-size: 14px; color: #fff; font-weight: 600;">{{config('app.nama_kapus')}}</p>
                            <p style="font-size: 12px; color: #ccc; white-space: nowrap;">Kepala {{config('app.nama_pic')}}</p>
                        </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <p class="site-footer__bottom-text">©<?= date('Y')?> <a href="#">{{config('app.nama_pic')}}</a></p>
                    <ul class="list-unstyled site-footer__bottom-menu">
                        <li><a href="about">Help</a></li>
                        <li><a href="about">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </footer>

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{asset('frontend/logo/logo-menu.png')}}" width="130"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:{{ $setting->telepon }}">{{ $setting->telepon }}</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
               
                                    <a href="{{ $setting->tiktok }}" target="_blank"><i class="fab fa-brands fa-tiktok"></i></a>
                                    <a href="{{ $setting->facebook }}"target="_blank"><i class="fab fa-facebook"></i></a>
                                   
                                    <a href="{{ $setting->instagram }}"target="_blank"><i class="fab fa-instagram"></i></a>
                                
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->
<!-- WhatsApp Chat Widget -->
<div id="whatsapp-chat-widget" class="whatsapp-chat-widget">
    <div class="whatsapp-chat-button">
        <img src="{{asset('img/WhatsApp.svg.webp')}}" alt="WhatsApp Icon" class="whatsapp-icon">
    </div>
    <div class="whatsapp-chat-popup">
        <div class="whatsapp-chat-header">
            <img src="{{asset('img/logo_pkm.png')}}" alt="Brand Logo" class="whatsapp-brand-logo">
            <div class="whatsapp-brand-text">
                <div class="whatsapp-brand-name">{{config('app.nama_pic')}}</div>
                <!-- <div class="whatsapp-brand-subtitle">UPTD Dinas Kesehatan</div>
                <div class="whatsapp-brand-subtitle">Pemerintah Kabupaten Batang Hari</div> -->
            </div>
        </div>
        <div class="whatsapp-chat-body">
            <p>Hi Kamu yang disana!<br>Ada yang bisa saya bantu?</p>
        </div>
        <div class="whatsapp-chat-footer">
            <a href="https://api.whatsapp.com/send?phone=6282267205866&text=Salam%20Sehat%20Bapak%2FIbu%20admin%20Puskesmas%2C%20Izin%20sebelumnya%20saya%20mau%20bertanya." target="_blank" class="whatsapp-start-chat">Mulai Percakapan</a>
        </div>
    </div>
</div>



  
    <!--  plugin halaman fb -->
    <div id="fb-root"></div>
    <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v20.0&appId=970070473472661" nonce="5h4zXSdl"></script> -->
    <!-- end plugin halaman fb -->
    <script src="{{ asset('frontend/assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/wow/wow.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/isotope/isotope.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/vegas/vegas.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/timepicker/timePicker.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/circleType/jquery.circleType.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/circleType/jquery.lettering.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/sidebar-content/jquery-sidebar-content.js')}}"></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>

    <script src="{{ asset('template/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>


<!-- JavaScript for Toggle and Click-Outside Functionality -->
<script src="{{ asset('frontend/assets/js/austry.js') }}"></script>
<script>
    (function () {
        try {
            document.addEventListener('DOMContentLoaded', function () {
                const chatButton = document.querySelector('.whatsapp-chat-button');
                const chatPopup = document.querySelector('.whatsapp-chat-popup');
                const widget = document.querySelector('#whatsapp-chat-widget');

                // Check if elements are found
                if (!chatButton || !chatPopup || !widget) {
                    console.error('WhatsApp widget elements not found:', {
                        chatButton: !!chatButton,
                        chatPopup: !!chatPopup,
                        widget: !!widget
                    });
                    return;
                }

                let isChatOpen = false;

                // Auto-show setting
                const autoShow = false;
                if (autoShow) {
                    chatPopup.classList.add('active');
                    isChatOpen = true;
                }

                // Toggle chat popup on button click
                chatButton.addEventListener('click', function (event) {
                    event.stopPropagation();
                    isChatOpen = !isChatOpen;
                    chatPopup.classList.toggle('active', isChatOpen);
                    console.log('Chat button clicked, isChatOpen:', isChatOpen); // Debug
                });

                // Close popup when clicking outside
                document.addEventListener('click', function (event) {
                    if (isChatOpen && !widget.contains(event.target)) {
                        isChatOpen = false;
                        chatPopup.classList.remove('active');
                        console.log('Clicked outside, popup closed'); // Debug
                    }
                });

                // Prevent clicks inside popup from closing it
                chatPopup.addEventListener('click', function (event) {
                    event.stopPropagation();
                });
            });
        } catch (error) {
            console.error('Error in WhatsApp widget script:', error);
        }
    })();
</script>

    
</body>   


</html>