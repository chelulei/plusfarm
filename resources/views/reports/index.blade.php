@extends('layouts.main')

@section('title', 'PlusFarm | Roports index')

@section('content')
   @include('partials.messages')

            <div class="card-header bg-success mt-4">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">LIST OF REPORTS</a>
                    </li>

                </ul>
            </div>
          @include('reports.table')
     @endsection
@include('reports.script')
