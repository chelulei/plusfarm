@extends('layouts.main')
@section('title', 'plusfarm | account index')
@section('css')
@endsection
@section('content')
 <div class="breadcrumbs">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                     @role('farmer')
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('home') }}">
                            <button class="btn btn-sm btn-success">
                                <i class="fa fa-arrow-left"></i>BACK</button></a>
                    </li>
                       @endrole
                  @role('superadmin')
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('admin') }}">
                            <button class="btn btn-sm btn-success">
                                <i class="fa fa-arrow-left"></i>BACK</button></a>
                    </li>
                     @endrole
                </ol>
            </nav>
        </div>
    </div>
  @include('partials.messages')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-success p-2 mb-2 text-white text-center">
                    Profile
                </div>
            </div>
            <!-- /.col-md-12 -->
            <div class="col-md-3 col-lg-3 " align="center">
                <img src="{{ $user->image_url}}" alt="" class="img-thumbnail mt-4"   width="150" height="150" >
            </div>
            <!-- /.col-m-3 -->
            <div class="col-md-4">
                <br>
                Username: <strong>{{$user->username}}</strong><hr>
                Name: <strong>{{$user->name}}</strong><hr>
                Email: <strong>{{$user->email}}</strong><hr>
            </div>
            <div class="col-md-4">

            </div>
        </div>
        <br>
        <!-- /.div -->
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-edit"></i>
        change Image
        </button>

        <div class="float-right">
              <button class="btn btn-sm btn-outline-success" data-myuname="{{$user->username}}"
    data-myname="{{$user->name}}"  data-myemail="{{$user->email}}"  data-userid={{$user->id}} data-toggle="modal" data-target="#edit_user">
      <i class="fa fa-edit"></i>
    EDIT</button>
    </div>
        </div>
    </div>

@endsection
@include('account.script')

@section('modal')
<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{url('/uploadfile')}}" enctype="multipart/form-data">
    @csrf
      <div class="modal-body">
          <input type="hidden" name="user_id"  value="{{$user->id}}">
    <div class="form-group ml-5">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new" style="width: 200px; height: 150px;">
                <img src="{{$user->image_url}}" alt="" class="mb-4">
            </div>
            <div class="fileinput-preview fileinput-exists" style="max-width: 200px; max-height: 150px;"></div>
            <div>
                <span class="btn btn-outline-default btn-file btn-outline-success mt-3">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    {!! Form::file('image') !!}
                </span>
                <a href="#" class="btn btn-default fileinput-exists btn-outline-danger mt-3" data-dismiss="fileinput">Remove</a>
            </div>
        </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-sm btn-success">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection
