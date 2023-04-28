@extends('layouts.auth')

@section('styles')
<link href="{{asset('assets/auth/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
@endsection
@section('content')


      <!-- ====================================
      ——— CONTENT WRAPPER
      ===================================== -->
      <div class="content-wrapper">
        <div class="content">                
                <!-- Top Statistics -->
                <div class="row">
                  <div class="col-xl-3 col-sm-6">
                    <div class="card card-default card-mini" style="height:140px">
                      <div class="card-header">
                        <h2>{{$posts}}</h2>
                        <div class="dropdown">
                          <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </div>
                        <div class="sub-title">
                          <span class="mr-1">Post</span> 
                         
                        </div>
                      </div>
                     
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6">
                    <div class="card card-default card-mini" style="height:140px">
                      <div class="card-header">
                        <h2>{{$categories}}</h2>
                        <div class="dropdown">
                          <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </div>
                        <div class="sub-title">
                          <span class="mr-1">Category</span> |
                          
                        </div>
                      </div>
                     
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6">
                    <div class="card card-default card-mini" style="height:140px">
                      <div class="card-header">
                        <h2>{{$tags}}</h2>
                        <div class="dropdown">
                          <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </div>
                        <div class="sub-title">
                          <span class="mr-1">Tags</span> |
                        </div>
                      </div>
                     
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6">
                    <div class="card card-default card-mini" style="height:140px">
                      <div class="card-header">
                        <h2>{{$users}}</h2>
                        <div class="dropdown">
                          <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </div>
                        <div class="sub-title">
                          <span class="mr-1">Users</span> |
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>

@endsection
@section('scripts')
<script src="{{asset('assets/auth/plugins/apexcharts/apexcharts.js')}}"></script> 
@endsection
 