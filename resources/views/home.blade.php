@extends('layouts.main')
@section('content')
<div class="row">
<div class="col-12">
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
           @if ($produce->plant->image_url)
                <img src="{{$produce->plant->image_url}}" class="card-img-top" alt="{{$produce->plant->name}}">
                  @endif
                <div class="card-body">
                      <h6 class="info-box-text"></h6>
                     <div class="d-flex justify-content-between">
                          <h6 class="card-title mb-0 info-box-text">{{$produce->farm->farm_name}}</h6>
                          <p class="font-weight-semibold mb-0 info-box-text">{{$produce->plant->name}}  |  {{$produce->variety->name}}</p>
                        </div>
                      <h6 class="font-weight-medium info-box-text">
                        <strong> {{$produce->size}} </strong>
                        {{str_plural('Acre',$produce->size)}}
                        </h6>
                    <a href="{{route('backend.produces.index')}}" class="btn btn-primary">View Details</a>
                </div>
              </div>
        </div>
        @if ($loop->iteration % 3 == 0)
            </div>
            <div class="row">
        @endif
    @endforeach
</div>
 @endif
  </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection
