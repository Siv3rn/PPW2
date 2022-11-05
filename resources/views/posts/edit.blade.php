@extends('layouts.main');

@section('content')
    <div class="jumbotron jumbotron-fluid">
    <div class="container">

        <h1>Edit Post</h1>
        

    <form action="{{route('posts.update', $posts -> id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title"> Title</label>
        <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" value="{{$posts -> title}}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10">
            {{$posts -> description}}
        </textarea>

    </div>
    <div class="form-group">
        <label for="input-file">File Input</label>
        <div class="input-group">
            <div class="custom-file border border-secondary rounded">

                <input type="file" class="custom-file-input" id="input-file" name="picture">
                
                <label for="input-file" class="custom-file-input">Choose a File</label>
            </div>
        </div>
    <input type="hidden" name="id" value="{{$posts -> $id}}"><br>
    <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
</div>

@endsection