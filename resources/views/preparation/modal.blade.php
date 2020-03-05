
<!-- Edit Land preparations-->
<div class="modal fade" id="edit_prep" tabindex="-1" role="dialog" aria-labelledby="edit_prepLabel" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"  id="edit_prepLabel">Update Activities</h4>
      </div>
      <form action="{{route('backend.preparations.update','test')}}" method="POST">
              @method('put')
      	    @csrf
	      <div class="modal-body">
	      		<input type="hidden" name="prep_id" id="prep_id" value="">
				@include('preparation.edit_form')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	        <button type="submit" class="btn btn-primary">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>
