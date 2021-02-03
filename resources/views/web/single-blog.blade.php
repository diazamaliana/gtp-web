@extends('web.master')
@section('content')
<section class="engine"><a href="https://mobirise.info/k">develop own website</a></section><section class="services2 cid-rvTQOT6SdB" id="services2-1p">
    <!--Overlay-->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="mbr-title pt-2 mbr-fonts-style display-2 align-center"><b>{{$post->title}}</b> </h2>
            <br>
            <h4 class=" mbr-fonts-style display-7 align-center">Dibagikan pada <i>{{$post->created_at->format('jS F Y')}}</i></h4>

        </div>
    </div>
    <!--Container-->
    <div class="container">
         <!--Image-->
         <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4"  src="{{ asset('storage/public/blogs/'.$post->image)}}"  width="640px" height="480px"alt="{{$post->image}}">
        </div>
        <p class="mbr-text mbr-fonts-style pt-3 display-7 text-justify">
            {{$post->body}}
        </p>
    </div>
</section>
@endsection