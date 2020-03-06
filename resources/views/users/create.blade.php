@extends('layouts.backend.main')

@section('title', 'Clinic | Add new user')

@section('content')
    <div class="breadcrumbs">
        {{-- <div class="page-header float-left pl-2">
            <div class="page-title">
                <h1 class="bread-head">
                    @role('secretary')
                    <a href="{{route('home')}}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                    @endrole
                    @role('doctor')
                    <a href="{{route('doctor')}}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                    @endrole
                    @role('dentists')
                    <a href="{{route('dentists')}}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                    @endrole
                </h1>
            </div>
        </div> --}}
        <div class="float-right pr-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{route('backend.users.index')}}"><button class="au-btn au-btn-icon au-btn--blue">
                                <i class="fa fa-arrow-left"></i>ALL USERS</button></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mb-10">
        <div class="col-lg-12">
            <div class="card card">
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
@include('backend.users.script')


