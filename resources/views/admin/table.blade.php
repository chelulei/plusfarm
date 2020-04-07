<table class="table table-bordered table-striped" id="Data_Table">
                      <thead>
                        <tr>
                        <th> Name </th>
                          <th> Soil Type </th>
                          <th> Soil PH </th>
                          <th>Ownership</th>
                          <th> Land size(Acre) </th>
                          <th colspan="2">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($farms as $farm)
                          <tr>
                               <td>{{$farm->farm_name}}</td>
                              <td>{{$farm->soiltype}}</td>
                              <td>{{$farm->soilph}}</td>
                               <td>{{$farm->ownership}}</td>
                               <td>{{$farm->size}}</td>
                              <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
             @can('farms-edit')
            <a data-toggle="tooltip" data-placement="top" title="Edit"
              href="{{ route('edit',$farm->id)}}" class="btn btn-sm  btn-outline-success">
                        <i class="fa fa-edit"></i>
                    </a>
               @endcan
                @can('farms-delete')
                <button tooltip="Delete&nbsp;Farm" data-valid6="{{$farm->id}}"
                    data-toggle="modal" data-target="#deletef" class="btn btn-sm btn-outline-danger">
                <i class="fa fa-trash"></i>
                </button>
                @endcan
                     </div>
                             </td>
                             @endforeach
                         </tr>
                      </tbody>
                 </table>
  @include('admin.script')
@section('script')
 <script type="text/javascript">
$(document).ready(function () {

 $('#deletef').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var val_id6 = button.data('valid6');
        var modal = $(this);
        modal.find('.modal-body #val_id6').val(val_id6);
    })
 });
   </script>

    @endsection

@section('modal')
    <!-- Delete  admin--->
  <div class="modal fade" id="deletef" tabindex="" role="dialog" aria-labelledby="deletefModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header  bg-danger ">
          <h5 class="modal-title text-white" id="deletefModalLabel">
            We just want to confirm...
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form action="{{ route('delete',$farm->id)}}" method="post">
            @csrf
            @method('DELETE')
             <input type="hidden" name="val_id6" id="val_id6" value="">
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
  @endsection