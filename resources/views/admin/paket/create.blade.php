@extends('admin.master')
@section('content')
<div class="card shadow ">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-success">Tambahkan Paket Baru</h6>
                
    </div>

    
    <div class="card-body">
    <form action="{{ route('packages.store') }}" method="post"  enctype="multipart/form-data">
        {{ csrf_field() }}
         <label for="title">Nama Paket</label>
         <input  name="title" type="text" class="form-control custom-scroll" placeholder="Nama Paket"></input>
         <br>
         <label for="price">Harga Paket</label>
         <input  name="price" type="text" class="form-control custom-scroll" placeholder="Harga Paket"></input>
         <br>
         <label for="body">Penjelasan</label>
         <textarea name="body" class="form-control" name="body" placeholder="Tuliskan sesuatu..." rows="5"></textarea>
         <br>
         <div class="custom-file">
            <label class="form-control-label" for="filename">Tambah Gambar</label>
            <input id="filename" type="file" class="form-control" name="filename">
        </div>
        

         <div class="modal-footer">
             <a href="{{url('/dasbor-paket')}}" ype="button" class="btn btn-secondary">Batalkan</a>
             <button type="submit"class="btn btn-success">Kirim</button>
         </div>
     </form>
        
       
    </div>
</div>
@endsection