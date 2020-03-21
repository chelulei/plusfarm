@extends('layouts.main')

@section('title', 'Plusfarm | Show user')

@section('content')

    <div class="breadcrumbs">
        <div class="page-header">
            <div class="page-title">
                <h2 class="bread-head"> <i class="fas fa-tachometer-alt"></i> Dashboard</h2>
            </div>
        </div>
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('backend.users.index') }}"><button class="btn btn-success">
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
                            <div class="col-md-3 col-lg-3 " align="center">
                                <img src="{{ $user->image_url}}" alt="">
                            </div>
                            <!-- /.col-m-3 -->
                            <div class="col-md-4">
                                <br>
                                {!! Form::model($user, [
                                'method' => 'PUT',
                                'files'  => TRUE,
                                'route'  => ['backend.users.update', $user->id],
                                 ]) !!}
                                @csrf
                                {{ Form::hidden('slug', null, ['id' => 'slug']) }}
                                Name: <strong><input class="effect-1"  name="name" type="" value="{{$user->name}}" ></strong><hr>
                                Email: <strong><input class="effect-1" name="email" type="" value="{{$user->email}}" ></strong><hr>

                            </div>
                            <div class="col-md-4">
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

