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
        <button  type="button" class="btn btn-sm btn-outline-success mb-2"
         data-toggle="modal" data-target="#cropModal">
    <i class="fa fa-plus-circle"></i>Add Crop
</button>
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
                        <a class="nav-link active" href="#">LIST OF Crops</a>
                    </li>

                </ul>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive m-b-40">
                   @include('crops.table')
                </div>
                @endif
             </div>
         </div>
     @endsection

