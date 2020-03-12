@extends('layouts.main')

@section('title', 'Plusfarm | users index')

@section('content')
    <div class="breadcrumbs">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                     @role('farmer')
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('home') }}">
                            <button class="btn btn-success">
                                <i class="fa fa-arrow-left"></i>BACK</button></a>
                    </li>
                       @endrole
                  @role('superadmin')
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('admin') }}">
                            <button class="btn btn-success">
                                <i class="fa fa-arrow-left"></i>BACK</button></a>
                    </li>
                     @endrole
                </ol>
            </nav>
        </div>
    </div>
    <div class="content mt-3">
        @include('partials.messages')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bg-success pl-3 p-2 mb-2 text-white">
                                   Change Password
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                            <div class="col-md-9 offset-3">
                                <form class="form-horizontal" method="POST" action="{{ route('profile.update', ['user' => $user]) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}

                                    <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                        <label for="new-password" class="col-md-4 control-label">Current Password</label>

                                        <div class="col-md-6">
                                            <input id="current-password" type="password" class="form-control" name="current-password" required>

                                            @if ($errors->has('current-password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                        <label for="new-password" class="col-md-4 control-label">New Password</label>

                                        <div class="col-md-6">
                                            <input id="new-password" type="password" class="form-control" name="new-password" required>

                                            @if ($errors->has('new-password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                                        <div class="col-md-6">
                                            <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-success">
                                                Change Password
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.div -->

                    </div>
                </div>
            </div>

        </div>
    </div><!-- .content -->
@endsection
