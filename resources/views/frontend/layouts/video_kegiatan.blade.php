
<section id="action" class="business bg-grey roomy-70">
                <div class="container">
                    
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase"><strong>VIDEO</strong> KEGIATAN {{config('app.nama_pic1')}}</h2>    
                            
                        </div>
                        <div class="row">
                        
                        <div class="maine_action">

                        @foreach($video_kegiatan as $row)  
                                                <div class="col-md-4">
                                                <div class="card-video">
                                                             
                                                             <div class="widget_latst_item m-top-30">
                                                         <div class="item_icon">
                                         <img src="{{ asset('frontend/assets/images/ltst-img-1.jpg')}}" alt="" /></div>
                                                         <div style="display: inline-block; width: 70%;">
                                                         
                                                         <h5><a href="{{$row->link}}">{{$row->judul}}</a></h5>
                                                         <p>
                                                             <a href="">21<sup>th</sup> July 2016</a></p>
                                                         
                                                     </div>
                                                     </div>
                                                    </div>
                    </div>@endforeach  
                        

                                   </div>
                    </div>
                </div>
            </section>                            
           