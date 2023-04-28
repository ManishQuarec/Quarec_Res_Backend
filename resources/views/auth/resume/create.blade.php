@extends('layouts.auth')

@section('styles')
<link href="{{asset('assets/auth/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Resume</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('auth/resume') }}"> Back</a>
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
   
<form action="{{ url('auth/resume/store') }}" method="POST" enctype="multipart/form-data">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
                @if($errors->has('name'))
                <p class="text-danger">{{$errors->first('name')}}</p>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Phone:</strong>
                <input type="number"  name="phone" class="form-control" placeholder="+91 9987654321">
                @if($errors->has('phone'))
                <p class="text-danger">{{$errors->first('phone')}}</p>
                @endif
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="Email">
                @if($errors->has('email'))
                <p class="text-danger">{{$errors->first('email')}}</p>
                @endif
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Job Role:</strong>
                <input type="text" name="job_role" class="form-control" placeholder="Job Role">
                @if($errors->has('job_role'))
                <p class="text-danger">{{$errors->first('job_role')}}</p>
                @endif
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Year Of Exp:</strong>
                <input type="number" name="year_of_exp" class="form-control" placeholder="year of exp">
                @if($errors->has('year_of_exp'))
                <p class="text-danger">{{$errors->first('year_of_exp')}}</p>
                @endif
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Current CTC:</strong>
                <input type="number" name="current_ctc" class="form-control" placeholder="current Ctc">
                @if($errors->has('current_ctc'))
                <p class="text-danger">{{$errors->first('current_ctc')}}</p>
                @endif
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Exp CTC:</strong>
                <input type="number" name="exp_ctc" class="form-control" placeholder="excepted Ctc">
                @if($errors->has('exp_ctc'))
                <p class="text-danger">{{$errors->first('exp_ctc')}}</p>
                @endif
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>job Sector:</strong>
                <select  name="job_sector" class="form-control">
                    <option value=""  disabled selected>Choose Options</option>
                    <option value="Non IT">Non IT</option>
                    <option value="IT"> IT</option>
                </select>
            </div>
        </div>

       
      
        <div class="col-xs-12 col-sm-12 col-md-6 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>

@endsection

 