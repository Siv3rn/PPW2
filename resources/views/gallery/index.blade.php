@extends('layouts.main')
@section('content')
    <style type="text/css">
    .pagination li {
        float: left;
        list-style-type: none;
        margin: 5px;
    }
    </style>
    {{-- main content --}}

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h4 class="card-title">{{$menu}}</h4>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                @if(count($galleries)>0)
                                @foreach ($galleries as $gallery)
                                <div class=" d-flex justify-content-center">
                                    <div class="px-3">
                                        <a href="{{asset('storage/posts_image/'.$gallery->picture)}}" class="example-image-link" data-lightbox="example-2" data-title="{{$gallery->description}}">  
                                            <img src="{{asset('storage/posts_image/'.$gallery->picture)}}" alt="noimage.png" style="height: 300px" class="example-img image-fluid mb-2">
                                        </a><br>
                                    </div>
                                </div>
                                @endforeach
                                @else 
                                <h3>Tidak ada data</h3>
                                @endif
                                <div class="d-flex">{{$galleries->links()}} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection