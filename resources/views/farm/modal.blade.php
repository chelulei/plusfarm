
<!-- Land preparations-->
<div class="modal fade" id="landModal" tabindex="" role="dialog" aria-labelledby="landModalLabel" data-backdrop="static">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="landModalLabel">Land Preparation</h4>
      </div>
       {!! Form::open([
                        'method' => 'POST',
                        'route'  => 'backend.preparations.store'
                    ]) !!}

           @csrf

             	<input type="hidden" name="produce_id" value="{{$produce->id}}">
            <div class="modal-body">
                @include('preparation.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-sm  btn-danger btn-bl" data-dismiss="modal"><i class="fa fa-close"></i> CLOSE</button>
                    <button type="submit"  class="btn btn-sm  btn-success">
                        <i class="fa fa-save"></i> SAVE</button>

            </div>
             {!! Form::close() !!}

    </div>
  </div>
</div>

<!-- Planting-->
<div class="modal fade" id="plantModal" tabindex="" role="dialog" aria-labelledby="plantModalLabel" data-backdrop="static">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="plantModalLabel">Planting</h4>
      </div>
       {!! Form::open([
                        'method' => 'POST',
                        'route'  => 'backend.plantings.store'
                    ]) !!}

           @csrf
             {{ Form::hidden('produce_id',$produce->id) }}
            <div class="modal-body">
           @include('planting.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm  btn-danger btn-bl" data-dismiss="modal"><i class="fa fa-close"></i> CLOSE</button>
                    <button type="submit"  class="btn  btn-sm btn-success">
                        <i class="fa fa-save"></i> SAVE</button>

            </div>
             {!! Form::close() !!}

    </div>
  </div>
</div>
<!-- Land storage-->
<div class="modal fade" id="storageModal" tabindex="" role="dialog" aria-labelledby="storageModalLabel" data-backdrop="static">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="storageModalLabel">Storage</h4>
      </div>
       {!! Form::open([
                        'method' => 'POST',
                        'route'  => 'backend.storages.store'
                    ]) !!}


           @csrf
            {{ Form::hidden('produce_id',$produce->id) }}
            <div class="modal-body">
                @include('storage.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm  btn-danger btn-bl" data-dismiss="modal"><i class="fa fa-close"></i> CLOSE</button>
                    <button type="submit"  class="btn btn-sm  btn-success">
                        <i class="fa fa-save"></i> SAVE</button>

            </div>
             {!! Form::close() !!}

    </div>
  </div>
</div>

<!-- Land harvest-->
<div class="modal fade" id="harvestModal" tabindex="" role="dialog" aria-labelledby="harvestModalLabel" data-backdrop="static">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="harvestModalLabel">Harvesting</h4>
      </div>
       {!! Form::open([
                        'method' => 'POST',
                        'route'  => 'backend.harvestings.store'
                    ]) !!}

           @csrf
            {{ Form::hidden('produce_id',$produce->id) }}
            <div class="modal-body">
                @include('harvesting.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm  btn-danger btn-bl" data-dismiss="modal"><i class="fa fa-close"></i> CLOSE</button>
                    <button type="submit" class="btn btn-sm  btn-success">
                        <i class="fa fa-save"></i> SAVE</button>

            </div>
             {!! Form::close() !!}

    </div>
  </div>
</div>
<div class="modal fade" id="cultivateModal" tabindex="" role="dialog" aria-labelledby="cultivateModalLabel" data-backdrop="static">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="cultivateModalLabel">Harvesting</h4>
      </div>
       {!! Form::open([
                        'method' => 'POST',
                        'route'  => 'backend.cultivations.store'
                    ]) !!}

           @csrf
            {{ Form::hidden('produce_id',$produce->id) }}
            <div class="modal-body">
                @include('cultivation.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm  btn-danger btn-bl" data-dismiss="modal"><i class="fa fa-close"></i> CLOSE</button>
                    <button type="submit"  class="btn btn-sm  btn-success">
                        <i class="fa fa-save"></i> SAVE</button>

            </div>
             {!! Form::close() !!}

    </div>
  </div>
</div>

<div class="modal fade" id="harvestedModal" tabindex="" role="dialog" aria-labelledby="harvestedModalLabel" data-backdrop="static">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="harvestedModalLabel">Harvest</h4>
      </div>
       {!! Form::open([
                        'method' => 'POST',
                        'route'  => 'backend.harvests.store'
                    ]) !!}

           @csrf
            {{ Form::hidden('produce_id',$produce->id) }}
            <div class="modal-body">
                @include('harvests.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm  btn-danger btn-bl" data-dismiss="modal"><i class="fa fa-close"></i> CLOSE</button>
                    <button type="submit" name="update" class="btn btn-sm  btn-success">
                        <i class="fa fa-save"></i> SAVE</button>

            </div>
             {!! Form::close() !!}

    </div>
  </div>
</div>

<!-- Edit  preparations-->
<div class="modal fade" id="edit-pre" tabindex="" role="dialog" aria-labelledby="edit-preLabel" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"  id="edit-preLabel">Update Activities</h4>
      </div>
      <form action="{{route('backend.preparations.update','test')}}" method="POST">
              @method('put')
      	    @csrf
	      <div class="modal-body">
	      		<input type="hidden" name="prep_id" id="prep_id">
				@include('preparation.edit_form')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-sm  btn-danger" data-dismiss="modal">Cancel</button>
	        <button type="submit" class="btn btn-sm  btn-success">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>


<!-- Edit  plnt-->
<div class="modal fade" id="edit-plant" tabindex="" role="dialog" aria-labelledby="edit-plantLabel" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"  id="edit-plantLabel">Update Activities</h4>
      </div>
      <form action="{{route('backend.plantings.update','test')}}" method="POST">
              @method('put')
      	    @csrf
	      <div class="modal-body">
	      		<input type="hidden" name="plant_id" id="plant_id">
				@include('planting.edit_form')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-sm  btn-danger" data-dismiss="modal">Cancel</button>
	        <button type="submit" class="btn btn-sm  btn-success">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit  harvest-->
<div class="modal fade" id="edit-harvest" tabindex="" role="dialog" aria-labelledby="edit-harvestLabel" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"  id="edit-harvestLabel">Update Activities</h4>
      </div>
      <form action="{{route('backend.harvestings.update','test')}}" method="POST">
              @method('put')
      	    @csrf
	      <div class="modal-body">
	      		<input type="hidden" name="harvest_id" id="harvest_id">
				@include('harvesting.edit_form')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-sm  btn-danger" data-dismiss="modal">Cancel</button>
	        <button type="submit" class="btn  btn-sm btn-success">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit  storage-->
<div class="modal fade" id="edit-storage" tabindex="" role="dialog" aria-labelledby="edit-storageLabel" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"  id="edit-storageLabel">Update Activities</h4>
      </div>
      <form action="{{route('backend.harvestings.update','test')}}" method="POST">
              @method('put')
      	    @csrf
	      <div class="modal-body">
	      		<input type="hidden" name="storage_id" id="storage_id">
				@include('storage.edit_form')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-sm  btn-danger" data-dismiss="modal">Cancel</button>
	        <button type="submit" class="btn btn-sm  btn-success">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>


<!-- Edit  cultivation-->
<div class="modal fade" id="edit-cultivate" tabindex="" role="dialog" aria-labelledby="edit-cultivateLabel" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"  id="edit-cultivateLabel">Update Activities</h4>
      </div>
      <form action="{{route('backend.cultivations.update','test')}}" method="POST">
              @method('put')
      	    @csrf
	      <div class="modal-body">
	      		<input type="hidden" name="cultivate_id" id="cultivate_id">
				@include('cultivation.edit_form')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-sm  btn-danger" data-dismiss="modal">Cancel</button>
	        <button type="submit" class="btn btn-sm  btn-success">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>


<!-- Edit  cultivation-->
<div class="modal fade" id="edit-cultivate" tabindex="" role="dialog" aria-labelledby="edit-cultivateLabel" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"  id="edit-cultivateLabel">Update Activities</h4>
      </div>
      <form action="{{route('backend.cultivations.update','test')}}" method="POST">
              @method('put')
      	    @csrf
	      <div class="modal-body">
	      		<input type="hidden" name="cultivate_id" id="cultivate_id">
				@include('cultivation.edit_form')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn  btn-sm btn-danger" data-dismiss="modal">Cancel</button>
	        <button type="submit" class="btn  btn-sm btn-success">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="edit-harvests" tabindex="" role="dialog" aria-labelledby="edit-harvestsLabel" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"  id="edit-harvestsLabel">Update Activities</h4>
      </div>
      <form action="{{route('backend.harvests.update','test')}}" method="POST">
              @method('put')
      	    @csrf
	      <div class="modal-body">
	      		<input type="hidden" name="harv_id" id="harv_id">
				@include('harvests.edit_form')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-sm  btn-danger" data-dismiss="modal">Cancel</button>
	        <button type="submit" class="btn btn-sm  btn-success">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- Delete Preparations-->
<!-- Modal -->
        <div class="modal fade" id="delete" tabindex="" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header  bg-danger ">
          <h5 class="modal-title text-white" id="deleteModalLabel">
            We just want to confirm...
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form action="{{route('backend.preparations.destroy', 'delete')}}" method="post">
            @csrf
            @method('DELETE')
             <input type="hidden" name="this_id" id="val_id" value="">
          <h5 class="text-center">Are you sure you want to delete ... ?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm  btn-success" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-sm  btn-danger">Delete</button>
        </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete plnt-->
<!-- Modal -->
  <div class="modal fade" id="delete2" tabindex="" role="dialog" aria-labelledby="delete2ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header  bg-danger ">
          <h5 class="modal-title text-white" id="delete2ModalLabel">
            We just want to confirm...
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form action="{{route('backend.plantings.destroy', 'delete')}}" method="post">
            @csrf
            @method('DELETE')
             <input type="hidden" name="this_id2" id="val_id2">
          <h5 class="text-center">Are you sure you want to delete ... ?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm  btn-success" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-sm  btn-danger btn-sm ">Delete</button>
        </form>
        </div>
      </div>
    </div> btn-sm btn-sm
  </div>


    <!-- Delete  harvest--->
<!-- Modal -->
        <div class="modal fade" id="delete3" tabindex="" role="dialog" aria-labelledby="delete3ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header  bg-danger ">
          <h5 class="modal-title text-white" id="delete3ModalLabel">
            We just want to confirm...
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form action="{{route('backend.harvestings.destroy', 'delete')}}" method="post">
            @csrf
            @method('DELETE')
             <input type="hidden" name="this_id3" id="val_id3" value="">
          <h5 class="text-center">Are you sure you want to delete ... ?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-sm  btn-success" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-sm btn-sm  btn-danger ">Delete</button>
        </form>
        </div>
      </div>
    </div>
  </div>

      <!-- Delete  storage--->
<!-- Modal -->
        <div class="modal fade" id="delete4" tabindex="" role="dialog" aria-labelledby="delete4ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header  bg-danger ">
          <h5 class="modal-title text-white" id="delete4ModalLabel">
            We just want to confirm...
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form action="{{route('backend.storages.destroy', 'delete')}}" method="post">
            @csrf
            @method('DELETE')
             <input type="hidden" name="this_id4" id="val_id4" value="">
          <h5 class="text-center">Are you sure you want to delete ... ?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
        </div>
      </div>
    </div>
  </div>

        <!-- Delete  cultivation--->
<!-- Modal -->
    <div class="modal fade" id="delete5" tabindex="" role="dialog" aria-labelledby="delete5ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header  bg-danger ">
          <h5 class="modal-title text-white" id="delete5ModalLabel">
            We just want to confirm...
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form action="{{route('backend.cultivations.destroy', 'delete')}}" method="post">
            @csrf
            @method('DELETE')
             <input type="hidden" name="cul_id5" id="val_id5" value="">
          <h5 class="text-center">Are you sure you want to delete ... ?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
        </div>
      </div>
    </div>
  </div>
