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
         <a data-toggle="tooltip" data-placement="top" title="Edit"
           href="{{ route('backend.farms.edit',$farm->id)}}" class="btn btn-md  btn-outline-success">
           EDIT
                    <i class="fa fa-edit"></i>
                </a>
                             </td>
                             <td>
            <button tooltip="Delete&nbsp;Farm" data-valid6="{{$farm->id}}"
                data-toggle="modal" data-target="#deletef" class="btn btn btn-outline-danger">
                      DELETE
            <i class="fa fa-trash"></i>
            </button>
                             </td>
                             @endforeach
                         </tr>
                      </tbody>
                 </table>
