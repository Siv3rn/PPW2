@extends('layouts.main')
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>Add Blog Post</h1>
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}            
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailhelp" name="title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="input-file">File Input</label>
                <div class="input-group">
                    <div class="custom-file">

                        <input type="file" class="custom-file-input" id="input-file" name="picture">
                        
                        <label for="input-file" class="custom-file-input">Choose a File</label>
                    </div>
                </div>
                
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
    
@endsection