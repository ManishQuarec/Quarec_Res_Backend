@extends('layouts.auth')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Resume</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('auth/resume/create') }}"> Create New Resume</a>
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
            <th>Name</th>
            <th>Email</th>
            <th>phone</th>
            <th>Download</th>
            <th>portfolio_url</th>
            <th width="310px">Action</th>
        </tr>
        @foreach ($resumes as $resume)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $resume ->name }}</td>
            <td>{{ $resume ->email }}</td>
            <td>{{ $resume ->phone }}</td>
            <td><a href="{{ route('resume.download', $resume->id) }}">Download</a></td>   
            <td><a href="">{{ $resume ->portfolio_url }}</a></td>
            <td>
                <form action="{{ url('auth/resume/delete',$resume->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ url('auth/resume/show',$resume->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ url('auth/resume/edit',$resume->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>

        @endforeach
    </table>
  
    
@endsection
