@extends('layouts.main')

@section('title', 'Plusfarm  | Farmers index')

@section('content')
  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="First group">
       @can('farmers-create')
    <a href="{{ route('backend.farmers.create') }}">
        <button  type="button" class="btn btn-sm  btn-success mb-2">
    <i class="fa fa-plus"></i>Add Farmer</button>
       </a>
       @endcan
  </div>
</div>

            @if(! $users->count())
                <div class="alert alert-danger m-2">
                    No Records
                </div>
            @else
            <div class="card text-center">
            <div class="card-header bg-success">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">LIST OF FARMERS</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                  <div class="table-responsive">
                @include('farmers.table')
                  </div>
            </div>
            </div>
 @endif
@endsection



