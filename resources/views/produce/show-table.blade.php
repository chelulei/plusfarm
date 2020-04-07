@section('style')
<style>
.nav-tabs .nav-link:not(.active) {
    border-color: transparent !important;
}
</style>
@endsection
<div class="table-responsive-sm">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Farm Name</th>
            <th>Size (Ha)</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$produce->farm->farm_name}}</td>
               <td>{{$produce->size}} (Ha)</td>
            </tr>
        </tbody>
    </table>
</div>
<h4 class="text-center  text-success mt-5">ACTIVITIES</h4>
<hr>
<ul class="nav nav-tabs  border-0" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active border-success border-bottom-0" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Land Preparation</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  border border-success border-bottom-0" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Planting</a>
  </li>
   <li class="nav-item">
    <a class="nav-link   borderborder-success border-bottom-0" id="store-tab" data-toggle="tab" href="#cultivate" role="tab" aria-controls="store" aria-selected="false">Cultivation</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  border border-success border-bottom-0" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Harvesting</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  border border-success border-bottom-0" id="store-tab" data-toggle="tab" href="#store" role="tab" aria-controls="store" aria-selected="false">Storage</a>
  </li>
   <li class="nav-item">
    <a class="nav-link  border border-success border-bottom-0" id="harvested-tab" data-toggle="tab" href="#harvested" role="tab" aria-controls="harvested" aria-selected="false">Produce harvested </a>
  </li>
   <li class="nav-item">
    <a class="nav-link  border border-success border-bottom-0" id="store-tab" data-toggle="tab" href="#complete" role="tab" aria-controls="store" aria-selected="false">Task Completion</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active  border border-success" id="home" role="tabpanel" aria-labelledby="home-tab">
     <button type="button" class="btn btn-sm  btn-success float-right m-4"
                           data-toggle="modal" data-target="#landModal">
                         <i class="fa fa-plus-circle"></i>
                     Add Activity
                    </button>
        <table class="table table-bordered mt-4">
        <thead>
        <tr>
            <th>Task</th>
            <th>Cost</th>
            <th>Details</th>
            <th>Remarks</th>
             <th>Actions</th>
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
              <div class="btn-group" role="group" aria-label="Basic example">
                 <button type="button" class="btn btn-sm  btn-outline-success"
                        data-mytask="{{$preparation->task}}"
                        data-myherb="{{$preparation->herb_types}}"
                        data-mycost="{{$preparation->cost}}"
                         data-mydetails="{{$preparation->details}}"
                        data-prepid="{{$preparation->id}}"
                        data-myremarks="{{$preparation->remarks}}"
                        data-toggle="modal" data-target="#edit-pre">
                         <i class="fa fa-edit"></i>
                       </button>
 <button tooltip="Delete&nbsp;Activity" data-valid="{{$preparation->id}}"
     data-toggle="modal"
data-target="#delete" class="btn btn-sm  btn btn-outline-danger">

<i class="fa fa-trash"></i>
 </button></div>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>

  </div>
  <div class="tab-pane fade border border-success" id="profile" role="tabpanel" aria-labelledby="profile-tab">
     <button type="button" class="btn btn-sm  btn-success float-right m-4"
                        data-prepid="{{$produce->id}}"   data-toggle="modal" data-target="#plantModal">
                         <i class="fa fa-plus-circle"></i>
                     Add Activity
                    </button>
    <table class="table table-bordered mt-4">
        <thead>
        <tr>
            <th>Task</th>
            <th>Cost</th>
            <th>Details</th>
            <th>Remarks</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
         @foreach($plantings as $planting)
        <tr>
            <td>{{$planting->task}}</td>
            <td>{{$planting->cost}}</td>
            <td>{{$planting->details}}</td>
            <td>{{$planting->remarks}}</td>
            <td>
             <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-sm  btn-outline-success"
                        data-ytask="{{$planting->task}}"
                        data-ycost="{{$planting->cost}}"
                        data-ydetails="{{$planting->details}}"
                        data-plantpid="{{$planting->id}}"
                        data-yremarks="{{$planting->remarks}}"
                        data-toggle="modal" data-target="#edit-plant">
                         <i class="fa fa-edit"></i>
                       </button>

        <button tooltip="Delete&nbsp;Activity" data-valid2="{{$planting->id}}"
     data-toggle="modal" data-target="#delete2" class="btn btn-sm  btn btn-outline-danger">

