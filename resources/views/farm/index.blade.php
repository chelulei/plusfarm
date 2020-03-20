@extends('layouts.main')
@section('title', 'PlusFarm | farm index')
@section('content')
 <a href="{{ route('backend.farms.create') }}">
        <button  type="button" class="btn btn-success">
    <i class="fa fa-plus"></i>Add Farm</button>
       </a>
   @include('partials.messages')
    @if(! $farms->count())
        <div class="alert alert-danger m-2">
            No Records
        </div>
        <!-- /.alert alert-danger -->
     @else
     <div class="card mt-4">
            <div class="card-header bg-success">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">LIST OF FARMS</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                   @include('farm.table')
                </div>
                @endif
             </div>
         </div>
     @endsection
     @include('farm.script')
@section('script')
 <script type="text/javascript">
$(document).ready(function () {

 $('#deletef').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var val_id6 = button.data('valid6');
        var modal = $(this);
        modal.find('.modal-body #val_id6').val(val_id6);
    })
 });
   </script>

    @endsection

@section('modal')
    <!-- Delete  farm--->
  <div class="modal fade" id="deletef" tabindex="" role="dialog" aria-labelledby="deletefModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header  bg-danger ">
          <h5 class="modal-title text-white" id="deletefModalLabel">
            We just want to confirm...
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form action="{{route('backend.farms.destroy', 'delete')}}" method="post">
            @csrf
            @method('DELETE')
             <input type="hidden" name="val_id6" id="val_id6" value="">
          <h5 class="text-center">Are you sure you want to delete ... ?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  @endsection