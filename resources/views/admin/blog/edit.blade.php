@extends('admin.master')
@section('content')
<div class="card shadow ">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-success">Edit Artikel</h6>
                
    </div>
    <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4"  src="{{ asset('storage/public/blogs/'.$post->image)}}"  width="640px" height="480px"alt="{{$post->image}}">
    </div>

    
    <div class="card-body">
    <form action="{{ route('posts.update',['id' => $post->id]) }}" method="post"  enctype="multipart/form-data">
        {{ csrf_field() }}
         <label for="title">Judul</label>
         <input  name="title" type="text" class="form-control custom-scroll"  value="{{ $post->title }}"></input>
         <br>
         <label for="body">Isi Tulisan</label>
         <textarea name="body" class="form-control" name="body"  value="{{ $post->body }}" rows="5">{{$post->body}}</textarea>
         <br>
         
        

         <div class="modal-footer">
             <a href="{{url('/dasbor-blog')}}" ype="button" class="btn btn-secondary">Batalkan</a>
             <button type="submit"class="btn btn-success">Kirim</button>
         </div>
     </form>
        
       
    </div>
</div>
@endsection