<i class="fa fa-trash"></i>
 </button></div>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
  </div>
  <div class="tab-pane fade border  border-success" id="contact" role="tabpanel" aria-labelledby="contact-tab">
<button type="button" class="btn btn-sm  btn-success float-right m-4"
                        data-prepid="{{$produce->id}}"   data-toggle="modal" data-target="#harvestModal">
                         <i class="fa fa-plus-circle"></i>
                     Add Activity
                    </button>
     <table class="table table-bordered mt-4">
        <thead>
        <tr>
            <th>Task</th>
            <th>Cost</th>
            <th>Details</th>
            <th>Remarks</th>
             <th>Actions</th>
        </tr>
        </thead>
        <tbody>
         @foreach($harvestings as $harvesting)
        <tr>
            <td>{{$harvesting->task}}</td>
            <td>{{$harvesting->cost}}</td>
            <td>{{$harvesting->details}}</td>
            <td>{{$harvesting->remarks}}</td>
             <td>
                <div class="btn-group" role="group" aria-label="Basic example">
<button type="button" class="btn btn-sm  btn-outline-success"
                        data-htask="{{$harvesting->task}}"
                        data-hcost="{{$harvesting->cost}}"
                         data-hdetails="{{$harvesting->details}}"
                        data-harvestpid="{{$harvesting->id}}"
                        data-hremarks="{{$harvesting->remarks}}"
                        data-toggle="modal" data-target="#edit-harvest">
                         <i class="fa fa-edit"></i>
                       </button>
                         <button tooltip="Delete&nbsp;Activity"
                         data-valid3="{{$harvesting->id}}"
     data-toggle="modal" data-target="#delete3" class="btn btn-sm  btn btn-outline-danger">

