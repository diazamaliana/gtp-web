@extends('admin.master')
@section('content')
<div class="card shadow ">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-success">Edit Paket Wisata</h6>
                
    </div>
    <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4"  src="{{ asset('storage/public/packages/'.$package->filename)}}"  width="640px" height="480px"alt="{{$package->filename}}">
    </div>

    
    <div class="card-body">
    <form action="{{ route('packages.update',['id' => $package->id]) }}" method="post"  enctype="multipart/form-data">
        {{ csrf_field() }}
         <label for="title">Nama Paket Wisata</label>
         <input  name="title" type="text" class="form-control custom-scroll"  value="{{ $package->title }}"></input>
         <br>
         <label for="price">Harga Paket Wisata</label>
         <input  name="price" type="text" class="form-control custom-scroll"  value="{{ $package->price }}"></input>
         <br>
         <label for="body">Penjelasan</label>
         <textarea name="body" class="form-control" name="body"  value="{{ $package->body }}" rows="5">{{$package->body}}</textarea>
         <br>
         
        

         <div class="modal-footer">
             <a href="{{url('/dasbor-paket')}}" type="button" class="btn btn-secondary">Batalkan</a>
             <button type="submit"class="btn btn-success">Kirim</button>
         </div>
     </form>
        
       
    </div>
</div>
@endsection