@extends('layouts.main')

@section('content')
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {!! session('success')!!}
</div>
@endif
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>Blog Post</h1>
        @if(count($posts)>0)
            @foreach ($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post -> id}} " > {{$post -> title}}</a></h3>

                <small>tanggal:{{$post-> created_at}} </small>                
            </div>
            @endforeach
        @else
        <h3>Tidak ada data</h3>
        @endif
        </div>
        
    </div>

    <a href="{{route ('posts.create') }}" class="btn btn-primary"> Create   </a>

    
@endsection 