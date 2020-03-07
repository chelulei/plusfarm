@extends('layouts.main')

@section('title', 'Plusfarm | Add new user')

@section('content')
    <div class="breadcrumbs">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{route('backend.users.index')}}">
                            <button class="btn btn-success">
                                <i class="fa fa-arrow-left"></i>ALL USERS</button></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mb-10">
        <div class="col-lg-12">
            <div class="card card border-success">
                <div class="card-header">
                    <strong>Users Form</strong>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($user, [
                       'method' => 'POST',
                       'files'  => TRUE,
                       'route'  => 'backend.users.store',

                   ]) !!}

                    @include('users.form')

                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- /.row -->
@endsection
@include('users.script')


