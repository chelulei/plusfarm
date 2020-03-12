@extends('layouts.main')

@section('title', 'PlusFarm | farm index')
@section('style')
@endsection
@section('content')
 <a href="{{ route('backend.farms.create') }}">
        <button  type="button" class="btn btn-success">
    <i class="fa fa-plus"></i>Add Farm</button>
       </a>
   @include('partials.messages')
    @if(! $farms->count())
        <div class="alert alert-danger m-2">
            No Records
        </div>
        <!-- /.alert alert-danger -->
     @else
     <div class="card mt-4">
            <div class="card-header bg-success">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">LIST OF FARMS</a>
                    </li>

                </ul>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive m-b-40">
                   @include('farm.table')
                </div>
                @endif
             </div>
         </div>
     @endsection
     @include('farm.script')
