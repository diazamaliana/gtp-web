@extends('web.master')
@section('content')
<section class="services6 cid-rvQgvK33pa" id="services6-1g">
    <!---->
    
    <!---->
    <!--Overlay-->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <h2 class="align-right mbr-fonts-style m-0 display-1">Paket Wisata</h2>
        </div>
    </div>
    
    <!--Container-->
    <div class="container">
        <div class="row">
            
            <!--Card-1-->
            @foreach($packages as $package)
            <div class="card col-12 pb-5">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-12 col-md-2">
                                <!--Image-->
                                <div class="mbr-figure">
                                    <img src="{{ asset('storage/public/packages/'.$package->filename)}}" style="width: 160px; height: auto;" alt="{{$package->filename}}">
                                </div>
                            </div>
                            <div class="col-12 col-md-10">
                                <div class="wrapper">
                                    <div class="top-line pb-3">
                                        <h4 class="card-title mbr-fonts-style display-5">
                                            {{$package->title}}
                                        </h4>
                                        <p class="mbr-text cost mbr-fonts-style m-0 display-5">
                                            {{$package->price}}
                                        </p>
                                    </div>
                                    <div class="bottom-line">
                                        <p class="mbr-text mbr-fonts-style display-7 text-justify">
                                             {{$package->body}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

           
            
        </div>
    </div>
</section>
@endsection