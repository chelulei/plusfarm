@extends('layouts.main')
@section('content')
<div class="row">
  <div class="col md-4">
  <div class="card">
  <div class="card-body">
    <h5 class="card-title">Farmers</h5>
    <h6 class="card-subtitle mb-2  text-muted">
       <strong> {{$farmersCount}} </strong>
       {{str_plural('farmer',$farmersCount)}}
    </h6>
    <p class="card-text"></p>
    <a href="{{ route('backend.farmers.index') }}" class="card-link">View Details</a>
  </div>
</div>
</div><!-- /.col md-4 -->
  <div class="col md-4">
  <div class="card">
  <div class="card-body">
    <h5 class="card-title">Users</h5>
    <h6 class="card-subtitle mb-2  text-muted">
      <strong> {{$usersCount}} </strong>
       {{str_plural('user',$usersCount)}}
    </h6>
    <p class="card-text"></p>
    <a href="{{ route('backend.users.index') }}" class="card-link">View Details</a>
  </div>
</div>
  </div><!-- /.col md-4 -->
  <div class="col md-4">
  <div class="card">
  <div class="card-body">
    <h5 class="card-title">Blogs</h5>
    <h6 class="card-subtitle mb-2 text-muted">
      <strong> {{$blogsCount}} </strong>
       {{str_plural('blog',$blogsCount)}}</h6>
    <p class="card-text"></p>
    <a href="{{ route('backend.blogs.index') }}" class="card-link">View Details</a>
  </div>
</div>

  </div><!-- /.col md-4 -->
</div><!-- /.row -->
@endsection
