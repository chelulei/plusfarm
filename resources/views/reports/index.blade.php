@extends('layouts.main')
@section('title', 'PlusFarm | Roports index')
@section('content')
   @include('partials.messages')
    @include('reports.search')
      <div class="card">
      <div class="card-body pb-5">
           <p class="text-center text-primary bg-secondary rounded-pill">
              NO SELECTION!! CHOOSE TYPE OF REPORT TO GENERATE!!
            </p>
      </div>
      </div>
      <hr>
      <p class="text-muted text-center">
 Plusfarm - FMS <br>
Easily manage your farm accounts/activities
</p>
             <div class="text-center">
                    <a href="{{url('/')}}">
                        <img src="{{ asset('/images/icons/logo1.png') }}"  alt="Plusfarm" class="mx-auto d-block" >
                    </a>
                </div>
     @endsection
@include('reports.script')
