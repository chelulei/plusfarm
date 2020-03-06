
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
	        <button type="submit" class="btn btn-primary">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>




