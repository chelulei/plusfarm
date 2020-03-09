@extends('layouts.main')

@section('content')
<div class="row">

         <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-0">Total Revenue</h4>
                    <p class="font-weight-semibold mb-0">+1.37%</p>
                </div>
                <h3 class="font-weight-medium mb-4">184.42K</h3>
                </div>
                <canvas class="mt-n4" height="90" id="total-revenue"></canva>
            </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-0">Transaction</h4>
                    <p class="font-weight-semibold mb-0">-2.87%</p>
                </div>
                <h3 class="font-weight-medium">147.7K</h3>
                </div>
                <canvas class="mt-n3" height="90" id="total-transaction"></canva>
            </div>
            </div>
              <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-0">Transaction</h4>
                    <p class="font-weight-semibold mb-0">-2.87%</p>
                </div>
                <h3 class="font-weight-medium">147.7K</h3>
                </div>
                <canvas class="mt-n3" height="90" id="total-transaction"></canva>
            </div>
            </div>
  </div>
@endsection