<i class="fa fa-trash"></i>
 </button></div>

              </td>
        </tr>
            @endforeach
        </tbody>
    </table>
  </div>
   <div class="tab-pane fade border border-success" id="store" role="tabpanel" aria-labelledby="store-tab">
       <button type="button" class="btn btn-sm  btn-success float-right m-4"
                        data-prepid="{{$produce->id}}"   data-toggle="modal" data-target="#storageModal">
                         <i class="fa fa-plus-circle"></i>
                     Add Activity
                    </button>
        <table class="table table-bordered mt-4">
        <thead>
        <tr>
            <th>Task</th>
            <th>Cost</th>
            <th>Details</th>
            <th>Remarks</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
         @foreach($storages as $storage)
        <tr>
            <td>{{$storage->task}}</td>
            <td>{{$storage->cost}}</td>
            <td>{{$storage->details}}</td>
            <td>{{$storage->remarks}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-sm  btn-outline-success"
                        data-stask="{{$storage->task}}"
                        data-scost="{{$storage->cost}}"
                        data-sdetails="{{$storage->details}}"
                        data-storageid="{{$storage->id}}"
                        data-sremarks="{{$storage->remarks}}"
                        data-toggle="modal" data-target="#edit-storage">
                         <i class="fa fa-edit"></i>
                       </button>
                         <button tooltip="Delete&nbsp;Activity"
                         data-valid4="{{$storage->id}}"
     data-toggle="modal" data-target="#delete4" class="btn btn-sm  btn btn-outline-danger">

<i class="fa fa-trash"></i>
 </button></div>
            </td>

        </tr>
            @endforeach
        </tbody>
    </table>
   </div>

   <div class="tab-pane fade show border border-success" id="cultivate" role="tabpanel" aria-labelledby="cultivate">
<div class="card">
  <div class="card-body">
 <button type="button" class="btn btn-sm  btn-success float-right m-4"
                        data-prepid="{{$produce->id}}"   data-toggle="modal" data-target="#cultivateModal">
                         <i class="fa fa-plus-circle"></i>
                     Add Activity
                    </button>
        <table class="table table-bordered mt-4">
        <thead>
        <tr>
            <th>Task</th>
            <th>Cost</th>
            <th>Details</th>
            <th>Remarks</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
         @foreach($cultivations as $cultivation)
        <tr>
            <td>{{$cultivation->task}}</td>
            <td>{{$cultivation->cost}}</td>
            <td>{{$cultivation->details}}</td>
            <td>{{$cultivation->remarks}}</td>
            <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-sm  btn-outline-success"
                        data-ctask="{{$cultivation->task}}"
                        data-ccost="{{$cultivation->cost}}"
                        data-cdetails="{{$cultivation->details}}"
                        data-cultivateid="{{$cultivation->id}}"
                        data-cremarks="{{$cultivation->remarks}}"
                        data-toggle="modal" data-target="#edit-cultivate">
                         <i class="fa fa-edit"></i>
                       </button>
                         <button tooltip="Delete&nbsp;Activity"
                         data-valid5="{{$cultivation->id}}"
     data-toggle="modal" data-target="#delete5" class="btn btn-sm  btn-outline-danger">

<i class="fa fa-trash"></i>
 </button></div>
            </td>

        </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
</div>
<div class="tab-pane fade show border border-success" id="complete" role="tabpanel" aria-labelledby="complete">
<div class="card">
  <div class="card-body">
   <p class="text-center text-danger"> Make sure to complete all the task before clicking this button</p>
   <button type="button" class="btn btn-danger btn-lg btn-block"  data-toggle="modal" data-target="#completeModal"
   data-cpid="{{$produce->id}}"
   data-size="{{$produce->size}}"
    data-fmid="{{$produce->farm->id}}"
   >
   Click Here
  </button>
  </div>
</div>
</div>

<div class="tab-pane fade show border border-success" id="harvested" role="tabpanel" aria-labelledby="harvested">
<div class="card">
  <div class="card-body">
  <button type="button" class="btn btn-sm  btn-success float-right m-4"
                        data-prepid="{{$produce->id}}"   data-toggle="modal" data-target="#harvestedModal">
                         <i class="fa fa-plus-circle"></i>
                     Add Activity
                    </button>
        <table class="table table-bordered mt-4">
        <thead>
        <tr>
            <th>Total harvest</th>
            <th>Price/Kg</th>
            <th>Total Income</th>
             <th>Details</th>
            <th>Remarks</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
         @foreach($harvests as $harvest)
        <tr>
            <td>{{$harvest->total_harv}} (Kg)</td>
            <td>{{$harvest->price}}  (Kshs)</td>
            <td>{{$harvest->total_inc}}  (Kshs)</td>
            <td>{{$harvest->details}}</td>
            <td>{{$harvest->remarks}}</td>
            <td>
                <button type="button" class="btn btn-sm  btn-outline-success"
                        data-hartot="{{$harvest->total_harv}}"
                        data-harinc="{{$harvest->total_inc}}"
                        data-harid="{{$harvest->id}}"
                        data-hard="{{$harvest->details}}"
                        data-harem="{{$harvest->remarks}}"
                        data-toggle="modal" data-target="#edit-harvests">
                         <i class="fa fa-edit"></i>
                       </button>
                         {{-- <button tooltip="Delete&nbsp;Activity"
                         data-valid45="{{$harvest->id}}"
     data-toggle="modal" data-target="#delete45" class="btn btn btn-outline-danger">

<i class="fa fa-trash"></i>
 </button> --}}
            </td>

        </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="completeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="completeModalLabel">Task Completion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('backend.reports.update','test')}}" method="POST">
              @method('put')
      	    @csrf
      <div class="modal-body">
          <input type="hidden" name="cp_id" id="cp_id">
          <input type="hidden" name="fm_id" id="fm_id">
           <input type="hidden" name="size" id="size">
        <p class="text-danger">Are you sure all the tasks are complete?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger btn-sm ">Save </button>
      </div>
         </form>
    </div>
  </div>
</div>

@include('farm.modal')
@include('farm.script')