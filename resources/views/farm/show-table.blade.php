
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
                <td>{{$farm->farm_name}}</td>
               <td>{{$farm->size}} (Ha)</td>
            </tr>
        </tbody>
    </table>
</div>
<h4 class="text-center  text-success mt-5">ACTIVITIES</h4>
<hr>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Land Preparation</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Planting</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Harvesting</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="store-tab" data-toggle="tab" href="#store" role="tab" aria-controls="store" aria-selected="false">Storage</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
     <button type="button" class="btn btn-success float-right m-4"
                        data-prepid="{{$farm->id}}"   data-toggle="modal" data-target="#landModal">
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
                 <button type="button" class="btn btn-outline-success" data-mytask="{{$preparation->task}}"
                        data-mycost="{{$preparation->cost}}"
                         data-mydetails="{{$preparation->details}}"
                        data-prepid="{{$preparation->id}}"
                        data-myremarks="{{$preparation->remarks}}"
                        data-toggle="modal" data-target="#edit-pre">
                         <i class="fa fa-edit"></i>
                        EDIT</button>
 <button tooltip="Delete&nbsp;Activity" data-valid="{{$preparation->id}}"
     data-toggle="modal"
data-target="#delete" class="btn btn btn-outline-danger">
           DELETE
<i class="fa fa-trash"></i>
 </button>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>

  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
     <button type="button" class="btn btn-success float-right m-4"
                        data-prepid="{{$farm->id}}"   data-toggle="modal" data-target="#plantModal">
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
            <th>Settings</th>
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
                <button type="button" class="btn btn-outline-primary"
                        data-ytask="{{$planting->task}}"
                        data-ycost="{{$planting->cost}}"
                         data-ydetails="{{$planting->details}}"
                        data-plantpid="{{$planting->id}}"
                        data-yremarks="{{$planting->remarks}}"
                        data-toggle="modal" data-target="#edit-plant">
                         <i class="fa fa-edit"></i>
                        EDIT</button>
        <button tooltip="Delete&nbsp;Activity" data-valid2="{{$planting->id}}"
     data-toggle="modal" data-target="#delete2" class="btn btn btn-outline-danger">
           DELETE
<i class="fa fa-trash"></i>
 </button>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
<button type="button" class="btn btn-success float-right m-4"
                        data-prepid="{{$farm->id}}"   data-toggle="modal" data-target="#harvestModal">
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
             <th>Activities</th>
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
<button type="button" class="btn btn-outline-primary"
                        data-htask="{{$harvesting->task}}"
                        data-hcost="{{$harvesting->cost}}"
                         data-hdetails="{{$harvesting->details}}"
                        data-harvestpid="{{$harvesting->id}}"
                        data-hremarks="{{$harvesting->remarks}}"
                        data-toggle="modal" data-target="#edit-harvest">
                         <i class="fa fa-edit"></i>
                        EDIT</button>
                         <button tooltip="Delete&nbsp;Activity"
                         data-valid3="{{$harvesting->id}}"
     data-toggle="modal" data-target="#delete3" class="btn btn btn-outline-danger">
           DELETE
<i class="fa fa-trash"></i>
 </button>

              </td>
        </tr>
            @endforeach
        </tbody>
    </table>
  </div>
   <div class="tab-pane fade" id="store" role="tabpanel" aria-labelledby="store-tab">
       <button type="button" class="btn btn-success float-right m-4"
                        data-prepid="{{$farm->id}}"   data-toggle="modal" data-target="#storageModal">
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
            <th>Settings</th>
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
                <button type="button" class="btn btn-outline-primary"
                        data-stask="{{$storage->task}}"
                        data-scost="{{$storage->cost}}"
                        data-sdetails="{{$storage->details}}"
                        data-storageid="{{$storage->id}}"
                        data-sremarks="{{$storage->remarks}}"
                        data-toggle="modal" data-target="#edit-storage">
                         <i class="fa fa-edit"></i>
                        EDIT</button>
                         <button tooltip="Delete&nbsp;Activity"
                         data-valid4="{{$storage->id}}"
     data-toggle="modal" data-target="#delete4" class="btn btn btn-outline-danger">
           DELETE
<i class="fa fa-trash"></i>
 </button>
            </td>

        </tr>
            @endforeach
        </tbody>
    </table>
   </div>
</div>

@include('farm.modal')
@include('farm.script')