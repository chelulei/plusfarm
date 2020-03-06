@extends('layouts.backend.main')

@section('title', 'Plusfarm Clinic | Users index')

@section('content')
    <div class="breadcrumbs">
            <div class="page-header float-left pl-2">
                {{-- <div class="page-title">
                    <h1 class="bread-head">
                        @role('secretary')
                    <a href="{{route('home')}}">
                       <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                        @endrole
                        @role('doctor')
                        <a href="{{route('doctor')}}">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                        @endrole
                        @role('dentists')
                        <a href="{{route('dentists')}}">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                        @endrole
                    </h1>
                </div> --}}
            </div>
            <div class="float-right pr-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" id="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="{{ route('backend.users.create') }}"><button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>Add User</button></a>
                            </li>
                        </ol>
                    </nav>
            </div>
    </div>
    <div class="content mt-3">
        <div class="row">
        <div class="col-sm-12">
        @include('backend_partials.messages')
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
                            @include('backend.users.table')
                        </div>

                        </div>
                     @endif

                    </div>

                </div>

         </div> <!-- /.12 -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.content mt-3 -->
@endsection
<!-- Modal -->
@include('backend.users.script')


