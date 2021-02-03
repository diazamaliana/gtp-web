@extends('admin.master')
@section('content')
<div class="card shadow ">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Profil Web GTP</h6>
        <div class="dropdown no-arrow">
           
        </div>
                                       
    </div>

    
    <div class="card-body">
        <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4"  src="assets/images/1-122x118.png" alt="">
        </div>
        <div class="col-lg-12">
            
                    <form method="POST" action="{{ route('profile.update', Auth::user()->id) }}" autocomplete="off" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="PUT">


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="name">Nama Lengkap<span class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Name" value="{{ old('name', Auth::user()->name) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">Alamat Email<span class="small text-danger">*</span></label>
                                        <input type="email" id="email" class="form-control" name="email" placeholder="example@example.com" value="{{ old('email', Auth::user()->email) }}">
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="contact">Kontak<span class="small text-danger">*</span></label>
                                        <input type="contact" id="contact" class="form-control" name="contact" value="{{ old('contact', Auth::user()->contact) }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="address">Alamat<span class="small text-danger">*</span></label>
                                        <input type="address" id="address" class="form-control" name="address" value="{{ old('address', Auth::user()->address) }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="about">Tentang Saya</label>
                                        <textarea type="about" id="about" class="form-control" name="about" rows="10" value="{{ old('about', Auth::user()->about) }}">{{ old('about', Auth::user()->about) }}</textarea>
                                    </div>
                                </div>
                            </div>

                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-success ">Simpan Perubahan</button>
                                </div>
                            </div>
                        </div>
                    </form>
        </div>
       
    </div>
</div>
@endsection