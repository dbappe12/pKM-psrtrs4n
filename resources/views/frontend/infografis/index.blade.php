@extends('frontend.layouts.app')
@section('content')

<style>
    .infografis {
    width: 270px; /* width of container */
    height: 370px; /* height of container */
    object-fit: cover;
    border: 0px solid black;
    cursor: pointer; /* Indicate image is clickable */
}
</style>

        <!--Team One Start-->
        <section class="team-two">
            <div class="team-two__shape-2" style="background-image: url(frontend/assets/images/shapes/team-two-shape-2.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                {{ Breadcrumbs::render('infografis') }}
                    <h2 class="section-title__title">Infografis {{config('app.nama_pic')}}</h2>
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
                                <h3 class="team-two__name">{{$row->judul}}</h3>
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
        <!--Team One End-->
            <!-- Zoom Modal -->
            <div id="zoomModal" class="zoom-modal">
                <span class="zoom-modal-close">×</span>
                <img class="zoom-modal-content" id="zoomImage" src="" alt="">
            </div>

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
    @endsection

