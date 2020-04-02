
@extends('layouts.main')
@section('title', 'Plus Farm | Add new farm')
@section('content')
<div class="breadcrumbs">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{route('backend.produces.index')}}">
                            <button class="btn btn-success btn-sm ">
                                <i class="fa fa-arrow-left"></i>
                                BACK
                            </button>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
 @include('partials.messages')
 <div class="card">
    <div class="card-header bg-success">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <i class="zmdi zmdi-format-align-justify"></i>
                   FARM DETAILS</a>
            </li>

        </ul>
    </div>
    <div class="card-body p-4">
    <div class="row">
        <div class="table-responsive m-b-40">
            @include('produce.show-table')
        </div>
    </div>
    <!-- /.row -->
    </div>
</div>
@endsection

