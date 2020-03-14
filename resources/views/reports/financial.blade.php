@extends('layouts.main')
@section('title', 'PlusFarm | Roports index')
@section('content')
   @include('partials.messages')
    @include('reports.search')
<div class="card">
  <div class="card-body">

     <small class="">Plusfarm Kenya Ltd</small><br>
     <small class="card-title font-weight-bolder">PRODUCE FINANCIAL REPORT</small><br>
    <small class="">
    {{$produce->farm->farm_name}} |
     <strong> {{$produce->size}} </strong>
     {{str_plural('Acre',$produce->size)}}
    </small>
     <img src="{{ asset('/images/icons/logo1.png') }}" class="float-right" alt="...">
     <hr><hr><hr>
      <small class="font-weight-bolder">PRODUCE FINANCIAL REPORT</small> <br>
   <small class="">
    {{$produce->farm->farm_name}} |
     <strong> {{$produce->size}} </strong>
     {{str_plural('Acre',$produce->size)}}
    </small>
     <br><br>
       <div class="pl-4">
       <h4 class="text-primary">{{ Auth::user()->name }}</h4>
      <small class="font-weight-bolder">Produce: {{$produce->plant->name}} </small><br>
       <small class="font-weight-bolder">Variety: <b class="text-danger">{{$produce->variety}} </b></small><br><br>
     </div>

 <h5 class="card-title"><i class="fa fa-money mr-1"> </i>INCOME</h5>
 <div class="table-responsive">
  <table class="table">
        <thead  class="thead-light">
        <th>Details</th>
        <th>Date</th>
        <th>Qty</th>
         <th>Amount(KES)</th>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
    </tbody>
</table>
 </div>
<h5 class="card-title">(less)</h5>
 <h5 class="card-title"><i class="fa fa-money mr-1"> </i>EXPENDITURE</h5>
  <div class="table-responsive">
  <table class="table">
        <tbody>
            <tr  class="table-dark">
               <td colspan="4">Land Preparation</td>
            </tr>
            @foreach($preparations as $preparation)
            <tr>
                <td>{{$preparation->task}}</td>
                <td>{{$preparation->cost}}</td>
                <td>
                </td>
            </tr>
            @endforeach
            <tr>
                <td>Total</td>
                <td></td>
                <td class="table-active">{{$sum}}</td>
            </tr>
             <tr  class="table-dark">
                 <td colspan="4">Planting</td>
            </tr>
             @foreach($plantings as $planting)
            <tr>
                <td>{{$planting->task}}</td>
                <td>{{$planting->cost}}</td>
                <td>
                </td>
            </tr>
            @endforeach
            <tr>
                <td>Total</td>
                <td></td>
               <td class="table-active">{{$sum2}}</td>
            </tr>
             <tr  class="table-dark">
                 <td colspan="4">Harvesting</td>
                </tr>
            @foreach($harvestings as $harvesting)
            <tr>
                <td>{{$harvesting->task}}</td>
                <td>{{$harvesting->cost}}</td>
                <td>
                </td>
            </tr>
            @endforeach
            <tr>
                <td>Total</td>
                <td></td>
              <td class="table-active">{{$sum3}}</td>
            </tr>
             <tr  class="table-dark">
                 <td colspan="4">Storage</td>
                </tr>
            @foreach($storages as $storage)
            <tr>
                <td>{{$storage->task}}</td>
                <td>{{$storage->cost}}</td>
                <td>
                </td>
            </tr>
            @endforeach
            <tr>
                <td>Total</td>
                <td></td>
                 <td class="table-active">{{$sum4}}</td>
            </tr>
             <tr>
                <td></td>
                <td> Total Expenditure</td>
                 <td class="">
                     {{$sum+$sum2+$sum3+$sum4}}
                     <hr>
                </td>
            </tr>
    </tbody>
</table>
 </div>
  </div>
</div>
     @endsection
@include('reports.script')
