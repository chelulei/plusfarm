@extends('layouts.main')

@section('title', 'PlusFarm | Roports index')

@section('content')
   @include('partials.messages')
    @include('reports.search')
<div class="card">
<div class="card-body" id="printableTable">
    <small class="">Date: {{$produce->updated_at->toFormattedDateString()}}</small><br>
     <small class="">Plusfarm Kenya Ltd</small><br>
     <small class="font-weight-bolder">PERFORMANCE REPORT</small><br>
   <small class="">
     {{$produce->farm->farm_name}} |
     <strong> {{$produce->size}} </strong>
     {{str_plural('Acre',$produce->size)}}
    </small>
       <img src="{{ asset('/images/icons/logo1.png') }}" class="float-right" alt="PlusFarm">
     <hr><hr><hr>
     <div class="pl-4 bg-secondary mt-4">
       <h4 class="text-white">{{ Auth::user()->name }}</h4>
      <small class="font-weight-bolder">Produce: {{$produce->plant->name}} </small><br>
       <small class="font-weight-bolder">Variety: {{$produce->variety->name}}</small><br><br>
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
                     <td colspan="4"><h6>Fertilizer(s) Used</h6></td>
                  </tr>
                    @foreach($fertilizers as $fertilizer)
                    <tr>
                        <td>{{$fertilizer->task}}</td>
                        <td>
                    </tr>
                   @endforeach
                  <tr>
                     <td colspan="4"><h6>Herbicide(s) Used</h6></td>
                  </tr>
                    @foreach($herbicides as $herbicide)
                    <tr>
                        <td>{{$herbicide->task}}</td>
                        <td>
                        </td>
                    </tr>
                   @endforeach
                   {{-- <tr>
                     <td colspan="4"> Pesticide(s) Used</td>
                  </tr>
                    @foreach($storages as $storage)
                    <tr>
                        <td>{{$storage->task}}</td>
                        <td>{{$storage->cost}}</td>
                        <td>
                        </td>
                    </tr>
                   @endforeach --}}
                  <tr>
                      <td><h6> Results / Observations</h6></td>
                      @foreach($harvests as $harvest)
                        <tr>
                            <td>{{$harvest->details}}</td>
                            <td>
                            </td>
                        </tr>
                        @endforeach
                  </tr>
                    <tr>
                      <td><h6>Total Harvest</h6></td>
                      <td>{{$sum5}} (kgs)</td>
                  </tr>
                  </tr>
                    <tr>
                      <td><h6>Comments:</h6></td>
                       @foreach($harvests as $harvest)
                        <tr>
                            <td>{{$harvest->remarks}}</td>
                        </tr>
                     @endforeach
                  </tr>
          </tbody>
      </table>
      </div>
  </div>
  <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
  <div class="text-center mb-4">
   <button class="btn btn-success btn-lg" onclick="printDiv()">
       <i class="fas fa-print"></i>
        Print
    </button>
</div><!-- /.text-center -->
</div>
 @endsection
@include('reports.script')
