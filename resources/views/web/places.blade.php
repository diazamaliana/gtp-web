@extends('web.master')
@section('content')
<section class="engine"><a href="https://mobirise.info/k">develop own website</a></section><section class="services2 cid-rvTQOT6SdB" id="services2-1p">
    <!---->
    
    <!---->
    <!--Overlay-->
    <!--Overlay-->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="align-right mbr-fonts-style m-0 display-1">Wahana</h2>
        </div>
    </div>
    <br>
     <!--Image-->
     <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4"  src="{{ asset('storage/public/places/map.jpg')}}"   style="width: 640px; height: auto;" alt="">
        </div>

    <!--Container-->
    <div class="container">
    @foreach($places as $place)
    <br>
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 50%;">
                    <img src="{{ asset('storage/public/places/'.$place->filename)}}" style="width: 480px; height: auto;" alt="{{$place->filename}}">
                </div>
                <div class="align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2">{{ $place->title }}</h2>
                    <div class="mbr-section-text">
                        <p class="mbr-text text1 pt-2 mbr-light mbr-fonts-style display-7">
                            {{ $place->body}}
                        </p>
                        
                    </div>
                    <!--Btn-->
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection