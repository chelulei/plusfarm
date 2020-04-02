@extends('layouts.main')
@section('title', 'Plusfarm | permissions index')
@section('content')
    <div class="breadcrumbs">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('backend.permissions.create') }}">
                            <button class="btn btn-sm btn-outline-success">
                                <i class="fa fa-plus-circle"></i>Add Permissions</button></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="content mt-3">
        <div class="row">
            <div class="col-sm-12">
    @include('partials.messages')

    @if(! $permissions->count())
        <div class="alert alert-danger m-2">
            No Records
        </div>
        <!-- /.alert alert-danger -->
    @else
        <div class="card">
            <div class="card-header bg-success">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="zmdi zmdi-format-align-justify"></i>
                            LIST OF PERMISSIONS</a>
                    </li>
                </ul>
            </div>
            <div class="card-body P-4">

                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    @include('permissions.table')
                </div>
                @endif

            </div>
          </div>
            </div> <!-- /.12 -->
        </div>
        <!-- /.row -->
    </div>
@endsection
@include('permissions.script')
