@extends('layouts.main')
@section('content')
   <div class="row justify-content-center vh-100">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                             <h3> {{$blog->title}}</h3>
                            <div class="ml-auto">
                                <a href="{{route('backend.blogs.index')}}" class="btn btn-success">
                                    <i class="fa fa-arrow-left"></i> Back To all blogs
                                </a>
                            </div><!-- /.ml-auto -->
                        </div>
                        <!-- /.d-flex align-items-center -->
                    </div>

                    <div class="card-body">
                        {!! $blog->body_html !!}

                    </div>
                </div>
            </div>
        </div>
@endsection