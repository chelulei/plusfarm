@extends('layouts.main')

    @section('title', 'Clinic | Edit appointment')

@section('content')
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
