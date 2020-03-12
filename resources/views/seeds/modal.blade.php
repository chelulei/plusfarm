<div class="modal fade" id="seedModal" tabindex="" role="dialog" aria-labelledby="seedModalLabel" data-backdrop="static">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
        <h4 class="modal-title" id="seedModalLabel">Varieties From</h4>
      </div>
       {!! Form::open([
                        'method' => 'POST',
                        'route'  => 'backend.seeds.store'
                    ]) !!}

           @csrf
            <div class="modal-body">
                @include('seeds.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-bl" data-dismiss="modal"><i class="fa fa-close"></i> CLOSE</button>
                    <button type="submit" name="update" class="btn btn-success">
                        <i class="fa fa-save"></i> SAVE</button>

            </div>
             {!! Form::close() !!}

    </div>
  </div>
</div>

<div class="modal fade" id="edit-pre" tabindex="" role="dialog" aria-labelledby="edit-preLabel" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"  id="edit-preLabel">Update Varieties</h4>
      </div>
      <form action="{{route('backend.seeds.update','test')}}" method="POST">
              @method('put')
      	    @csrf
	      <div class="modal-body">
	      		<input type="hidden" name="prep_id" id="prep_id">
				@include('seeds.edit_form')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	        <button type="submit" class="btn btn-primary">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>