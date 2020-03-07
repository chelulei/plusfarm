<div class="table-responsive-sm">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>FARM No</th>
            <th>Name</th>
            <th>Size (Ha)</th>
            <th>ALL ACTIVITIES</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$farm->id}}</td>
                <td>{{$farm->farm_name}}</td>
               <td>{{$farm->size}} (Ha)</td>
                <td>
  <a data-toggle="tooltip" data-placement="top" title="View Details"
  href="{{route('record',[$farm->id])}}"  class="btn btn-outline-primary btn-sm">
    VIEW ACTIVITIES
                    <i class="fa fa-search"></i>
                    <!-- /.fa fa-edit -->
                </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<h4 class="text-center  text-primary mt-5">ADD ACTIVITIES</h4>
<hr>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"> Land Preparation</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Planting</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Harvesting</a>
     <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact2" aria-selected="false">Storage</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
     <div class="table-responsive-sm">
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
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
      <div class="table-responsive-sm">
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
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
<div class="table-responsive-sm">
    <table class="table table-bordered mt-4">
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
  <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab">
<div class="table-responsive-sm">
    <table class="table table-bordered mt-4">
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
@include('farm.modal')
