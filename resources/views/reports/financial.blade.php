@extends('layouts.main')
@section('title', 'PlusFarm | Roports index')
@section('content')
   @include('partials.messages')
    @include('reports.search')
<div class="card">
  <div class="card-body">

     <small class="">Plusfarm Kenya Ltd</small><br>
     <small class="card-title font-weight-bolder">CROP FINANCIAL REPORT</small><br>
     <small class="">Farm: 1054(34)</small>
     <img src="{{ asset('/images/icons/logo1.png') }}" class="float-right" alt="...">
     <hr><hr><hr>
      <small class="font-weight-bolder">PRODUCE FINANCIAL REPORT</small> <br>
     <small>Farm: 1054(34)</small><br><br>
       <div class="pl-4">
       <h4 class="text-primary">---Vin Cal</h4>
      <small class="font-weight-bolder">Produce: Maize </small><br>
       <small class="font-weight-bolder">Variety: H6218 </small><br><br>
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
                <td>reports</td>
                <td>3/5/2020</td>
                <td>67</td>
                <td>1000</td>
            </tr>
    </tbody>
</table>
 </div>
    <h5 class="card-title"><i class="fa fa-money mr-1"> </i>EXPENDITURE</h5>
   <div class="table-responsive">
  <table class="table">
        <tbody>
            <tr  class="table-active">
               <td colspan="4">Land Preparation</td>
            </tr>
            {{-- @foreach($produces as $produce)
            <tr>
                <td>{{$produce->task}}</td>
                <td>{{$produce->cost}}</td>
                <td>
                </td>
            </tr>
            @endforeach --}}
             <tr  class="table-active">
                 <td colspan="4">Planting</td>
            </tr>
            <tr>
                <td></td>
                <td>bush Clearing</td>
                <td>5000</td>
            </tr>
             <tr  class="table-active">
                 <td colspan="4">Harvesting</td>
                </tr>
            <tr>
                <td></td>
               <td>bush Clearing</td>
                <td>5000</td>
            </tr>
             <tr  class="table-active">
                 <td colspan="4">Storage</td>
                </tr>
            <tr>
                <td></td>
               <td>bush Clearing</td>
                <td>5000</td>
            </tr>
    </tbody>
</table>
 </div>
  </div>
</div>
     @endsection
@include('reports.script')
