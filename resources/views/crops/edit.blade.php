@extends('layouts.main')

@section('title', 'PlusFarm | Add edit crops')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a class="text-success" href="/home">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a class="text-success"  href="{{ route('backend.plants.index') }}">
                    All Produces</a>
                </li>
        </ol>
    </nav>
    <div class="row">
        @include('partials.messages')
        <div class="col-lg-12">
            <div class="card">
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


