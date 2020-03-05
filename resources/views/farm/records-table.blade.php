<div class="table-responsive-sm">
    <table class="table table-bordered">
        <thead>
        <tr>
        <th>FarmName</th>
         <th>Size (ha)</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$farm->farm_name}}</td>
                <td>{{$farm->size}}</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <h4 class="text-primary">Land Preparation</h4>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
<div class="table-responsive-sm">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Task</th>
            <th>Cost</th>
            <th>Details</th>
            <th>Remarks</th>
             <th>Settings</th>
        </tr>
        </thead>
        <tbody>
         @foreach($preparations as $preparation)
        <tr>
            <td>{{$preparation->task}}</td>
            <td>{{$preparation->cost}}</td>
            <td>{{$preparation->details}}</td>
            <td>{{$preparation->remarks}}</td>
            <td>
                 <button type="button" class="btn btn-outline-primary" data-mytask="{{$preparation->task}}"
                        data-mycost="{{$preparation->cost}}"  data-mydetails="{{$preparation->details}}"
                        data-prepid="{{$preparation->id}}" data-myremarks="{{$preparation->remarks}}"  data-toggle="modal" data-target="#edit_prep">
                         <i class="fa fa-edit"></i>
                        EDIT</button>
                         <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$preparation->id}})"
              data-target="#DeleteModal" class="btn   btn-md  btn-outline-danger">
              DELETE
              <i class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="Delete"></i>
              </a>
                       </div>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h4 class="text-primary">Planting</h4>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
<div class="table-responsive-sm">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Task</th>
            <th>Cost</th>
            <th>Details</th>
            <th>Remarks</th>
            <th>Settings</th>
        </tr>
        </thead>
        <tbody id="plantings-list" name="plantings-list">
         @foreach($plantings as $planting)
        <tr>
            <td>{{$planting->task}}</td>
            <td>{{$planting->cost}}</td>
            <td>{{$planting->details}}</td>
            <td>{{$planting->remarks}}</td>
            <td>
 <a href="#!" class="btn btn-md btn-danger delete"
 data-url="{{ route('backend.plantings.destroy', $planting->id) }}" data-toggle="modal"  data-target="#exampleModal">
    DELETE
    <i class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="Delete"></i>
              </a>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
<h4 class="text-primary">Harvesting</h4>
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
<div class="table-responsive-sm">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Task</th>
            <th>Cost</th>
            <th>Details</th>
            <th>Remarks</th>
        </tr>
        </thead>
        <tbody>
         @foreach($harvestings as $harvesting)
        <tr>
            <td>{{$harvesting->task}}</td>
            <td>{{$harvesting->cost}}</td>
            <td>{{$harvesting->details}}</td>
            <td>{{$harvesting->remarks}}</td>

        </tr>
            @endforeach
        </tbody>
    </table>
</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
<h4 class="text-primary">Storage</h4>
        </button>
      </h2>
    </div>

    <div id="collapseFour" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
<div class="table-responsive-sm">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Task</th>
            <th>Cost</th>
            <th>Details</th>
            <th>Remarks</th>
        </tr>
        </thead>
        <tbody>
         @foreach($storages as $storage)
        <tr>
            <td>{{$storage->task}}</td>
            <td>{{$storage->cost}}</td>
            <td>{{$storage->details}}</td>
            <td>{{$storage->remarks}}</td>

        </tr>
            @endforeach
        </tbody>
    </table>
</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
<h4 class="text-primary">Other Activities</h4>
        </button>
      </h2>
    </div>

    <div id="collapseFive" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
          @if(! $activities->count())
        <div class="alert alert-danger m-2">
            No Records
        </div>
        <!-- /.alert alert-danger -->
     @else
<div class="table-responsive-sm">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Task</th>
            <th>Cost</th>
            <th>Details</th>
            <th>Remarks</th>
        </tr>
        </thead>
        <tbody>
         @foreach($activities as $activitie)
        <tr>
            <td>{{$activities->task}}</td>
            <td>{{$activities->cost}}</td>
            <td>{{$activities->details}}</td>
            <td>{{$activities->remarks}}</td>

        </tr>
            @endforeach
        </tbody>
    </table>
</div>
   @endif
      </div>
    </div>
  </div>
</div>

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
 @include('preparation.script')



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header  bg-danger ">
          <h5 class="modal-title text-white" id="exampleModalLabel">
            We just want to confirm...
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" id="deleteFormClient">
            @csrf
            @method('DELETE')
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
   @include('planting.script')
