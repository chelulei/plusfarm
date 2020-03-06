@extends('layouts.main')

@section('title', 'Plus Farm | Add new farm')
@section('content')
 <div class="card card">
            <div class="card-header">
                <strong>Crops Form</strong>
            </div>
            <div class="card-body card-block">
               {!! Form::model($farm, [
                    'method' => 'POST',
                    'route'  => 'backend.farms.store',
                    'files'  => TRUE

                ]) !!}

                @include('farm.form')

                {!! Form::close() !!}
            </div>
        </div>

@endsection

@include('produce.script')


