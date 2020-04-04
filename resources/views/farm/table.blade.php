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
         <a data-toggle="tooltip" data-placement="top" title="Edit"
           href="{{ route('backend.farms.edit',$farm->id)}}" class="btn btn-sm  btn-outline-success">
                    <i class="fa fa-edit"></i>
                </a>
            <button tooltip="Delete&nbsp;Farm" data-valid6="{{$farm->id}}"
                data-toggle="modal" data-target="#deletef" class="btn btn-sm btn-outline-danger">
            <i class="fa fa-trash"></i>
            </button></div>
                             </td>
                             @endforeach
                         </tr>
                      </tbody>
                 </table>
