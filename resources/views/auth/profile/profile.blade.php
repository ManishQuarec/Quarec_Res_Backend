@extends('layouts.auth')
@section('title') Profile @endsection
@section('content')


<div class="container">
   
    <div class="bd-example">
       <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
            </li>
        </ul>
    </div>
   <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <form class="row py-4" action="{{route('update.profile',$user)}}" method="POST" enctype="multipart/form-data">
    @csrf()
    <div class="card-body"> 
        @if (session('status')) 
        <div class="alert alert-success" role="alert"> 
            {{ session('status') }}
        </div>
        @elseif (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
        @endif

            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="name" id="first_name" placeholder="First Name" value= "{{ auth()->user()->name }}" >
                    @if($errors->has('name'))
                        <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                        </em>
                    @endif
                </div>
                <div class="col-sm-6">
                   <label for="last_name">Last Name</label>
                   <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="{{ auth()->user()->last_name }}">
                    @if($errors->has('last_name'))
                        <em class="invalid-feedback">
                        {{ $errors->first('last_name') }}
                        </em>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="phone">Contact Number</label>
                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Contact Number" value="{{ auth()->user()->phone }}" required>
                    @if($errors->has('phone'))
                    <em class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </em>
                    @endif
                </div>
                <div class="col-sm-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ auth()->user()->email }}" required>
                    @if($errors->has('email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </em>
                    @endif
                </div>
             </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="profile_pic">Profile Image</label>
                   <input type="file" class="form-control" name="profile_pic"  value="{{ auth()->user()->profile_pic }}" class="@error('profile_pic') is-invalid @enderror" >
                   @if($errors->has('profile_pic'))
                    <em class="invalid-feedback ps-2">
                        {{ $errors-first('profile_pic')}}
                    </em>
                   @enderror
                </div>
            </div>
         <div class="form-group">
            <input class="add_page_button btn btn-primary" type="submit" value="Update">
         </div>
        </div>
    </form>
</div>

      
    </div>

@endsection
