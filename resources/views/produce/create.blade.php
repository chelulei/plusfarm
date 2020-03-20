@extends('layouts.main')
@section('title', 'Plus Farm | Add new produce')
@section('content')
<div class="breadcrumbs">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{url()->previous()}}">
                        <button class="btn btn-success">
                        <i class="fa fa-arrow-left"></i>BACK</button>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
     @include('partials.messages')
<div class="card card  border-success">
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




