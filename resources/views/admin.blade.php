@extends('layouts.main')
@section('content')
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Farmers</span>
                <span class="info-box-number">
                 <strong> {{$farmersCount}} </strong>
                  {{str_plural('farmer',$farmersCount)}}
                </span>
                  @can('farmers-list')
                <a href="{{ route('backend.farmers.index') }}" class="card-link">View Details</a>
                 @endcan
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Users</span>
                <span class="info-box-number">
                  <strong> {{$usersCount}} </strong>
                 {{str_plural('user',$usersCount)}}</span>
                  @can('users-list')
                   <a href="{{ route('backend.users.index') }}" class="card-link">View Details</a>
                    @endcan
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
            <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-book"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Blogs</span>
                <span class="info-box-number">
                    <strong> {{$blogsCount}} </strong>
                    {{str_plural('blog',$blogsCount)}}
                </span>
                  @can('blogs-list')
                 <a href="{{ route('backend.blogs.index') }}" class="card-link">View Details</a>
                   @endcan
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
           <div class="col-12 col-sm-6 col-md-3 pb-5">
            <div class="info-box p-5">
              <span class="info-box-icon">
                <i class=""></i></span>
              <div class="info-box-content">
                <span class="info-box-text"></span>
                <span class="info-box-number"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
</div><!-- /.row -->
@endsection
