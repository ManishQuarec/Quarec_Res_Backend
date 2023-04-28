@extends('layouts.auth')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Resume Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('auth/resume') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-responsive" >
                <tr>
                    <th>ID</th>
                    <td>{{$resume->id}}</td>
                </tr>
                <tr>
                    <th> Name</th>
                    <td>{{ $resume->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $resume->email }}</td>
                </tr>

                <tr>
                    <th>Phone</th>
                    <td>{{ $resume->phone }}</td>
                </tr>

                <tr>
                    <th>Message</th>
                    <td>{{ $resume->message }}</td>
                </tr>

                <tr>
                    <th>Position</th>
                    <td>{{ $resume->position }}</td>
                </tr>
               
            </table>
        </div>
    </div>
    @endsection