@extends('layouts.main')

@section('title', 'Plusfarm | Edit user')

@section('content')
    <div class="breadcrumbs">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{route('backend.farmers.index')}}">
                            <button class="btn btn-sm btn-success">
                                <i class="fa fa-arrow-left"></i>ALL Farmers</button></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
            <div class="card card border-success">
                <div class="card-header">
                    <strong>Edit Form</strong>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($user, [
                                     'method' => 'PUT',
                                     'files'  => TRUE,
                                     'route'  => ['backend.farmers.update', $user->id],

                                 ]) !!}


                    @include('farmers.form2')

                    {!! Form::close() !!}
                </div>
            </div>

    <br><br>
    <!-- /.row -->
@endsection
@include('farmers.script')



