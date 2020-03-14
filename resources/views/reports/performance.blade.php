@extends('layouts.main')

@section('title', 'PlusFarm | Roports index')

@section('content')
   @include('partials.messages')
    @include('reports.search')
<div class="card">
  <div class="card-body">

     <small class="">Plusfarm Kenya Ltd</small><br>
     <small class="card-title font-weight-bolder">CROP PERFORMANCE REPORT</small><br>
   <small class="">
     {{$produce->farm->farm_name}} |
     <strong> {{$produce->size}} </strong>
     {{str_plural('Acre',$produce->size)}}
    </small>
     <img src="{{ asset('/images/icons/logo1.png') }}" class="float-right" alt="...">
     <div class="pl-4 bg-secondary mt-4">
       <h4 class="text-primary">{{ Auth::user()->name }}</h4>
      <small class="font-weight-bolder">Produce: {{$produce->plant->name}} </small><br>
       <small class="font-weight-bolder">Variety: {{$produce->variety}} </small><br><br>
     </div>
     <hr>
       <br>
    <br>
      <div class="table-responsive">
        <table class="table table-borderless">
              <tbody>
                  <tr>
                      <td>Start Date: {{$produce->created_at->toFormattedDateString()}} </td>
                      <td></td>
                      <td></td>
                      <td>Last Harvest Date:
                           @foreach($harvestings as $harve)
                             {{$harve->created_at->toFormattedDateString()}}
                           @endforeach
                      </td>
                  </tr>
                  <tr>
                      <td> Propagation Status: ACTIVE</td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                   <tr>
                      <td> Fertilizer(s) Used</td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td> Herbicide(s) Used</td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                   <tr>
                      <td> Pesticide(s) Used</td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td> Results / Observations</td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                    <tr>
                      <td>Total Harvest:</td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  </tr>
                    <tr>
                      <td> Comments: ________________________________________________</td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
          </tbody>
      </table>
      </div>
  </div>
</div>
     @endsection
@include('reports.script')
