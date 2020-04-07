@extends('layouts.main')

    @section('title', 'Plusfarm | Edit produce')

@section('content')
<div class="card card border-success">
            <div class="card-header">
                <strong>Produce Form</strong>
            </div>
            <div class="card-body card-block">
    {!! Form::model($produce, [

                  'method' => 'PUT',
                  'route'  => ['up_date', $produce->id],
                  'files'  => TRUE
              ]) !!}
                    @include('admin.produce-form')

                    {!! Form::close() !!}
                    </div>
        </div>
@endsection
@include('produce.script')