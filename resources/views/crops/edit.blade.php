@extends('layouts.main')

@section('title', 'PlusFarm | Add edit crops')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
             <a href="{{route('backend.plants.index')}}">
        <button class="btn btn-sm btn-success">
            <i class="fa fa-arrow-left"></i>BACK</button></a>
        </ol>
    </nav>
    <div class="row">
        @include('partials.messages')
        <div class="col-lg-12">
            <div class="card border-success">
                <div class="card-header">
                    <strong>Edit Produce</strong>
                    <small> Form</small>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($plant, [

                  'method' => 'PUT',
                  'route'  => ['backend.plants.update', $plant->id],
                  'files'  => TRUE,

              ]) !!}

                    @include('crops.form2')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection


