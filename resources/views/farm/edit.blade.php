@extends('layouts.main')

    @section('title', 'Clinic | Edit appointment')
@section('content')
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{route('backend.farms.index')}}">
                            <button class="btn btn-success btn-sm ">
                                <i class="fa fa-arrow-left"></i>BACK</button></a>
                    </li>
                </ol>
            </nav>
        </div>
 @include('partials.messages')
 <div class="card card border-success">
            <div class="card-header">
                <strong>Farm Form</strong>
            </div>
            <div class="card-body card-block">
     {!! Form::model($farm, [

                  'method' => 'PUT',
                  'route'  => ['backend.farms.update', $farm->id],
                  'files'  => TRUE
              ]) !!}
                    @include('farm.form')
                    {!! Form::close() !!}
                    </div>
        </div>
@endsection
@include('farm.script')
