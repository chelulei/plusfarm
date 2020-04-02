@extends('layouts.main')

@section('title', 'Clinic | Edit variety')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item">
                 <a href="{{route('backend.seeds.index')}}">
                            <button class="btn btn-sm btn-success">
                                <i class="fa fa-arrow-left"></i>BACK</button></a>
        </ol>
    </nav>
    <div class="row mb-10">
        <div class="col-lg-12">
            <div class="card border-success">
                <div class="card-header">
                    <strong>Edit prescription</strong>
                    <small> Form</small>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($variety, [

                  'method' => 'PUT',
                  'route'  => ['backend.seeds.update', $variety->id],
                  'files'  => TRUE,

              ]) !!}
                @csrf
                    @include('seeds.edit_form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection


