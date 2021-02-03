@extends('admin.master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Wahana Manajemen</h1>
    <a href="{{route('places.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Wahana</a>
</div>
<div class="card">
    <div class="card-body">
            <table class="table table-hover table-bordered">
        <thead>
            <tr>
            <th scope="col" class="text-center">#</th>
            <th scope="col">Tanggal Pos</th>
            <th scope="col">Foto</th>
            <th scope="col">Judul</th>
            <th scope="col">Isi</th>
            <th scope="col">Proses</th>
            </tr>
        </thead>
        <tbody>
            @foreach($places as $place)
            <tr>
                    <th scope="row">{{ ++$i }}</th>
                    <td style="width:15%">{{$place->created_at->format('jS F Y')}}</td>
                    <td style="width:20%">
                        <img src="{{ asset('storage/public/places/'.$place->filename)}}" width="160px" height="120px">

                    </td>
                    <td style="width:20%">
                        <p >{{ $place->title }}</p> 
                    </td>
                    <td style="width:70%">
                        <p>{!! str_limit($place->body, 100) !!}
                        </p>
                    </td>
                    <td style="width:70%">
                    
                         <a href="{{ route('place.edit', ['slug' => $place->slug ]) }}" type="button" class="btn btn-block btn-success btn-sm">Edit</a>                        <br>
                        <br>
                        <form action="{{ route('places.destroy', ['places' => $place->id ]) }}" method="post" >
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-block btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        <div class="row">
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                        <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">{{ $places->links() }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    
    
</div>

@endsection