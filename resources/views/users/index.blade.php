@extends('layouts.main')

@section('title', 'Plusfarm Clinic | Users index')

@section('content')
<div class="row">
<div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" id="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('backend.users.create') }}">
                        <button class="btn btn-success">
                            <i class="fa fa-plus-circle"></i>Add User</button></a>
                </li>
            </ol>
        </nav>
        @include('partials.messages')
            @if(! $users->count())
                <div class="alert alert-danger m-2">
                    No Records
                </div>
            @else
            <div class="card text-center">
            <div class="card-header bg-success">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">LIST OF USERS</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                @include('users.table')
            </div>
            </div>
 @endif
  </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection
<!-- Modal -->
@include('users.script')


