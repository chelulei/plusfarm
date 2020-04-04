@extends('layouts.main')
@section('title', 'Plusfarm | Show user')
@section('style')
    <style>
   input[type="text"]:disabled{background-color:white; font-weight: bold;}
    </style>
@endsection
@section('content')
    <div class="breadcrumbs">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('backend.users.index') }}"><button class="btn btn-sm btn-success">
                                <i class="fa fa-arrow-left"></i>BACK</button></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
<div class="card">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-success p-2 mb-2 text-white text-center">
                    User Details
            </div>
        </div>
        <!-- /.col-md-12 -->
        <div class="col-md-2">
            <img src="{{ $user->image_url}}" alt="{{$user->name}}"
                width="150" height="150" class="img-fluid m-2">
        </div>
        <!-- /.col-m-3 -->
        <div class="col-md-3">
            <br>
            {!! Form::model($user, [
            'method' => 'PUT',
            'files'  => TRUE,
            'route'  => ['backend.users.update', $user->id],
                ]) !!}
            @csrf
            {{ Form::hidden('slug', null, ['id' => 'slug']) }}
            Name: <strong><input type='text' class="effect-1"  name="name" type="" value="{{$user->name}}" disabled style="border: 0 "></strong><hr>
            Email: <strong><input type='text' class="effect-1" name="email" type="" value="{{$user->email}}" disabled style="border: 0 ">
            </strong>
            <hr>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <strong>Role:</strong>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

