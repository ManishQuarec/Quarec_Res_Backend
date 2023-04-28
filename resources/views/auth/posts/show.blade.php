@extends('layouts.auth')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-responsive" >
                <tr>
                    <th>ID</th>
                    <td>{{$post->id}}</td>
                </tr>
                <tr>
                    <th>Category Name</th>
                    <td>{{ $post->category_name }}</td>
                </tr>
                <tr>
                    <th>Created  User</th>
                    <td>{{ $post->user->name }}</td>
                </tr>
               
                <tr>
                    <th>Blog Image</th>
                    <td><img src="/uploads/posts/{{ $post->profile_image }}" width="80px"  height="70px"></td>
                </tr>

                <tr>
                    <th> Blog Title</th>
                    <td>{{$post->title}}</td>
                </tr>
                <tr>
                    <th>Blog Description</th>
                    <td>{!! html_entity_decode($post->description) !!}</td>
                
                </tr>
               
            </table>
        </div>
    </div>
    @endsection