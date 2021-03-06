@extends('layouts.main')
@section('title', 'PlusFarm | farm index')
@section('style')
    <style>
        .form-group.required label:after {
            content: " *";
            color: red;
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
@can('varieties-create')
        <button  type="button" class="btn btn-sm btn-outline-success mb-2" data-toggle="modal" data-target="#seedModal">
    <i class="fa fa-plus"></i>Add Varieties
</button>
@endcan
<!-- Button trigger modal -->
<br>
   @include('partials.messages')
    @if(! $crops->count())
        <div class="alert alert-danger m-2">
            No Records
        </div>
        <!-- /.alert alert-danger -->
     @else
     <div class="card mt-4">
            <div class="card-header bg-success">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">LIST OF Varieties</a>
                    </li>

                </ul>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive m-b-40">
                   @include('seeds.table')
                </div>
                @endif
             </div>
         </div>
     @endsection
