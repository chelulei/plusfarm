
@extends('layouts.main')

@section('title', 'Plusfarm | Add new role')

@section('content')
    <div class="breadcrumbs">

        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('backend.roles.index') }}">
                            <button class="btn btn-sm  btn-outline-success">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>BACK</button></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
             <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul class="ml-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row mb-10">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Create New Role</strong>
                </div>
                <div class="card-body card-block">
        {!! Form::open(array('route' => 'backend.roles.store','method'=>'POST')) !!}
            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
                    <h5><b>Assign Permissions</b></h5>
                    <br>
            <div class='form-group'>
                @foreach ($permissions as $permission)
                    {{ Form::checkbox('permissions[]',  $permission->id ) }}
                    {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                @endforeach
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-sm  btn-outline-success">save</button>
                    <a href="{{ route('backend.roles.index') }}" class="btn btn-sm btn-outline-danger" role="button" aria-pressed="true">Cance</a>
                </div>
                <br>
    {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
    <br><br>

@endsection
