@extends('layouts.main')

@section('content')
<div class="row">
         <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <img src="{{ asset('images/beans.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">SHORT TERM CEREALS</h5>
                     <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">{{ $farmCount }} {{ str_plural('Farm', $farmCount) }}</h4>
                          <p class="font-weight-semibold mb-0">{{ $produceCount }} {{ str_plural('Crop', $produceCount) }}</p>
                        </div>
                      <h3 class="font-weight-medium"></h3>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <img src="{{ asset('images/maize.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">LONG TERM CEREALS</h5>
                    <p class="card-text">......</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
              </div>
            </div>
              <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <img src="{{ asset('images/beans.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Other Crops</h5>
                    <p class="card-text">.......</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
              </div>
            </div>
  </div>
@endsection
