@extends('layouts.main')

@section('title', 'Plusfarm | Edit permission')

@section('content')
    <nav aria-label="breadcrumb">
       <a href="{{ route('backend.permissions.index') }}">
        <button class="btn btn-sm btn-outline-success">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            BACK
        </button></a>
    </nav>
    <div class="row mb-10">
        <div class="col-lg-8 offset-md-2">
            <div class="card border-success">
                <div class="card-header">
                    <strong>Edit {{$permission->name}}</strong>
                    <small> Form</small>
                </div>
                <div class="card-body card-block">
                    {{ Form::model($permission, array('route' => array('backend.permissions.update', $permission->id), 'method' => 'PUT')) }}

                    <div class="form-group">
                        {{ Form::label('name', 'Permission Name') }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>
                    <br>
                    {{ Form::submit('UPDATE', ['class' => 'btn btn-success btn-sm']) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
