@extends('layouts.auth')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Blog</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>CREATED USER</th>
            <th>Blog Title</th>
            <th>Blog Description</th>
            <th>Blog Image</th>
            <th width="310px">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post->title }}</td>
            <td> {!!  html_entity_decode($post->description) !!}</td>
            <td><img src="/uploads/posts/{{ $post->profile_image }}" width="80px"  height="70px"></td>

            <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
