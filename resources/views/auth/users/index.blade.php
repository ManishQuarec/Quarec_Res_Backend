@extends('layouts.auth')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin-users.create') }}"> Add New User</a>
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
         <th>ID</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Role</th>
         <th width="310px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->role }}</td>
            <td>
                <form action="{{ route('admin-users.destroy',$user->id) }}" method="POST">
                <p class="btn btn-primary">Disable Action</p>
                    <!-- <a class="btn btn-info" href="{{ route('admin-users.show',$user->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('admin-users.edit',$user->id) }}">Edit</a>
    
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button> -->
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
