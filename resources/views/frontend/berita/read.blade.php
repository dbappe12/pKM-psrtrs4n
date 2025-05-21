@extends('frontend.layouts.app')
@section('head')
    <meta property="og:title" content="{{ $berita->judul }}" />
    <meta property="og:description" content="{{ Str::limit(strip_tags($berita->isi), 150) }}" />
    <meta property="og:image" content="{{ $berita->gambar ? asset('berita/' . $berita->gambar) : asset('images/ppid-share.png') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="{{ config('app.name', 'Puskesmas Batin') }}" />
@endsection
@section('content')
<style>
   .cropped1 {
    width: 70px; /* width of container */
    height: 73px; /* height of container */
    object-fit: cover;
    border: 0px solid black;
}
.cropped2 {
    width: 770px; /* width of container */
    height: 428px; /* height of container */
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

.share-buttons {
      position: absolute; /* Membuat container dapat dipindahkan */
      display: flex;
      gap: 10px;
      margin: 20px;
      cursor: move; /* Menunjukkan elemen dapat dipindahkan */
      user-select: none; /* Mencegah seleksi teks saat drag */
    }

    .share-button {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 10px;
      font-size: 18px;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .share-button:hover {
      background-color: #007bff;
      color: #fff;
    }

    .share-button.clicked {
      background-color: #dc3545;
      color: #fff;
    }

    @media (max-width: 768px) {
      .share-button {
        font-size: 16px;
        padding: 8px;
      }
    }
</style>
        <!--News Details Start-->

        
        <section class="news-details">
            <div class="container">
            {{ Breadcrumbs::render('berita.read', $berita['id'], $title) }}
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            <div class="news-details__img">
                                <img class="cropped2" src="{{$berita->gambar}}" alt="">
                                <div class="news-details__date">
                                    <p>{{$berita->tanggal}}</p>
                                </div>
                            </div>
                            <div class="news-details__content">
                                <ul class="list-unstyled news-details__meta">
                                    <li><a href=""><i class="fas fa-user-circle"></i> by Admin </a>
                                    </li>
                                </ul>
                                <h3 class="news-details__title">{{$berita->judul}}</h3>
                                <p class="news-details__text-1">
                                <?php echo $berita->isi;?>
                                </p>

                                <div class="news-details__bottom">
                                    <p class="news-details__tags">
                                        <span>Berbagi Berita</span>
                                        
                                       

                                       
                                        <button class="share-button" id="facebook-share"><i class="fab fa-facebook"></i></button>
                                        <button class="share-button" id="twitter-share"><i class="fab fa-twitter"></i></button>
                                        <button class="share-button" id="wa-share"><i class="fab fa-whatsapp"></i></button>
                                        <button class="share-button" id="instagram-share"><i class="fab fa-instagram"></i></button>
                                                                            
                                       
                                    </p>
                                    
                                </div>

                
                            </div>
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
        <!--News Details End-->

                  
  @endsection

  <script>

        document.addEventListener("DOMContentLoaded", function() {
            // The URL you want to share
            var shareUrl = window.location.href;
            var shareTitle = "Berita {{config('app.nama_pic')}}"; // Title of the news

            // Function to open a new window for sharing
            function openShareWindow(shareUrl) {
                window.open(shareUrl, '_blank', 'width=600,height=400');
            }

            // Event listener for the share button

            document.getElementById('facebook-share').addEventListener('click', function() {
                var facebookUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(shareUrl)}&quote=${encodeURIComponent(shareTitle)}`;
                    openShareWindow(facebookUrl);
                });
                
            document.getElementById('twitter-share').addEventListener('click', function() {
            var twitterUrl = `https://twitter.com/intent/tweet?url=${encodeURIComponent(shareUrl)}&text=${encodeURIComponent(shareTitle)}`;
            openShareWindow(twitterUrl);
            });

            document.getElementById('wa-share').addEventListener('click', function() {
                var waUrl = `https://wa.me/?text=${encodeURIComponent(shareTitle + " " + shareUrl)}`;
                openShareWindow(waUrl);
            });

            document.getElementById('instagram-share').addEventListener('click', function() {
                alert("Instagram belum mendukung berbagi langsung lewat web.\nKamu akan diarahkan ke halaman profil kami.");
                window.open("https://www.instagram.com/gregorok84", '_blank');
            });


        });



  </script>