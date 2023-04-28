@extends('layouts.auth')

@section('styles')
<link href="{{asset('assets/auth/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit User</h2>
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
   
<form class="row" method="POST" action="{{route('admin-users.update',$user->id)}}" >
        <div class="col-md-9">
            <div class="card mb-4">
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                        <label for="name" class="form-label">First Name</label>
                        <input id="name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="name" value="{{('$user->name') }}" required autocomplete="first_name" placeholder="First Name" />
                        @if($errors->has('name'))
                            <em class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </em>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $user->last_name }}" required autocomplete="last_name" placeholder="Last Name" />
                        @if($errors->has('last_name'))
                            <em class="invalid-feedback">
                                {{ $errors->first('last_name') }}
                            </em>
                        @endif
                    </div>
                   
                    <div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" class="form-control @error('role') is-invalid @enderror" required>
                        <option value=""  disabled selected>Choose Option</option>
                         @foreach ($roles as $role)
                           <option value="{{ $role->name }}"
                    @if ($user->role == $role->id) {{ 'selected' }} 
                    @endif> {{ $role->name }}</option>
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


 