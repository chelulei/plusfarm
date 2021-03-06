
@extends('layouts.main')

@section('title', 'Plusfarm | Add new permission')

@section('content')
    <div class="breadcrumbs">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('backend.permissions.index') }}">
                            <button class="btn btn-sm btn-outline-success">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                BACK
                            </button></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mb-10">
        <div class="col-lg-12">
            <div class="card border-success">
                <div class="card-header">
                    <strong>Create permission</strong>
                    <small> Form</small>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($permission, [
                                        'method' => 'POST',
                                        'route'  => 'backend.permissions.store',
                                        'files'  => TRUE,
                                        'id'     => 'user-form'
                                    ]) !!}
                    @csrf
                    @include('permissions.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection


