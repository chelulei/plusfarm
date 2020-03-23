@extends('layouts.main')
@section('content')
    <header class="header header-inverse pt-80">
        <div class="container">
            <div class="row mt-2">
                <div class="col-md-12">
                   @include('partials.messages')
                </div>
                <!-- /.col-md-8 -->
            </div>
        </div>
    </header>
    <!-- Start post-content Area -->
    <section class="post-content-area" style="background-color: #EBF2F7;">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                </div>
                <!-- End of side bar left -->
                <div class="col-md-10 posts-list mt-2">
                  @role('superadmin')
                    <div class="single-post row card p-5">
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Whats in your mind?</h5>
                                <p class="card-text">Write something.</p>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal">
                                        <i class="fa fa-plus"></i>
                                      Create a blog
                                    </button>
                            </div>
                        </div>
                    </div>
                  @endrole
                    @if (! $blogs->count())
                        <div class="alert alert-info">
                            <strong>No record found</strong>
                        </div>
                    @else
                        @foreach($blogs as $blog)
                            <div class="single-post row card pb-4">
                                <div class="col-lg-12 col-md-12">
                                    <br>
                                    <a class="posts-title" href="{{$blog->url}}"><h5>{{$blog->title}}</h5></a>
                                    <p class="excert">
                                        {!!$blog->excerpt!!}
                                    </p>
                                    @role('superadmin')
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.blogs.destroy', $blog->slug, 'class' =>'form-delete']]) !!}
                                    @csrf
                                        <a href="{{route('backend.blogs.edit', $blog->slug)}}"
                                            class="btn btn-sm btn-outline-success">Edit</a>
                                        <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="fa fa-times"></i>
                                            Delete
                                        </button>
                                    {!! Form::close() !!}
                                   @endrole
                                    <p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-clock-o"></i> {{$blog->date}}</li>
                                    </ul>
                                    </p>
                                    <a href="{{$blog->url}}" class="primary-btn">Read More</a>
                                </div>
                            </div>
                        @endforeach
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                {{ $blogs->appends(request()->only(['term']))->links()}}
                            </ul>
                        </nav>
                    @endif
                </div>
                <!-- Start of side bar left -->
                <div class="col-md-1 sidebar-widgets mt-2">
                    {{-- <div class="widget-wrap">

                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- End post-content Area -->
@endsection


