
@extends('layouts.main')
@section('title', 'Plus Farm | Add new farm')
@section('content')
 @include('partials.messages')
 <div class="card">
    <div class="card-header bg-success">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <i class="zmdi zmdi-format-align-justify"></i>
                   FARM DETAILS</a>
            </li>

        </ul>
    </div>
    <div class="card-body p-4">
    <div class="row">
        <div class="table-responsive m-b-40">
            @include('farm.show-table')
        </div>
    </div>
    <!-- /.row -->
    </div>
</div>
@endsection
@include('farm.modal')
@include('farm.script')
