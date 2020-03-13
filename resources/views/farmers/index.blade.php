@extends('layouts.main')

@section('title', 'Plusfarm  | Farmers index')

@section('content')

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
                @include('farmers.table')
            </div>
            </div>
 @endif
@endsection



