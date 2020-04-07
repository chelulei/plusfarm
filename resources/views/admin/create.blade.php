@extends('layouts.main')
@section('title', 'Plus Farm | Add new farm')
@section('content')
 <div class="breadcrumbs">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="#">
                            <button class="btn btn-success btn-sm">
                                <i class="fa fa-arrow-left"></i>BACK</button></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
 @include('partials.messages')
 <div class="card card  border-success">
            <div class="card-header">
                <strong>Farm Form</strong>
            </div>
            <div class="card-body card-block">
               {!! Form::model($farm, [
                    'method' => 'POST',
                    'route'  => 'admin.store',
                    'files'  => TRUE

                ]) !!}

                @include('admin.form')

                {!! Form::close() !!}
            </div>
        </div>

@endsection

@include('admin.script')


