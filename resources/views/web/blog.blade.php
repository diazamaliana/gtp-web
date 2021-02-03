@extends('web.master')
@section('content')
<section class="engine"><a href="https://mobirise.info/k">develop own website</a></section><section class="services2 cid-rvTQOT6SdB" id="services2-1p">
    <!---->
    
    <!---->
    <!--Overlay-->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="align-right mbr-fonts-style m-0 display-1">Blog</h2>
        </div>
    </div>
    <!--Container-->
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <!--Card-1-->
                <div class="card p-3 col-12">
                    <div class="card-wrapper media-container-row media-container-row">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-4">
                                    <div class="wrapper">
                                        <!--Image-->
                                        <div class="mbr-figure" style="width: 100%;">
                                            <img src="{{ asset('storage/public/blogs/'.$post->image)}}" style="width: 300px; height: auto;" alt="{{$post->image}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7 col-lg-4">
                                    <div class="wrapper col-left">
                                        <!--Title-->
                                        <h4 class="card-title mbr-fonts-style display-5">{{$post->title}}</h4>
                                        <h4 class=" mbr-fonts-style display-7"><i>{{$post->created_at->format('jS F Y')}}</i></h4>
                                        <!--Subtitle-->
                                        <p class="mbr-text mbr-fonts-style pt-3 display-7">
                                            {!! str_limit($post->body, 100) !!}

                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 col-lg-4">
                                    <div class="wrapper border_wrapper">
                                        <!--Cost-->
                                        
                                        <!--Btn-->
                                        <div class="mbr-section-btn col-right align-center">
                                            <a href="{{ route('post', ['slug' => $post->slug ]) }}" class="btn btn-warning-outline m-0 display-4">
                                                Baca</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        <hr>
        @endforeach
        <ul class="pagination justify-content-center">
            <li class="page-item ">
                    {{ $posts->links() }}
            </li>
        </ul>
    </div>
</section>
@endsection