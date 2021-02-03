@extends('web.master')
@section('content')
<section class="engine">
    <a href="https://mobirise.info/o">portfolio site templates</a>
</section>

<section class="carousel slide cid-rvQ49MUN3n" data-interval="false" id="slider1-g">
    <div class="full-screen">
        <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#slider1-g" class=" active" data-slide-to="0"></li>
                <li data-app-prevent-settings="" data-target="#slider1-g" data-slide-to="1"></li>
                <li data-app-prevent-settings="" data-target="#slider1-g" data-slide-to="2"></li>
                <li data-app-prevent-settings="" data-target="#slider1-g" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/slide1-2000x1500.jpg);">
                    <div class="container container-slide">
                        <div class="image_wrapper">
                            <div class="mbr-overlay"></div>
                            <img src="assets/images/slide1-2000x1500.jpg">
                            <div class="carousel-caption justify-content-center">
                                <div class="col-10 align-center">
                                    <h2 class="mbr-fonts-style display-2">
                                        <br><br><br>Selamat Datang</h2>
                                        <p class="lead mbr-text mbr-fonts-style display-1">
                                            <strong>di Gama Technopark Palon</strong>
                                            <strong><br></strong>
                                            <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/slide2-2000x1500.jpg);">
                    <div class="container container-slide">
                        <div class="image_wrapper">
                            <div class="mbr-overlay"></div>
                            <img src="assets/images/slide2-2000x1500.jpg">
                            <div class="carousel-caption justify-content-center">
                                <div class="col-10 align-left"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/slide3-2000x1333.jpg);">
                <div class="container container-slide">
                    <div class="image_wrapper">
                        <div class="mbr-overlay"></div>
                        <img src="assets/images/slide3-2000x1333.jpg">
                        <div class="carousel-caption justify-content-center">
                            <div class="col-10 align-right"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/slide4-2000x1333.jpg);">
            <div class="container container-slide">
                <div class="image_wrapper">
                    <div class="mbr-overlay"></div>
                    <img src="assets/images/slide4-2000x1333.jpg">
                    <div class="carousel-caption justify-content-center">
                        <div class="col-10 align-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-g">
        <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
        <span class="sr-only">Previous</span></a>
        <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-g">
            <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
            <span class="sr-only">Next</span></a>
        </div>
    </div>
</section>

<section class="services2 cid-rvQ4EPGy8u" id="services2-k">
<!---->

<!---->
<!--Overlay-->

<!--Container-->
<div class="container">
    <div class="col-md-12">
        <div class="media-container-row">
            <div class="mbr-figure" style="width: 50%;">
                <img src="assets/images/tentang-952x635.jpg" alt="Mobirise" title="">
            </div>
            <div class="align-left aside-content">
                <h2 class="mbr-title pt-2 mbr-fonts-style display-2">
                    Tentang Kami</h2>
                <div class="mbr-section-text">
                    <p class="mbr-text text1 pt-2 mbr-light mbr-fonts-style display-7 text-justify">
                    {{$user->about}}
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
</section>

<section class="features18 popup-btn-cards cid-rvTPqSA8EV" id="features18-1o">




<div class="container">
    <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2"><a href="blog.html">
        Artikel Baru</a></h2>
    
    <div class="media-container-row pt-5 ">
        @foreach($posts as $post)
        <div class="card p-3 col-12 col-md-6 col-lg-4">
            <div class="card-wrapper ">
                <div class="card-img">
                    <div class="mbr-overlay"></div>
                    <div class="mbr-section-btn text-center"><a href="{{ route('post', ['slug' => $post->slug ]) }}" class="btn btn-primary display-4">Baca</a></div>
                    <img src="{{ asset('storage/public/blogs/'.$post->image)}}" style="width: auto; height: 250px;" alt="{{$post->image}}">
                </div>
                <div class="card-box">
                    <h4 class="card-title mbr-fonts-style display-7">{{$post->title}}</h4>
                    
                        
                        <p class="mbr-text mbr-fonts-style align-left display-7">{!! str_limit($post->body, 80) !!}&nbsp;</p>

                    
                </div>
            </div>
        </div>
        @endforeach

        
    </div>
</div>
</section>

<section class="mbr-section contacts1 cid-rvQ55VAnVu" id="contacts1-p">
<!---->

<!---->
<!--Overlay-->

<!--Container-->
<div class="container">
    <div class="row">
        <!--Titles-->
        <div class="title col-12">
            <h2 class="align-left mbr-fonts-style display-1">
                Kontak Kami</h2>
            
        </div>
        <!--Left-->
        <div class="col-12 col-md-6">
            <div class="left-block wrapper">
                <div class="b b-adress">
                    <h5 class="align-left mbr-fonts-style m-0 display-5">
                        Alamat</h5>
                    <p class="mbr-text align-left mbr-fonts-style display-7">                    {{$user->address}}</p>
                </div>
                <div class="b b-phone">
                    <h5 class="align-left mbr-fonts-style m-0 display-5">Telepon:
                    </h5>
                    <p class="mbr-text align-left mbr-fonts-style display-7">
                        {{$user->contact}}
                    </p>
                </div>
                <div class="b b-mail">
                    <h5 class="align-left mbr-fonts-style m-0 display-5">
                        E-mail:
                    </h5>
                    <p class="mbr-text align-left mbr-fonts-style display-7">                   
                         {{$user->email}}
                    </p>
                </div>
            </div>
        </div>
        <!--Right-->
        <div class="col-12 col-md-6">
            <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63358.850920593715!2d111.44180202832112!3d-7.0177280122263435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7769e2caa2b2db%3A0x230e7f02fbc4d69a!2sPalon%2C+Jepon%2C+Blora+Regency%2C+Central+Java%2C+Indonesia!5e0!3m2!1sen!2sus!4v1562828897355!5m2!1sen!2sus" allowfullscreen=""></iframe></div>
        </div>
    </div>
</div>
</section>

<section class="clients cid-rvQ5jy00Ut" data-interval="false" id="clients-s">
  


    <div class="container mb-5">
        <div class="media-container-row">
            <div class="col-12 align-center">
                <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">
                    Kerja Sama</h2>
                
            </div>
        </div>
    </div>

<div class="container">
    <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
        <div class="carousel-inner" data-visible="4">
            
            
            
            
            
        <div class="carousel-item ">
                <div class="media-container-row">
                    <div class="col-md-12">
                        <div class="wrap-img ">
                            <img src="assets/images/logogtp2-1002x902.png" class="img-responsive clients-img" alt="" title="">
                        </div>
                    </div>
                </div>
            </div><div class="carousel-item ">
                <div class="media-container-row">
                    <div class="col-md-12">
                        <div class="wrap-img ">
                            <img src="assets/images/logokkn-3158x2791.png" class="img-responsive clients-img" alt="" title="">
                        </div>
                    </div>
                </div>
            </div><div class="carousel-item ">
                <div class="media-container-row">
                    <div class="col-md-12">
                        <div class="wrap-img ">
                            <img src="assets/images/logougm-965x1000.png" class="img-responsive clients-img" alt="" title="">
                        </div>
                    </div>
                </div>
            </div><div class="carousel-item ">
                <div class="media-container-row">
                    <div class="col-md-12">
                        <div class="wrap-img ">
                            <img src="assets/images/logoblora-1530x1600.png" class="img-responsive clients-img" alt="" title="">
                        </div>
                    </div>
                </div>
            </div></div>
        
    </div>
</div>
</section>
@endsection