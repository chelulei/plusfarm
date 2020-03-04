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
<div class="list-group pt-5">
<h4 class="text-primary">ADD ACTIVITIES</h4>
 <li class="list-group-item active" data-toggle="modal" data-target="#landModal-{{ $farm->id }}" >Land Preparation</li>
  <li  data-toggle="modal" data-target="#plantModal-{{ $farm->id }}"  class="list-group-item list-group-item-action">Planting</li>
  <li   data-toggle="modal" data-target="#harvestModal-{{ $farm->id }}" class="list-group-item list-group-item-action">Harvesting</li>
  <li  data-toggle="modal" data-target="#storageModal-{{ $farm->id }}" class="list-group-item list-group-item-action">Storage</>
</div>

@include('farm.modal')
