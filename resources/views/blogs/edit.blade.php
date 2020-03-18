
@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('partials.messages')
            </div>
            <!-- /.col-md-8 -->
        </div>
        <div class="row justify-content-center vh-100">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h2>Edit blog</h2>
                            <div class="ml-auto">
                                <a href="{{route('backend.blogs.index')}}" class="btn btn-success">
                                    <i class="fa fa-arrow-left"></i> Back To all blogs
                                </a>
                            </div><!-- /.ml-auto -->
                        </div>
                        <!-- /.d-flex align-items-center -->
                    </div>

                    <div class="card-body">
                        {!! Form::model($blog, [
                      'method' => 'PUT',
                      'route'  => ['backend.blogs.update', $blog->slug],
                      'files'  => TRUE,


                  ]) !!}

                        @include('blogs.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
