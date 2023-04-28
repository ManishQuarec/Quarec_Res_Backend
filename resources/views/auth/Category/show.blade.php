@extends('layouts.auth')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show category</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('category.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-responsive" >
                <tr>
                    <th>ID</th>
                    <td>{{$category->id}}</td>
                </tr>
               
                <tr>
                    <th>Category</th>
                    <td>{{$category->name}}</td>
                </tr>
               
               
            </table>
        </div>
    </div>
    @endsection