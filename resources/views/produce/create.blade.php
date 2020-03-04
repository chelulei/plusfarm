@extends('layouts.main')

@section('title', 'Plus Farm | Add new produce')

@section('content')
<div class="card card">
            <div class="card-header">
                <strong>Production Form</strong>
            </div>
            <div class="card-body card-block">
                {!! Form::model($produce, [
                    'method' => 'POST',
                    'route'  => 'backend.produces.store',
                    'files'  => TRUE
                ]) !!}
              @include('produce.form')
               {!! Form::close() !!}
            </div>
        </div>

@endsection

@include('produce.script')

