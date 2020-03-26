@extends('layouts.main')

@section('title', 'PlusFarm | Produce index')
@section('style')
    <style>
        .loading {
            background: lightgrey;
            padding: 15px;
            position: fixed;
            border-radius: 4px;
            left: 50%;
            top: 50%;
            text-align: center;
            margin: -40px 0 0 -50px;
            z-index: 2000;
            display: none;
        }

        a, a:hover {
            color: white;
        }

        .form-group.required label:after {
            content: " *";
            color: red;
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
<div class="row">
<div class="col-12">
     <a href="{{ route('backend.produces.create') }}">
        <button  type="button" class="btn btn-success mb-2">
    <i class="fa fa-plus-circle"></i>Add Produce</button>
       </a>

   @include('partials.messages')
    @if(! $produces->count())
        <div class="alert alert-danger m-2">
            No Records
        </div>
        <!-- /.alert alert-danger -->
     @else
  <div class="card mt-3">
            <div class="card-header bg-success">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">LIST OF PRODUCE</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                   @include('produce.table')
                </div>
                @endif
             </div>
         </div>

            </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
     @endsection

  @include('produce.script')
