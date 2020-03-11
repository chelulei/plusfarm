@extends('layouts.main')
@section('content')
 @if(! $produces->count())
        <div class="alert alert-danger m-2">
            No Records
        </div>
        <!-- /.alert alert-danger -->
     @else
<div class="row">
    @foreach($produces as $produce)
        <div class="col-md-4">
       <div class="card">
                <img src="{{$produce->plant->image_url}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">SHORT TERM CEREALS</h5>
                     <div class="d-flex justify-content-between">
                          <h6 class="card-title mb-0">{{$produce->farm->farm_name}}</h6>
                          <p class="font-weight-semibold mb-0">{{$produce->plant->name}} | {{$produce->variety}}</p>
                        </div>
                      <h4 class="font-weight-medium">{{$produce->size}} Acres</h4>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
              </div>
        </div>
        @if ($loop->iteration % 2 == 0)
            </div>
            <div class="row">
        @endif
    @endforeach
</div>
 @endif
@endsection
