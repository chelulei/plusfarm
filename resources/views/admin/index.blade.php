@extends('layouts.main')
@section('title', 'PlusFarm | farm index')
@section('content')
<div class="row">
<div class="col-12">
  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="Second group">
    <a  href="{{url()->previous()}}" class="btn btn-sm  btn-success mb-2">
      <i class="fa fa-arrow-left"></i>
           BACK
          </a>
  </div>
 <div class="btn-group mr-2" role="group" aria-label="Second group">
     @isset($user)
    @can('produce-list')
    <a  href="{{route('produce', [$user->id])}}" class="btn btn-sm  btn-success mb-2">
        <i class="fa fa-tree"></i>
          List of Produce
          </a>
     @endcan
     @endisset
  </div>
</div>
   @include('partials.messages')
    @if(! $farms->count())
        <div class="alert alert-danger m-2">
            No Records
        </div>
        <!-- /.alert alert-danger -->
     @else
           <div class="card">
            <div class="card-header bg-success">
          <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                       {{$user->name}}: Farms
                        </a>
                    </li>

                </ul>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                   @include('admin.table')
                </div>
                @endif
              </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
            </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
     @endsection
