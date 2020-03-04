@extends('layouts.main')

@section('title', 'PlusFarm | farm rocords')
@section('style')
@endsection
@section('content')
 {{-- <a href="{{ route('backend.farms.create') }}">
        <button  type="button" class="btn btn-outline-primary">
    <i class="fa fa-plus"></i>Add Farm</button>
       </a> --}}
   @include('partials.messages')
    {{-- @if(! $farms->count())
        <div class="alert alert-danger m-2">
            No Records
        </div>
        <!-- /.alert alert-danger -->
     @else --}}
     <div class="card mt-4">
            <div class="card-header bg-primary">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            LIST OF ACTIVITIES
                        </a>
                    </li>

                </ul>
            </div>
            <div class="p-4">
                  @include('farm.records-table')
                {{-- @endif --}}
             </div>
         </div>
     @endsection
    @include('preparation.script')
    @include('farm.modal')
