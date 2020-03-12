@extends('layouts.main')
@section('content')
 {{-- @include('partials._statistics') --}}
  {{-- @include('partials._overview') --}}

<div class="row">
  <div class="col md-4">
  <div class="card">
  <div class="card-body">
    <h5 class="card-title">Farmers</h5>
    <h6 class="card-subtitle mb-2 text-muted">100</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">View Details</a>
  </div>
</div>
</div><!-- /.col md-4 -->
  <div class="col md-4">
  <div class="card">
  <div class="card-body">
    <h5 class="card-title">Users</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">View Details</a>
  </div>
</div>
  </div><!-- /.col md-4 -->
  <div class="col md-4">
  <div class="card">
  <div class="card-body">
    <h5 class="card-title">Blogs</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">View Details</a>
  </div>
</div>

  </div><!-- /.col md-4 -->
</div><!-- /.row -->
@endsection
