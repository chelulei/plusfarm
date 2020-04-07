@extends('layouts.main')
@section('title', 'PlusFarm | Roports index')
@section('style')
    <style>
        @media print {
        * {
            display: none;
        }
        #printableTable {
            display: block;
        }

        }
    </style>
@endsection
@section('content')
   @include('partials.messages')
    @include('reports.search')
<div class="card">
  <div class="card-body" id="printableTable">
     <div style="float:right;">
        <img src="{{ asset('/images/icons/logo1.png') }}" class="img-fluid float-sm-right" alt="PlusFarm">
    </div>
     <small class="">Date: {{$produce->updated_at->toFormattedDateString()}}</small><br>
     <small class="">Plusfarm Kenya Ltd</small><br>
      <small class="">{{ Auth::user()->name }}</small><br>
      <small class="">
    {{$produce->farm->farm_name}} |
     <strong> {{$produce->size}} </strong>
     {{str_plural('Acre',$produce->size)}}
    </small><br>
      <small class="font-weight-bolder">FINANCIAL REPORT</small><br>
      <small class="font-weight-bolder">Produce: {{$produce->plant->name}} </small><br>
       <small class="font-weight-bolder">Variety: {{$produce->variety->name}}</small>
     <hr><hr><hr>
 <h5 class="card-title">
   EXPENDITURE
    </h5>
    <br>
  <div class="table-responsive">
  <table class="table">
      <thead  class="">
         <th>Activity/Details</th>
         <th>Date</th>
         <th>Amount (Kshs)</th>
         <th></th>
        </thead>
        <tbody>
            <tr  class="table-dark">
               <td colspan="4">Land Preparation</td>
            </tr>
            @foreach($preparations as $preparation)
            <tr>
                <td>{{$preparation->task}}</td>
                 <td>{{$preparation->created_at->toFormattedDateString()}}</td>
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
                <td>{{$planting->created_at->toFormattedDateString()}}</td>
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
                <td>{{$harvesting->created_at->toFormattedDateString()}}</td>
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
                 <td>{{$storage->created_at->toFormattedDateString()}}</td>
                <td>{{$storage->cost}}</td>
                <td>
                </td>
            </tr>
            @endforeach
            <tr>
                <td>Total</td>
                <td></td>
                 <td class="table-active">{{$sum4}}</td>
                 <hr>
            </tr>
            <hr>
             <tr>
                <td></td>
                <td> Total Expenditure</td>
                 <td class="">
                    {{$sum+$sum2+$sum3+$sum4}} Kshs
                     <hr>
                </td>
            </tr>
    </tbody>
</table>
 </div>
  <h5 class="card-title"><i class="fa fa-money mr-1"> </i>INCOME</h5>
 <div class="table-responsive">
  <table class="table">
        <thead  class="thead-light">
        <th>Remarks</th>
        <th>Date</th>
        <th>Qty (kgs)</th>
         <th>Price/kg</th>
         <th>Amount(Kshs)</th>
        </thead>
        <tbody>
             @foreach($harvests as $harv)
            <tr>
                <td>{{$harv->remarks}}</td>
                <td>{{$harv->created_at->toFormattedDateString()}}</td>
                <td>{{$harv->total_harv}}</td>
                <td>{{$harv->price}}</td>
                <td>{{$harv->total_inc}}</td>
            </tr>
             @endforeach
             <tr>
                <td class="table-active">Total</td>
                <td class="table-active"></td>
                <td class="table-active">{{$sum5}} Kshs</td>
                <td class="table-active"></td>
                <td class="table-active">{{$sum6}} Kshs</td>
            </tr>
             <tr>
                 <td></td>
                <td></td>
                <td></td>
                <td> Net Income</td>
                 <td>
                     {{$sum6 - ($sum+$sum2+$sum3+$sum4)}} Kshs
                     <hr class="border-dark">
                </td>
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
