
<!-- Land preparations-->
<div class="modal fade" id="landModal-{{ $farm->id }}" tabindex="-1" role="dialog" aria-labelledby="landModalLabel" data-backdrop="static">
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
             {{ Form::hidden('farm_id',$farm->id) }}
            <div class="modal-body">
                @include('preparation.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-bl" data-dismiss="modal"><i class="fa fa-close"></i> CLOSE</button>
                    <button type="submit" name="update" class="btn btn-info">
                        <i class="fa fa-save"></i> SAVE</button>

            </div>
             {!! Form::close() !!}

    </div>
  </div>
</div>

<!-- Planting-->
<div class="modal fade" id="plantModal-{{$farm->id}}" tabindex="-1" role="dialog" aria-labelledby="plantModalLabel" data-backdrop="static">
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
             {{ Form::hidden('farm_id',$farm->id) }}
            <div class="modal-body">
                @include('planting.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-bl" data-dismiss="modal"><i class="fa fa-close"></i> CLOSE</button>
                    <button type="submit" name="update" class="btn btn-info">
                        <i class="fa fa-save"></i> SAVE</button>

            </div>
             {!! Form::close() !!}

    </div>
  </div>
</div>
<!-- Land storage-->
<div class="modal fade" id="storageModal-{{ $farm->id }}" tabindex="-1" role="dialog" aria-labelledby="storageModalLabel" data-backdrop="static">
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
            {{ Form::hidden('farm_id',$farm->id) }}
            <div class="modal-body">
                @include('storage.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-bl" data-dismiss="modal"><i class="fa fa-close"></i> CLOSE</button>
                    <button type="submit" name="update" class="btn btn-info">
                        <i class="fa fa-save"></i> SAVE</button>

            </div>
             {!! Form::close() !!}

    </div>
  </div>
</div>

<!-- Land harvest-->
<div class="modal fade" id="harvestModal-{{ $farm->id }}" tabindex="-1" role="dialog" aria-labelledby="harvestModalLabel" data-backdrop="static">
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
            {{ Form::hidden('farm_id',$farm->id) }}
            <div class="modal-body">
                @include('harvesting.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-bl" data-dismiss="modal"><i class="fa fa-close"></i> CLOSE</button>
                    <button type="submit" name="update" class="btn btn-info">
                        <i class="fa fa-save"></i> SAVE</button>

            </div>
             {!! Form::close() !!}

    </div>
  </div>
</div>

<!-- Edit Land preparations-->
<div class="modal fade" id="edit_prep" tabindex="-1" role="dialog" aria-labelledby="editLabel" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"  id="editLabel">Update Activities</h4>
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