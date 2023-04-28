@extends('layouts.auth')

@section('styles')
<link href="{{asset('assets/auth/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin-users.index') }}"> Back</a>
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
   
<form class="row" method="POST" action="{{route('admin-users.store')}}" >
        <div class="col-md-9">
            <div class="card mb-4">
                <div class="card-body">
                    @csrf
                    <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                        <label for="name" class="form-label">First Name</label>
                        <input id="name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="name" value="{{ old('first_name') }}" required autocomplete="first_name" placeholder="First Name" />
                        @if($errors->has('name'))
                            <em class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </em>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="Last Name" />
                        @if($errors->has('last_name'))
                            <em class="invalid-feedback">
                                {{ $errors->first('last_name') }}
                            </em>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required  placeholder="Email" />
                        @if($errors->has('email'))
                            <em class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </em>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"   placeholder="Password" />
                        @if($errors->has('password'))
                            <em class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </em>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('confirm-password') ? 'has-error' : '' }}">
                        <label for="confirm-password" class="form-label">Confirm Password</label>
                        <input id="confirm-password" type="password" class="form-control @error('confirm-password') is-invalid @enderror" name="confirm-password"  placeholder="Password" />
                        @if($errors->has('confirm-password'))
                            <em class="invalid-feedback">
                                {{ $errors->first('confirm-password') }}
                            </em>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" class="form-control @error('role') is-invalid @enderror" required>
                            <option value="">Select Role</option>
                            @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('role'))
                            <em class="invalid-feedback">
                                {{ $errors->first('role') }}
                            </em>
                        @endif
                    </div>
                  
            
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center">
                        <div class="form-group">
                            <input class="add_page_button btn btn-primary" type="submit" value="Save">
                        </div>
                    </div>
    </form>

@endsection


 