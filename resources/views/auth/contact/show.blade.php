@extends('layouts.auth')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Contact Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contact.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-responsive" >
                <tr>
                    <th>ID</th>
                    <td>{{$contact->id}}</td>
                </tr>
                <tr>
                    <th> Name</th>
                    <td>{{ $contact->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $contact->email }}</td>
                </tr>

                <tr>
                    <th>Phone</th>
                    <td>{{ $contact->phone }}</td>
                </tr>

                <tr>
                    <th>Message</th>
                    <td>{{ $contact->message }}</td>
                </tr>
               
            </table>
        </div>
    </div>
    @endsection