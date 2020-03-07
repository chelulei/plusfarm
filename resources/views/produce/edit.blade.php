@extends('layouts.main')

    @section('title', 'Clinic | Edit appointment')

@section('content')
<div class="card card border-success">
            <div class="card-header">
                <strong>Farm Form</strong>
            </div>
            <div class="card-body card-block">
    {!! Form::model($produce, [

                  'method' => 'PUT',
                  'route'  => ['backend.produces.update', $produce->id],
                  'files'  => TRUE
              ]) !!}

                    @include('produce.form')

                    {!! Form::close() !!}
                    </div>
        </div>
@endsection
@include('produce.script')