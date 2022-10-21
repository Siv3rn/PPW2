@extends('layouts.main')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1> {{$posts-> title}} </h1>
        <small>tanggal: {{$posts-> created_at}} </small>
        <p>{{$posts-> description}}</p>
    </div>
</div>
<a href="/posts" class="btn btn-primary">Back</a>
@auth
<a href="/posts/{{$posts->id}}/edit" class="btn btn-primary"> Edit</a>
<form action="{{ route('posts.destroy',$posts->id) }}" method="POST">
@method('DELETE')
{{ csrf_field() }}
<input type="hidden" name="id" value="{{
$posts->id }}">

<br><br>
<button type="submit" class="btn btn-danger">Delete</button>
</form>
@endauth
@endsection