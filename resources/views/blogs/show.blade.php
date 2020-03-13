@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-100">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- /.card-body -->
                        <div class="card-title">
                            <div class="d-flex align-items-center">
                                <h3> {{$blog->title}}</h3>
                                <div class="ml-auto">
                                    <a href="{{url()->previous()}}">
                        <button class="btn btn-success">
                        <i class="fa fa-arrow-left"></i>BACK</button>
                        </a>
                                </div><!-- /.ml-auto -->
                            </div>
                            <!-- /.d-flex align-items-center -->
                        </div>
                        <hr>
                        <div class="media">
                        <!-- /.d-flex flex-column vote-controls -->
                            <div class="media-body">
                                {!! $blog->body_html !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="mt-150"></div>
@endsection