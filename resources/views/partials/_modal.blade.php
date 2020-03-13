
<div id="DeleteModal" class="modal fade text-danger" role="dialog">
   <div class="modal-dialog modal-md">
     <!-- Modal content-->
     <form action="" id="deleteForm" method="post">
         <div class="modal-content">
             <div class="modal-header bg-danger">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title text-center">DELETE CONFIRMATION</h4>
             </div>
             <div class="modal-body">
                 @csrf
                 @method('DELETE')
                 <p class="text-center">Are You Sure Want To Delete ?</p>
             </div>
             <div class="modal-footer">
                 <center>
                     <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                     <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
                 </center>
             </div>
         </div>
     </form>
   </div>
  </div>

<!-- Edit User -->
<!-- Modal -->
<div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="editLabel" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"  id="editLabel">Update Details</h4>
      </div>

      <form action="{{route('backend.account.update','test')}}" method="post">
              @method('put')
      	    @csrf
	      <div class="modal-body">
	      		<input type="hidden" name="user_id" id="us_id" value="">
				@include('account.form')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	        <button type="submit" class="btn btn-success">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modal" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD NEW</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('backend.blogs.store')}}">
                @csrf
                <div class="modal-body">
                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                        {!! Form::text('title', null, ['class' => 'form-control',
                        'placeholder' => 'Enter Title', 'required'=>'']) !!}

                        @if($errors->has('title'))
                            <span class="help-block">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                        {!! Form::label('body','Body') !!}
                        {!! Form::textarea('body', null, ['class' => 'form-control my-editor','rows' => 5, 'cols' =>5]) !!}
                        @if($errors->has('body'))
                            <span class="help-block">{{ $errors->first('body') }}</span>
                        @endif
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>Close</button>
                    <button type="submit"   class="btn btn-primary"><i class="fa fa-save"></i>Save </button>
                </div>
            </form>
        </div>
    </div>
</div>


