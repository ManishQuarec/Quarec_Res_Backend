@extends('layouts.auth')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Blog</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Blog Title:</strong>
                <input type="text" name="title" class="form-control" value="{{$post->title}}" placeholder="Title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Blog Description:</strong>
                <textarea class="form-control ckeditor" style="height:150px" name="description" >{{$post->description}} </textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Blog Image:</strong>
                <input type="file" name="profile_image" id="profile_image" class="form-control"  value="{{$post->profile_image}}"/>
                <img src="{{asset('uploads/posts/'.$post->profile_image)}}" alt="" srcset="" height="70px" width="80px">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection

@section('scripts')

<script src="//cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
       
    });
</script>
@endsection
   