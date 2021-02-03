@extends('admin.master')
@section('content')
<div class="card shadow ">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-success">Buat Artikel Baru</h6>
                
    </div>

    
    <div class="card-body">
    <form action="{{ route('posts.store') }}" method="post"  enctype="multipart/form-data">
        {{ csrf_field() }}
         <label for="title">Judul</label>
         <input  name="title" type="text" class="form-control custom-scroll" placeholder="Judul Artikel"></input>
         <br>
         <label for="body">Isi Tulisan</label>
         <textarea name="body" class="form-control" name="body" placeholder="Tuliskan sesuatu..." rows="5"></textarea>
         <br>
         <div class="custom-file">
            <label class="form-control-label" for="image">Tambah Gambar</label>
            <input id="image" type="file" class="form-control" name="image">
        </div>
        

         <div class="modal-footer">
             <a href="{{url('/dasbor-blog')}}" ype="button" class="btn btn-secondary">Batalkan</a>
             <button type="submit"class="btn btn-success">Kirim</button>
         </div>
     </form>
        
       
    </div>
</div>
@endsection