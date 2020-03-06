@extends('layouts.main')

@section('title', 'Plusfarm Clinic | Users index')

@section('content')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" id="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('backend.users.create') }}"><button class="btn btn-primary">
                            <i class="zmdi zmdi-plus"></i>Add User</button></a>
                </li>
            </ol>
        </nav>
        @include('partials.messages')
            @if(! $users->count())
                <div class="alert alert-danger m-2">
                    No Records
                </div>
                <!-- /.alert alert-danger -->
            @else

                <div class="card">
                    <div class="card-header bg-primary">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <i class="zmdi zmdi-format-align-justify"></i>
                                    LIST OF USERS
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-block p-4">
                        <div class="tab-content">
                        <div class="table-responsive m-b-40">
                            @include('users.table')
                        </div>

                        </div>
                     @endif

                    </div>

                </div>
@endsection
<!-- Modal -->
@include('users.script')


