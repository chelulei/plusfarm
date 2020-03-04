<table class="table table-bordered" id="Data_Table">
                      <thead>
                        <tr>
                        <th>FarmID</th>
                        <th> Name </th>
                          <th> Soil Type </th>
                          <th> Soil PH </th>
                          <th>Ownership</th>
                          <th> Land size(Acre) </th>
                           <th>Settings</th>
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
                              <td>
                   <a data-toggle="tooltip" data-placement="top" title="View Details" href="{{ route('backend.farms.show',$farm->id)}}" class="btn btn-outline-primary btn-sm">
                     Manage
                    <i class="fa fa-cogs"></i>
                    <!-- /.fa fa-edit -->
                </a>
         <a data-toggle="tooltip" data-placement="top" title="Edit"
           href="{{ route('backend.farms.edit',$farm->id)}}" class="btn btn-md  btn-outline-primary">
                    <i class="fa fa-edit"></i>
                </a>
                   <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$farm->id}})"
              data-target="#DeleteModal" class="btn   btn-md  btn-outline-danger">
              <i class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="Delete"></i>
              </a>
                              </td>
                             @endforeach
                         </tr>
                      </tbody>
                 </table>