<table class="table table-bordered" id="Data_Table">
                      <thead>
                        <tr>
                        <th>FarmID</th>
                        <th> Name </th>
                          <th> Soil Type </th>
                          <th> Soil PH </th>
                          <th>Ownership</th>
                          <th> Land size(Acre) </th>
                          <th>Actions</th>
                            <th>
                                 <a data-toggle="tooltip" data-placement="top" title="Manage"
                    href="{{ route('backend.produces.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa fa-plus-circle"></i>
                       Add Produce
                    <!-- /.fa fa-edit -->
                </a>
                            </th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($farms as $farm)
                          <tr>
                              <td>{{$farm->id}}</td>
                               <td>{{$farm->farm_name}}</td>
                              <td>{{$farm->soiltype}}</td>
                              <td>{{$farm->soilph}}</td>
                               <td>{{$farm->ownership}}</td>
                               <td>{{$farm->size}}</td>
                              <td colspan="2">
         <a data-toggle="tooltip" data-placement="top" title="Edit"
           href="{{ route('backend.farms.edit',$farm->slug)}}" class="btn btn-md  btn-outline-primary">
           EDIT
                    <i class="fa fa-edit"></i>
                </a>
                   <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$farm->id}})"
              data-target="#DeleteModal" class="btn   btn-md  btn-outline-danger">
              DELETE
              <i class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="Delete"></i>
              </a>
                              </td>
                             @endforeach
                         </tr>
                      </tbody>
                 </table>
